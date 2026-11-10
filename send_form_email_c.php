<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@hingepointconsulting.com";
    $email_subject = "来自联系我们网页";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
       !isset($_POST['company_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['subject']) ||
	    !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $company_name = $_POST['company_name']; // not required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $subject = $_POST['subject']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
/* 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

   if(strlen($subject) < 2) {
    $error_message .= 'The Subject you entered does not appear to be valid.<br />';
  }
  
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 */
    $email_message = "联系我们表格如下\r\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"(replace)",$string);
    }
 
     
 
    $email_message .= "姓名: ". $name . "\r\n";
    $email_message .= "公司名: " . $company_name . "\r\n";
	$email_message .= "电子邮件: " . $email_from . "\r\n";
    $email_message .= "电话号码: " . $telephone . "\r\n";
    $email_message .= "主题: " . clean_string($subject) . "\r\n";
    $email_message .= "内容: " . clean_string($comments) . "\r\n";

 /*   $email_message .= "姓名: ". clean_string($name) . "\r\n";
    $email_message .= "公司名: " . clean_string($company_name) . "<br>";
	$email_message .= "电子邮件: " . clean_string($email_from) . "<br>";
    $email_message .= "电话号码: " . clean_string($telephone) . "<br>";
    $email_message .= "主题: " . clean_string($subject) . "<br>";
    $email_message .= "内容: " .  clean_string($comments) . "<br>";
 */
// create email headers
$headers[]= "MIME-Version: 1.0";
$headers[]= "Content-type:text/plain;charset=UTF-8";

// More headers
$headers[]= 'From: ' . $email_from;

mail($email_to, $email_subject, $email_message, implode("\r\n", $headers));  
?>
 
<!-- include your own success html here -->
 

 
<?php
 include("ThankYou_c.php");
}
?>
