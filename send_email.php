<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $restaurant = $_POST['restaurant'];
    $complaint = $_POST['complaint'];

    $to = 'your-email@example.com';
    $subject = 'Worker Complaint Report';
    $message = "Restaurant: $restaurant\n\nComplaint: $complaint";
    $headers = 'From: noreply@example.com' . "\r\n" .
                'Reply-To: noreply@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        header('Location: success.html');
    } else {
        header('Location: error.html');
    }
} else {
    header('Location: index.html');
}