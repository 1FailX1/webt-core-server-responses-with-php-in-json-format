<?php

declare(strict_types=1);
require "../src/OSTSeeder.php";

header('Content-Type: application/json');
if (isset($_GET["ostID"])) {
    $id = $_GET["ostID"];
    switch ($id) {
        case 'all':
            echo json_encode(OSTSeeder::getOSTs());
            return;
        default:
            echo json_encode(OSTSeeder::getOSTs()[$id]);
            return;
    }
}


if (isset($_GET["ostData"])) {
    foreach (OSTSeeder::getOSTs() as $value) {
        if ($value->name == $_GET["ostData"]) {
            echo json_encode($value);
            return;
        }
    }
    echo json_encode(["data" => "no value"]);
}
