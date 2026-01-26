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
        "github" => "https://github.com/MTEX-dev/nx.mtex.dev",
        "service" => "nx.mtex.dev",
        "version" => "1.2.0",
        "timestamp" => date('c'),
    ],
    "data" => null
];

if ($method === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$lorem_data = include __DIR__ . '/lorem_data.php';

switch ($uriSegments[0] ?? '') {
    case '':
        $response['data'] = [
            "description" => "A lightweight JSON API gateway for seamless data exchange and rapid prototyping.",
            "endpoints" => [
                "GET /status" => "System status & metrics",
                "GET /user" => "User test stuff",
                "GET /mock" => "Developer test data",
                "GET /lorem[/<id>]" => "Lorem test posts",
                "GET /utility/uuid" => "Generate a UUID"
            ]
        ];
        break;

    case 'status':
        $response['data'] = [
            "status" => "operational",
            "uptime" => "99.98%",
            "php_version" => PHP_VERSION,
            "memory_usage" => round(memory_get_usage() / 1024 / 1024, 2) . ' MB'
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
    case 'lorem':
        $index = $uriSegments[1];

        if (!$index) {
            $response['data'] = $lorem_data;
            break;
        }

        if (array_key_exists($index, $lorem_data)) {
            $data = $lorem_data[$index];
            $response['data'] = [
                "id" => $index,
                "title" => $data['title'],
                "content" => $data["content"],
            ];
        } else {
            http_response_code(404);
            $response['status'] = "error";
            $response['data'] = ["message" => "Lorem not found"];
        };
        break;

    case 'utility': // AI-generated ...
        if (($uriSegments[1] ?? '') === 'uuid') {
            $data = random_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
            $response['data'] = [
                "uuid" => vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4))
            ];
        } else {
            http_response_code(400);
            $response['status'] = "error";
            $response['data'] = ["message" => "Unknown utility"];
        }
        break;

    default:
        http_response_code(404);
        $response['status'] = "error";
        $response['data'] = ["message" => "Endpoint not found"];
        break;
}

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);