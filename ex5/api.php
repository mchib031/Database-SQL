<?php

$all = getallheaders();

header("Content-Type: application/json");

$dbconn = pg_connect("host=localhost port=5432 dbname=phpapp user=phpapp password=password");
$data = pg_fetch_all(pg_query($dbconn, "SELECT token FROM client"));
$dbtokens = [];
foreach ($data as $token_obj) {
    $dbtokens[] = $token_obj["token"];
}



function error($error) {
    echo json_encode($error);
    echo "\n";
    exit;
}

$xmen = $all["X-Men"] ?? null;
if (!$xmen) {
    http_response_code(400);
    error(["error" => "Please provide an X-Men mutant and reveal their human name.", "headers" => $all]) ;
}

$auth = $all["Authentication"] ?? null;
if (!$auth) {
    http_response_code(400);
    error(["error" => "Please provide an authentication token.", "headers" => $all]);
}


switch ($xmen) {
    case "Wolverine":
        $name = "James \"Logan\" Howlett";
        break;
    case "Sway":
        $name = "Suzanne Chan";
        break;
    case "Darwin":
        $name = "Armando Muñoz";
        break;
    case "Vulcan":
        $name = "Gabriel Summers";
        break;
    case "Nightcrawler":
        $name = "Kurt Wagner";
        break;
    case "Banshee":
        $name = "Sean Cassidy";
        break;
    case "Storm":
        $name = "Ororo Munroe";
        break;
    case "Sunfire":
        $name = "Shiro Yoshida";
        break;
    case "Colossus":
        $name = "Piotr Nikolaievitch Rasputin";
        break;
    case "Thunderbird":
        $name = "John Proudstar";
        break;
    default:
        $name = "Unknown";
}

$auth_header = explode(" ", $auth);
$auth_info = [
    "token" => $auth_header[1],
    "type" => $auth_header[0]
];


if (!in_array($auth_info["token"], $dbtokens)) {
    http_response_code(401);
    $auth_info["error"] = "Invalid token.";
    error($auth_info);
}

$reply = ["mutant" => $xmen, "name" => $name];
echo json_encode($reply);
echo "\n";

?>
