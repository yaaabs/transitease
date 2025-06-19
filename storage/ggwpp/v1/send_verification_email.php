<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'DbConnect.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $db = new DbConnect();
        $con = $db->connect();

        // Generate a unique verification token
        $token = bin2hex(random_bytes(50));

        // Store the token in the database with an expiration date
        $stmt = $con->prepare("UPDATE users SET verification_token = ?, verification_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
        $stmt->bind_param("ss", $token, $email);
        if ($stmt->execute()) {
            $verificationLink = "http://192.168.1.19/ggwpp/v1/verify_email.php?token=$token";
            // Send the email
            $subject = "Email Verification";
            $message = "Click the following link to verify your email: $verificationLink";
            $headers = "From: no-reply@yourdomain.com";

            if (mail($email, $subject, $message, $headers)) {
                $response['error'] = false;
                $response['message'] = "Verification email sent successfully";
            } else {
                $response['error'] = true;
                $response['message'] = "Failed to send email";
            }
        } else {
            $response['error'] = true;
            $response['message'] = "Failed to generate verification token";
        }
        $stmt->close();
    } else {
        $response['error'] = true;
        $response['message'] = "Required field missing";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid request";
}

echo json_encode($response);
?>
