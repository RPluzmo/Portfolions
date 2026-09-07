<?php

$projects = [
    "/projekts1" => [
        "number" => "01",
        "type" => "Mysterymeal",
        "title" => "Projekts Nr. 01",
        "description" => "q",
        "technologies" => "q",
        "learning" => "q",
    ],
    "/projekts2" => [
        "number" => "02",
        "type" => "Emeks",
        "title" => "Projekts Nr. 02",
        "description" => "q",
        "technologies" => "q",
        "learning" => "q",
    ]
];

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$project = $projects[$path] ?? null;


$pageTitle = $project["title"] . " | Portfolio";
require "views/project.view.php";
