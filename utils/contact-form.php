<?php

    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $subject = isset($_POST['subject']) ? $_POST['subject'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    $formFilled = $fullname && $phone && $email && $subject && $message;

    if($formFilled){
        echo $fullname;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $subject;
        echo "<br>";
        echo $message;
    } else {
        echo "Imcomplete form";
    }

?>