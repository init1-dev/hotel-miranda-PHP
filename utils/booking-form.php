<?php

    $arrival = isset($_POST['arrival']) ? $_POST['arrival'] : null;
    $departure = isset($_POST['departure']) ? $_POST['departure'] : null;
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $specialRequest = isset($_POST['special-request']) ? $_POST['special-request'] : null;

    $formFilled = $arrival && $departure && $fullname && $phone && $email && $specialRequest;

    if($formFilled){
        echo $arrival;
        echo "<br>";
        echo $departure;
        echo "<br>";
        echo $fullname;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $specialRequest;
    } else {
        echo "Imcomplete form";
    }

?>