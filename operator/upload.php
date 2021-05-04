<?php
require_once('../libs/common.php');
require_once('../libs/operator.php');
require_once('../libs/chat.php');
require_once('phpmail/PHPMailerAutoload.php');	
function make_safe($variable) 
{
   $variable = mysql_real_escape_string(trim($variable));
   $variable = strip_tags(trim($variable));
   return $variable; 
}
//print_r($_POST);
$operator = check_login();
$target_dir = "../uploads/";
$array = explode('.', basename($_FILES["fileToUpload"]["name"]));
$extension = end($array);
$filename1 = time().".".$extension; //basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir .$filename1;//time().".".$extension; //basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(file_exists($_FILES['fileToUpload']['tmp_name']) || is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) 
//if(isset($_FILES['fileToUpload']))
{
    $tomail=$_POST['to'];    
    //$from_email=$_POST['frommail'];// $_POST['frommail'];
    $from_email=$_SESSION["operator"]["vcemail"];//$_POST['frommail'];// $_POST['frommail'];
    $user_email=$from_email;
    //$from_email = 'sender_mail@example.com'; //sender email
    $recipient_email = $tomail;//'recipient_mail@example.com'; //recipient email
    //$subject = 'Test mail'; //subject of email
    $subject = $_POST['subject'];//'Test mail'; //subject of email
    $message = $_POST['message'];//'This is body of the message'; //message body
    
    //get file details we need
    $file_tmp_name    = $_FILES['fileToUpload']['tmp_name'];
    $file_name        = $_FILES['fileToUpload']['name'];
    $file_size        = $_FILES['fileToUpload']['size'];
    $file_type        = $_FILES['fileToUpload']['type'];
    $file_error       = $_FILES['fileToUpload']['error'];
    
    //$user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if($file_error>0)
    {
        die('upload error');
    }
/*
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));


        $boundary = md5("intiwhiz"); 
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$user_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message)); 
        
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content; 
    
    
 * $sentMail = @mail($recipient_email, $subject, $body, $headers);
 */
    $mail             = new PHPMailer();
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "localhost"; // SMTP server
    //$mail->Host       = "182.253.205.132"; // SMTP server
    $mail->SMTPDebug  = 0;                      
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "bookings@roomnrate.com"; // SMTP account username
    $mail->Password   = "b00k1ng5";        // SMTP account password
    $mail->SetFrom($user_email, $user_email);
    $mail->AddReplyTo($user_email,$user_email);
    $mail->AddCC("contact@intiwhiz.com");
    $mail->Subject    = $subject;
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->AddAttachment($_FILES['fileToUpload']['tmp_name'],
                         $_FILES['fileToUpload']['name']);
    $mail->MsgHTML($message);
    $mail->AddAddress($recipient_email, $recipient_email);
   
    if($mail->Send()) //output success or failure messages
    {       
        echo 'Thank you for your email';
        //echo 'Thank you for your email to'.$recipient_email.$subject.$message;
        //die('Thank you for your email');
    }else{
        //die('Could not send mail! Please check your PHP mail configuration.');  
        echo 'Could not send mail! Please check your PHP mail configuration.';  
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $id=$_POST['idm'];
$link = connect();

$linkfile="<a href=\"http://".$_SERVER['HTTP_HOST']."/livechat/uploads/".$filename1."\">Attachment</a>";
$simpan=  make_safe($message);
$simpan1="\nReply mail by ".$from_email."\n=====\n";
$simpan=$simpan1.$simpan."\n".$linkfile;
$sql="update chatnotification set tmessage=concat(tmessage,'".$simpan."') where id=".$id;
mysql_query($sql);



}
else
{
    $tomail=$_POST['to'];
    //$from_email=$_POST['from'];
    $from_email=$_SESSION["operator"]["vcemail"];//$_POST['from'];
    $user_email=$from_email;
    //$from_email = 'sender_mail@example.com'; //sender email
    $recipient_email = $tomail;//'recipient_mail@example.com'; //recipient email
    //$subject = 'Test mail'; //subject of email
    $subject = $_POST['subject'];//'Test mail'; //subject of email
    $message = $_POST['message'];//'This is body of the message'; //message body
    /*    $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "CC:contact@intiwhiz.com\r\n"; 
        $headers .= "Reply-To: ".$user_email."" . "\r\n";
    $sentMail = @mail($recipient_email, $subject, $message, $headers);
    if($sentMail) //output success or failure messages*/
    $mail             = new PHPMailer();
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host       = "localhost"; // SMTP server
    //$mail->Host       = "182.253.205.132"; // SMTP server
    $mail->SMTPDebug  = 0;                      
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "bookings@roomnrate.com"; // SMTP account username
    $mail->Password   = "b00k1ng5";        // SMTP account password
    $mail->SetFrom($user_email, $user_email);
    $mail->AddReplyTo($user_email,$user_email);
    $mail->AddCC("contact@intiwhiz.com");
    $mail->Subject    = $subject;
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->AddAttachment($_FILES['fileToUpload']['tmp_name'],
                         $_FILES['fileToUpload']['name']);
    $mail->MsgHTML($message);
    $mail->AddAddress($recipient_email, $recipient_email);
   
    if($mail->Send())
    {       
        //die('Thank you for your email');
        echo 'Thank you for your email';
        //echo 'Thank you for your email to'.$recipient_email.$subject.$message;
    }else{
        //die('Could not send mail! Please check your PHP mail configuration.');  
        echo 'Could not send mail! Please check your PHP mail configuration.';  
    }
    $id=$_POST['idm'];
    $link = connect();
    $simpan=  make_safe($message);
    $simpan1="\nReply mail by ".$from_email."\n=====\n";
    $simpan=$simpan1.$simpan;
    $sql="update chatnotification set tmessage=concat(tmessage,'".$simpan."') where id=".$id;
    mysql_query($sql);

}

?>
