<?php
require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'])) {
        $db = new DbOperations();
        if ($db->deleteUser($_POST['id'])) {
            $response['error'] = false;
            $response['message'] = "User deleted successfully";
        } else {
            $response['error'] = true;
            $response['message'] = "Failed to delete user. Please try again.";
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
