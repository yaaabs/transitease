<?php
require_once '../includes/DbOperations.php';
header('Content-Type: application/json');
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $db = new DbOperations();
    $reports = $db->getReports();

    if ($reports != null) {
        $response['error'] = false;
        $response['reports'] = $reports;
    } else {
        $response['error'] = true;
        $response['message'] = "No reports found";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request";
}

echo json_encode($response);
?>
