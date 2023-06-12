<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gcs";

// Connection  <= to MYSQL
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();