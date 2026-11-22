<?php

$statusCode = 404;

$category = "";
$action   = "";

switch (true) {
    case ($statusCode >= 100 && $statusCode <= 199):
        $category = "Informational (1xx)";
        break;
    case ($statusCode >= 200 && $statusCode <= 299):
        $category = "Successful (2xx)";
        break;
    case ($statusCode >= 300 && $statusCode <= 399):
        $category = "Redirection (3xx)";
        break;
    case ($statusCode >= 400 && $statusCode <= 499):
        $category = "Client Error (4xx)";
        $action   = "Please check your request input";
        break;
    case ($statusCode >= 500 && $statusCode <= 599):
        $category = "Server Error (5xx)";
        $action   = "Please try again later or contact support";
        break;
    default:
        $category = "Invalid Status Code";
        break;
}

echo "Status code: {$statusCode}\n";
echo "Category: {$category}\n";
if ($action !== "") {
    echo "Recommended action: {$action}\n";
}