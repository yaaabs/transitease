<?php
require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && isset($_POST['username'])) {
        $db = new DbOperations();
        if ($db->changeUsername($_POST['id'], $_POST['username'])) {
            $response['error'] = false;
            $response['message'] = "Username changed successfully";
        } else {
            $response['error'] = true;
            $response['message'] = "Failed to change username. Please try again.";
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
