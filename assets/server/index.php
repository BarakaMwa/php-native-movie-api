<?php

$response = array();
$success = "success";
$error = "error";
$data = array();
$response_error = "Invalid Response";
$request_error = "Invalid Request";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}


/**
 * @param string $status
 * @param array $response
 * @return void
 */
function returnJSONResponse(string $status, array $response, string $message, array $data, object $link): void
{
    $response["data"] = null;
    $response["status"] = $status;
    if ($data != null) {
        $response["data"] = $data;
    }
//    mysqli_close($link);
    $response["message"] = $message;
    echo json_encode($response);
    exit;
}
?>