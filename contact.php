<?php
//Variable Setting

    $name = $_POST['firstname'];
    $email = $_POST['email']
    $message = $__POST['message'];

    mail("durganshgupta@gmail.com","Msg: $email",$message);
?>
