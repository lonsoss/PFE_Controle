<?php
ob_start();
session_start(); 

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB", "pfedb");

$con = new mysqli(HOST, USER, PASSWORD, DB);


