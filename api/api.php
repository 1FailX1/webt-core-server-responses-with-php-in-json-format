<?php
declare(strict_types=1);
require "../src/OSTSeeder.php";


$id = $_GET["ostID"];

header('Content-Type: application/json');
echo json_encode(OSTSeeder::getOSTs()[$id]);