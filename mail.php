<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'backendotzyvi@gmail.com';
$mail->Password = 'Soba1212'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('backendotzyvi@gmail.com'); 
$mail->addAddress('arturnikolaichuk23@gmail.com');     
$mail->isHTML(true);                               

$mail->Subject = 'Повідомлення';
$mail->Body    = 'Користувач: ' .$name . ' <br>Його номер телефону: ' .$phone. '<br>Його повідомлення: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>