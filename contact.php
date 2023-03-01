<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['mail'];
    $select_subject = $POST['subject'];
    $message = $_POST['message'];

    $mailTO = "nithinjohn399@gmail.com";
    $headers = "From:  " .$mailFrom;
    $txt = "You have message " .$name".\n\n".$message;

    mail($mailTo, $name,$txt, $headers);

    header("Location: index.html?MessageSent");
}

?>