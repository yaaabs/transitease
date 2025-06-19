<?php
require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['route'])) {
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $route = $_POST['route'];

        $db = new DbOperations();
        $fare = $db->getFare($origin, $destination);

        if ($fare !== null) {
            $response['error'] = false;
            $response['fare'] = $fare;
        } else {
            $response['error'] = true;
            $response['message'] = "No fare found for the specified route";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Required fields are missing";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request";
}

header('Content-Type: application/json');
echo json_encode($response);
?>
