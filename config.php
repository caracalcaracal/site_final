<?php
$config = array();
$config["db"] = [
"host" => "localhost",
"name" => "resimdb",
"user" => "root",
"pass" => "20132015.Bc",
"sub" => "/Fotograf"
];
$config["default_language"] = "tr";
define("dir", realpath("."));
define("controller", dir . "/app/controller");
define("view" , dir . "/app/view");
define("url", "http://localhost" . $_SERVER["SERVER_NAME"].$config["resimdb"]["sub"]);