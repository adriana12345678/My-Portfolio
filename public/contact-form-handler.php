<?php
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mailTo = 'popa_adriana97@yahoo.ro';
    $headers = "From: $mailFrom \r\n";
    $txt = " You have received an e-mail from: $name.\n". 
            "User message: $message.\n";

    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.html");
?>