<?php
    require_once __DIR__ . '/../connection.php';
    require_once __DIR__ . '/../executeQueryWithParams.php';

    $fullname = isset($_POST['fullname']) 
        ? htmlspecialchars($_POST['fullname']) 
        : null;
    $phone = isset($_POST['phone']) 
        ? htmlspecialchars($_POST['phone']) 
        : null;
    $email = isset($_POST['email']) 
        ? htmlspecialchars($_POST['email']) 
        : null;
    $subject = isset($_POST['subject']) 
        ? htmlspecialchars($_POST['subject']) 
        : null;
    $message = isset($_POST['message']) 
        ? htmlspecialchars($_POST['message']) 
        : null;
    $rating = isset($_POST['rating'])
        ? htmlspecialchars($_POST['rating']) 
        : null;

    $query = "INSERT INTO message (full_name, email, phone, subject, message, stars) VALUES (?, ?, ?, ?, ?, ?);";

    try {
        executeQueryWithParams($connection, $query, 'sssssi', [
            $fullname, $phone, $email, $subject, $message, $rating
        ]);
        
    } catch (PDOException $e) {
        exit;
    }

    $connection->close();

    echo $fullname;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $subject;
    echo "<br>";
    echo $message;

?>