<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="bank_cash_collection";
	$conn=new mysqli($servername,$username,$password,$db);


	$fname  	= $_REQUEST['fname'];
	$agent_id   = $_REQUEST['ag_id'];
	$acc_no  	= $_REQUEST['acc_no'];
	$mobno  	= $_REQUEST['mobno'];
	$mobno2  	= $_REQUEST['mobno2'];
	$email  	= $_REQUEST['email'];
	$addr   	= $_REQUEST['addr'];
	$gender     = $_REQUEST['gender'];
	
	$client_id   = "SUB";
	$date_file = fopen('date.txt', "r");
	$previous_date = fgets($date_file);
	//echo $previous_date;
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
	
	//$s_acc .= date('ymd').(string)$current_id;
	$client_id .= date('ymd').(string)$current_id;
	$res=$conn->query("SELECT * FROM agent_detail WHERE agent_id='".$agent_id."'");
	if($res->num_rows>0){
	$result = $conn->query("INSERT INTO subscriber_detail (full_name, agent_id, acc_no, mobno, alt_mobno ,email , address, subscriber_id, gender) 
	VALUES('".$fname."','".$agent_id."','".$acc_no."','".$mobno."','".$mobno2."','".$email."','".$addr."','".$client_id."','".$gender."')");

	if($result){
		$id_file = fopen('current_id.txt', "w+");
		$current_id += 1;
		$current_id = sprintf("%04d", $current_id);
		fputs($id_file, (string)$current_id,4);
		fclose($id_file);
		echo "1";
	}else{
		echo "0";
	}
	}
	else
	{
		echo "0";
	}
}
?>