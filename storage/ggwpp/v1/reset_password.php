<?php
require_once 'DbConnect.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $db = new DbConnect();
        $con = $db->connect();

        $stmt = $con->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Generate a unique reset token
            $token = bin2hex(random_bytes(50));
            $stmt->close();

            // Store the token in the database with an expiration date
            $stmt = $con->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
            $stmt->bind_param("ss", $token, $email);
            if ($stmt->execute()) {
                $resetLink = "http://192.168.1.19/ggwpp/v1/reset_password.php?token=$token";
                // Send the email
                $subject = "Password Reset Request";
                $message = "Click the following link to reset your password: $resetLink";
                $headers = "From: no-reply@yourdomain.com";

                if (mail($email, $subject, $message, $headers)) {
                    $response['error'] = false;
                    $response['message'] = "Password reset email sent successfully";
                } else {
                    $response['error'] = true;
                    $response['message'] = "Failed to send email";
                }
            } else {
                $response['error'] = true;
                $response['message'] = "Failed to generate reset token";
            }
        } else {
            $response['error'] = true;
            $response['message'] = "Email not found";
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
