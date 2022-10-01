<?php 

define("SITE", [
	"name" => "Sistema de Login",
	"desc" => "Projeto de desenvolvimento de um sistema de login para estudar os componentes do php que envolvem tal sistema.",
	"root" => "http://localhost/sistema_login"
]);

if ($_SERVER["SERVER_NAME"] == "localhost")
	require __DIR__."/Minify.php";

const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "sistema_login",
    "username" => "king",
    "passwd" => "pass123",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

define("MAIL", []);

define("FACEBOOK_LOGIN", []);

define("GOOGLE_LOGIN", []);