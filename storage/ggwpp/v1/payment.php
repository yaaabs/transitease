<?php
require_once '../includes/DbOperations.php';

header('Content-Type: application/json');
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user_id']) && isset($_POST['amount'])) {
        $userId = $_POST['user_id'];
        $amount = $_POST['amount'];

        $db = new DbOperations();
        $user = $db->getUserById($userId);

        if ($user) {
            $email = $user['email'];
            $name = $user['name'];
            $phone = "09186279823"; // Placeholder for user's phone number

            $paymentMethodResponse = createPaymentMethod($name, $email, $phone, 'gcash');

            if ($paymentMethodResponse && isset($paymentMethodResponse['data']['id'])) {
                $paymentMethodId = $paymentMethodResponse['data']['id'];

                $paymentIntentResponse = createPaymentIntent($amount, 'PHP', 'Payment Testing');

                if ($paymentIntentResponse && isset($paymentIntentResponse['data']['id'])) {
                    $paymentIntentId = $paymentIntentResponse['data']['id'];

                    $attachResponse = attachPaymentMethodToIntent($paymentIntentId, $paymentMethodId, 'https://dashboard.paymongo.com/developers');

                    echo json_encode($attachResponse);
                } else {
                    $response['error'] = true;
                    $response['message'] = "Failed to create payment intent.";
                    echo json_encode($response);
                }
            } else {
                $response['error'] = true;
                $response['message'] = "Failed to create payment method.";
                echo json_encode($response);
            }
        } else {
            $response['error'] = true;
            $response['message'] = "User not found.";
            echo json_encode($response);
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Required fields are missing.";
        echo json_encode($response);
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid request.";
    echo json_encode($response);
}

function createPaymentMethod($billingName, $billingEmail, $billingPhone, $type) {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/payment_methods",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'data' => [
                'attributes' => [
                    'billing' => [
                        'name' => $billingName,
                        'email' => $billingEmail,
                        'phone' => $billingPhone
                    ],
                    'type' => $type
                ]
            ]
        ]),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "accept: application/json",
            "authorization: Basic c2tfdGVzdF9KTXBpcnhlcWVhUVJFQ3VyNkxaRHNXY1g6"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return null;
    } else {
        return json_decode($response, true);
    }
}

function createPaymentIntent($amount, $currency, $description) {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/payment_intents",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'data' => [
                'attributes' => [
                    'amount' => $amount,
                    'payment_method_allowed' => [
                        'atome', 'card', 'dob', 'paymaya', 'billease', 'gcash', 'grab_pay'
                    ],
                    'payment_method_options' => [
                        'card' => [
                            'request_three_d_secure' => 'any'
                        ]
                    ],
                    'currency' => $currency,
                    'capture_type' => 'automatic',
                    'description' => $description,
                    'statement_descriptor' => 'Paid'
                ]
            ]
        ]),
        CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "authorization: Basic c2tfdGVzdF9KTXBpcnhlcWVhUVJFQ3VyNkxaRHNXY1g6",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return null;
    } else {
        return json_decode($response, true);
    }
}

function attachPaymentMethodToIntent($paymentIntentId, $paymentMethodId, $returnUrl) {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/payment_intents/{$paymentIntentId}/attach",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'data' => [
                'attributes' => [
                    'payment_method' => $paymentMethodId,
                    'return_url' => $returnUrl
                ]
            ]
        ]),
        CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "authorization: Basic c2tfdGVzdF9KTXBpcnhlcWVhUVJFQ3VyNkxaRHNXY1g6",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return null;
    } else {
        return json_decode($response, true);
    }
}
?>
