<?php
/* Database connection settings */
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
