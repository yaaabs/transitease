<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../includes/DbOperations.php';
require '../vendor/autoload.php'; // PHPMailer autoload

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $db = new DbOperations();
        $result = $db->createUser($_POST['username'], $_POST['password'], $_POST['email']);

        if ($result == 1) {
            $response['error'] = false;
            $response['message'] = "User registered successfully";

            $email = $_POST['email'];
            $token = bin2hex(random_bytes(50));
            $db->saveVerificationToken($email, $token);

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'theososa@transitease.tech';
                $mail->Password = 'Theososa30.';
                $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom('theososa@transitease.tech', 'TransitEase');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Email Verification';
                $verificationLink = "https://transitease.tech/v1/verify_email.php?token=$token";

                $mail->Body = "Please click the following link to verify your email: <a href='$verificationLink'>Verify Email</a>";

                if ($mail->send()) {
                    $response['message'] = "Verification email sent";
                } else {
                    $response['error'] = true;
                    $response['message'] = "Verification email failed to send";
                }
            } catch (Exception $e) {
                $response['error'] = true;
                $response['message'] = "Error sending email: " . $mail->ErrorInfo;
            }
        } elseif ($result == 2) {
            $response['error'] = true;
            $response['message'] = "Some error occurred, please try again";
        } elseif ($result == 0) {
            $response['error'] = true;
            $response['message'] = "User already registered. Please choose a different email or username.";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Required fields are missing";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request";
}

echo json_encode($response);
?>
