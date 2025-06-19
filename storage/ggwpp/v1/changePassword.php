<?php
require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['current_password']) && isset($_POST['new_password'])) {
        $db = new DbOperations();

        if ($db->changePassword($_POST['username'], $_POST['current_password'], $_POST['new_password'])) {
            $response['error'] = false;
            $response['message'] = "Password changed successfully";
        } else {
            $response['error'] = true;
            $response['message'] = "Failed to change password. Please check your current password.";
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
