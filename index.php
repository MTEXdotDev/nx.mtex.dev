<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uriSegments = explode('/', trim($requestUri, '/'));
$method = $_SERVER['REQUEST_METHOD'];

$response = [
    "status" => "success",
    "meta" => [
        "service" => "MTEX Nexus API",
        "version" => "1.0.0-beta",
        "timestamp" => time(),
    ],
    "data" => null
];

if ($method === 'OPTIONS') {
    http_response_code(200);
    exit();
}

switch ($uriSegments[0] ?? '') {
    case '':
        $response['data'] = [
            "message" => "Welcome to the mtex.dev demo api ecosystem.",
            "endpoints" => [
                "GET /status" => "System health check",
                "GET /user" => "Mock user data profile"
            ]
        ];
        break;

    case 'status':
        $response['data'] = [
            "uptime" => "99.99%",
            "database" => "connected",
            "environment" => "production"
        ];
        break;

    case 'user':
        $response['data'] = [
            "uuid" => "8f3e9c1a-5b2d-4e6f-8a1c-7d9b5e3f2a1b",
            "username" => "michaelninder",
            "role" => "developer",
            "mtex_tier" => "early_adopter"
        ];
        break;

    default:
        http_response_code(404);
        $response['status'] = "error";
        $response['data'] = ["message" => "Endpoint not found"];
        break;
}

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);