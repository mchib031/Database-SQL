<?php


$all = getallheaders();
header("Content-Type: application/json");

$xmen = $all["X-Men"] ?? null;
if (!$xmen) {
    http_response_code(400);
    exit;
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

$reply = ["mutant" => $xmen, "name" => $name];
echo json_encode($reply);
echo "\n";

?>
