<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $restaurant = $_POST['restaurant'];
    $complaint = $_POST['complaint'];

    $to = 'rafaelreiss@gmail.com';
    $subject = 'Worker Complaint Report';
    $message = "Restaurant: $restaurant\n\nComplaint: $complaint";
    $headers = 'From: rafaelreiss@gmail.com' . "\r\n" .
                'Reply-To: rafaelreiss@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        header('Location: success.html');
    } else {
        header('Location: error.html');
    }
} else {
    header('Location: index.html');
}