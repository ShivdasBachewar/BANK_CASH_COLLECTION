<?php
include 'database_connectivity.php';
//echo $_REQUEST['a'];

	$fname  	= $_REQUEST['fname'];
	$mname  	= $_REQUEST['mname'];
	$lname  	= $_REQUEST['lname'];
	$moname  	= $_REQUEST['moname'];
	$bday  		= date($_REQUEST['bday']);
	$it_pan  	= $_REQUEST['it_pan'];
	$adhaar  	= $_REQUEST['adhaar'];
	$s_acc 		= $_REQUEST['s_acc'];
	$mobno  	= $_REQUEST['mobno'];
	$alt_mobno  = $_REQUEST['alt_mobno'];
	$email  	= $_REQUEST['email'];
	$addr   	= $_REQUEST['addr'];
	$addr2   	= $_REQUEST['addr2'];
	$gender     = $_REQUEST['gender'];
	$agent_id   = "AGN";
	$today= date('Y-m-d');
	
	//echo $fname.' '.$mname.' '.$lname.' '.$moname.' '.$bday.' '.$it_pan.' '.$adhaar.' '.$s_acc.' '.$mobno.' '.$alt_mobno.' '.$email.' '.$addr.' '.$addr2.' '.$gender;

	$date_file = fopen('date.txt', "r");
	$previous_date = fgets($date_file);
	fclose($date_file);

	if ($previous_date!=date('ymd')) {
		$date_file = fopen('date.txt', "w+");
		fputs($date_file, date('ymd'),10);
		fclose($date_file);
		
		$id_file = fopen('current_id.txt', "w+");
		fputs($id_file,"0001",4);
		fclose($id_file);
	}	

if($conn->connect_error)
{
	echo "There is some problem with database connnection<hr>";
}
else
{	
	//$agent_id .= date('ymd').(string)$GLOBALS['current_id'];
	$id_file = fopen('current_id.txt', "r");
	$current_id = fgets($id_file);
	fclose($id_file);
	$agent_id .= date('ymd').(string)$current_id;

	$temp_upload_file1 = upload_file('it_pan_upload_file','temp_upload_file1');
	$temp_upload_file2 = upload_file('adhaar_upload_file','temp_upload_file2');

	if ($temp_upload_file1[0]==1 && $temp_upload_file2[0]==1) {
		$result = $conn->query("INSERT INTO agent_detail (fname,mname,lname,mothername,agent_id,password,dob,it_pan,uid_adhar,acc_no,perm_addr,local_addr,mobno,alt_mobno,email,status,gender,agent_added_date,last_disabled_date) VALUES('".$fname."','".$mname."','".$lname."','".$moname."','".$agent_id."','".$fname."@123','".$bday."','".$it_pan."','".$adhaar."','".$s_acc."','".$addr."','".$addr2."','".$mobno."','".$alt_mobno."','".$email."','0','".$gender."','".$today."','".$today."')");
		if($result){
			$id_file = fopen('current_id.txt', "w+");
			$current_id += 1;
			$current_id = sprintf("%04d", $current_id);
			fputs($id_file, (string)$current_id,4);
			fclose($id_file);
			rename("uploads/temp_upload_file1".".".$temp_upload_file1[1], "uploads/".$agent_id."_pan.".$temp_upload_file1[1]);
			rename("uploads/temp_upload_file2".".".$temp_upload_file2[1], "uploads/".$agent_id."_adhaar.".$temp_upload_file2[1]);
			echo "1";
		}else{
			echo "0";
		}
	}
}	
?>






<?php
function upload_file($p,$target_file_name)
{   
$target_file = "uploads/" . basename($_FILES[$p]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file_name = "uploads/".$target_file_name.".".$imageFileType;

if ($_FILES[$p]["size"] > 1000000) //Less Than 1Mbyte
{
    echo "Sorry, your file".basename( $_FILES[$p]["name"])." is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES[$p]["tmp_name"], $target_file_name)) {
        return array("1" , $imageFileType);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}




?>