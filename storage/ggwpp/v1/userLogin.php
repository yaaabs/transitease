<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $db = new DbOperations();
        $result = $db->userLogin($_POST['email'], $_POST['password']);
        
        if ($result['is_verified'] == 1) {
            // Allow login
            $response['error'] = false;
            $response['message'] = "Login successful";
            $response['user'] = $result;
        } else {
            // Email not verified
            $response['error'] = true;
            $response['message'] = "Please verify your email before logging in.";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Required fields are missing.";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request.";
}

echo json_encode($response);
?>
