<?php
  if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $mailTo="cyprian.galicki@op.pl";
    $headers="From: ".$visitor_email";
    $txt="You have received an e-mail from " .$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
    header("Locatation: contact.html");
  }
?>


