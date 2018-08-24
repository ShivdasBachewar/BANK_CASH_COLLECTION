<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="bank_cash_collection";
	$conn=new mysqli($servername,$username,$password,$db);

require_once('class.phpmailer.php');

$agent_id = $_REQUEST['agent_id'];
$param = $_REQUEST['param'];

$result = $conn->query("SELECT * FROM agent_detail where agent_id='$agent_id'");
$row = $result->fetch_assoc();

$mail = new PHPMailer or die('BP1');

$mail->isSMTP();                       
$mail->Host = 'smtp.gmail.com';                       
$mail->SMTPAuth = true;                               
$mail->Username = "admin_bcc@gmail.com";     
$mail->Password = "Admin@1234";                     
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                    

$mail->setFrom('admin_bcc@gmail.com', 'Bank Cash Collection');
$mail->addAddress($row['email'], $row['fname'].' '.$row['mname'].' '.$row['lname']);     

if ($param=="activation1") {
	$mail->Subject = "Confirmation of your Agent Account";
	$mail->Body    = "Dear ".$row['fname']."<br><p>This is a confirmation Email generated automatically.This email shows that you have fullfilled all the detail required to became a Agent in Bank Cash Collection System.</p><p>Please verify your detail if there is any problem please send us with the detailed discription.</p><b><center>
		Name : ".$row['fname']." ".$row['mname']." ".$row['lname']."<br>
		Agent Id : ".$row['agent_id']."<br>
		Password : ".$row['password']."<br>
		Account Number : ".$row['acc_no']."<br>
		</center></b>";
}else if ($param=="activation") {
	$mail->Subject = "Activation of your Agent Account";
	$message = "Dear ".$row['fname']."<br><p>This is a confirmation Email generated automatically.This email shows that you have been activated by the Bank Cash Collection System. Please verify following detail.</p><p>Please verify your detail if there is any problem please send us with the detailed discription.</p><br><b><center>
		Name : ".$row['fname']." ".$row['mname']." ".$row['lname']."<br>
		Agent Id : ".$row['agent_id']."<br>
		Password : ".$row['password']."<br>
		Account Number : ".$row['acc_no']."<br>
		</center></b>";

	$mail->Body    = $message;

}else if ($param=="deactivation") {
	$mail->Subject = "Deactivation of your Agent Account";
	$mail->Body    = "Dear ".$row['fname']."<br><p>This is a confirmation Email generated automatically.This email shows that you have been deactivated by the Bank Cash Collection System. Please verify following detail.</p><p>Please verify your detail if there is any problem please send us with the detailed discription.</p><br><b><center>
		Name : ".$row['fname']." ".$row['mname']." ".$row['lname']."<br>
		Agent Id : ".$row['agent_id']."<br>
		Password : ".$row['password']."<br>
		Account Number : ".$row['acc_no']."<br>
		</center></b>";
}else if ($param=="modification") {
	$mail->Subject = "Modification in your Agent Account";
	$mail->Body    = "Dear ".$row['fname']."<br><p>This is a confirmation Email generated automatically.This email shows that youer account detail have been modified successfully by the Bank Cash Collection System. Please verify following detail.</p><p>Please verify your detail if there is any problem please send us with the detailed discription.</p><br><b><center>
		Name : ".$row['fname']." ".$row['mname']." ".$row['lname']."<br>
		Agent Id : ".$row['agent_id']."<br>
		Password : ".$row['password']."<br>
		Account Number : ".$row['acc_no']."<br>
		</center></b>";
}
else if ($param=="deletion") {
	$mail->Subject = "Deletion of your Agent Account";
	$mail->Body    = "Dear ".$row['fname']."<br><p>This is a confirmation Email generated automatically.This email shows that you have been deleted from the Bank Cash Collection System. Please verify following detail.</p><p>Please verify your detail if there is any problem please send us with the detailed discription.</p><br><b><center>
		Name : ".$row['fname']." ".$row['mname']." ".$row['lname']."<br>
		Agent Id : ".$row['agent_id']."<br>
		Password : ".$row['password']."<br>
		Account Number : ".$row['acc_no']."<br>
		</center></b>";
}else{
	$mail->Subject = "Deletion of your Agent Account";
	$mail->Body    = "Dear ".$row['fname'];
}

$mail->IsHTML(true);
if(!$mail->send()) {
    echo 'FAIL';
} else {
    echo 'SUCCESS';
}
?>