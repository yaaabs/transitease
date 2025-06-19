<?php
require_once '../includes/DbOperations.php';
header('Content-Type: application/json');
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['title']) && isset($_POST['description'])) {
        $db = new DbOperations();
        if ($db->addReport($_POST['title'], $_POST['description'])) {
            $response['error'] = false;
            $response['message'] = "Report submitted successfully";
        } else {
            $response['error'] = true;
            $response['message'] = "Failed to submit report. Please try again.";
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
