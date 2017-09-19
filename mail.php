<<<<<<< HEAD
<?php
$sub="Email for forgot password";
$msz="The Name is:-".$_POST['Name']." Email:-".$_POST['Email']."Message :-".$_POST['Message'];
mail("jainjai1080@gmail.com",$sub,$msz,'From: Jai Jain <jainjai1080@gmail.com>');
=======
<?php $Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$formcontent="From: $Name \n Message: $Message";
$recipient = "jainjai1080@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $Email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
>>>>>>> 6ac291b4503e7893aa4135a0eefc05cfaf989cc0
?>
