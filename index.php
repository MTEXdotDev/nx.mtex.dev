<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

date_default_timezone_set('Europe/Berlin');

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uriSegments = explode('/', trim($requestUri, '/'));
$method = $_SERVER['REQUEST_METHOD'];

$response = [
    "status" => "success",
    "meta" => [
        "project" => "MTEX Nexus",
        "service" => "nx.mtex.dev",
        "version" => "1.0.1",
        "timestamp" => date('c'),
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
            "description" => "A lightweight JSON API gateway for seamless data exchange and rapid prototyping.",
            "endpoints" => [
                "GET /status" => "System status",
                "GET /user" => "User test stuff",
                "GET /mock" => "Developer test data",
            ]
        ];
        break;

    case 'status':
        $response['data'] = [
            "status" => "operational",
            "uptime" => "99.98%"
        ];
        break;

    case 'user':
        $response['data'] = [
            "id" => "8f3e9c1a-5b2d-4e6f-8a1c-7d9b5e3f2a1b",
            "username" => "michaelninder",
            "role" => "developer",
            "mtex_tier" => "early_adopter"
        ];
        break;

    case 'mock':
        $response['data'] = [
            "id" => "073e52f1-90a6-4447-975b-04495535352c",
            "alias" => "michaelninder",
            "permissions" => ["read", "write", "deploy"],
            "registered" => "2026-01-26"
        ];
        break;

    default:
        http_response_code(404);
        $response['status'] = "error";
        $response['data'] = ["message" => "Endpoint not found"];
        break;
}

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);