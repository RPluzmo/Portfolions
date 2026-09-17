<?php

$pageTitle = "Raivo Plužmo | Portfolio";
$projects = [
	[
		"number" => "01",
		"name" => "Mysterymeal",
		"technologies" => "Laravel / MySQL",
		"image" => "mysterymeal/mysterymealcover.png",
		"description" => "Ēdienu ideju un recepšu projekts ar datu bāzi.",
		"url" => "/projekts1",
		"color" => "project-sunset",
	],
	[
		"number" => "02",
		"name" => "EmEks",
		"technologies" => "Laravel / MySQL",
		"image" => "emeks/emekscover.png",
		"description" => "Praktisks tīmekļa projekts ar pārskatāmu lietotāja pieredzi.",
		"url" => "/projekts2",
		"color" => "project-sea",
	],
	[
		"number" => "03",
		"name" => "Web Muita",
		"technologies" => "Laravel / MySQL / API",
		"image" => "web-muita/webmuitacover.png",
		"description" => "Iekšēja muitas darba vide datu un uzdevumu pārvaldībai.",
		"url" => "/projekts3",
		"color" => "project-lavender",
	],
	[
		"number" => "04",
		"name" => "Classroom",
		"technologies" => "Laravel / MySQL",
		"image" => "classroom/classroomcover.png",
		"description" => "Mācību vide uzdevumiem, materiāliem un saziņai.",
		"url" => "/projekts4",
		"color" => "project-mint",
	],
	[
		"number" => "05",
		"name" => "Eklas(e)",
		"technologies" => "PHP / MySQL",
		"image" => "eklase/eklasecover.png",
		"description" => "Eklases attēlojums",
		"url" => "/projekts5",
		"color" => "project-gold",
	],
];
require __DIR__ . "/../views/index.view.php";
?>