<?php
require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'])) {
        $db = new DbOperations();
        $user = $db->getUserById($_POST['id']);
        
        if ($user != null) {
            $response['error'] = false;
            $response['user'] = $user;
        } else {
            $response['error'] = true;
            $response['message'] = "User not found";
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
