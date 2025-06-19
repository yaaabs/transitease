<?php
$token = bin2hex(random_bytes(50));
$db->saveVerificationToken($email, $token);

error_log("Generated Token: $token for email: $email"); // Debug log

require_once '../includes/DbOperations.php';

$response = array();

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $db = new DbOperations();

    $result = $db->verifyEmail($token);

    if ($result == 1) {
        $response['error'] = false;
        $response['message'] = "Email verified successfully";
    } else {
        $response['error'] = true;
        $response['message'] = "Invalid or expired token";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Token missing";
}

echo json_encode($response);
?>
