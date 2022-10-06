<?php

$dsn = 'mysql:host=localhost;dbname=assignment_tracker';
$username = 'root';

try {
  $db = new PDO($dsn, $username);
} catch (PDOException $e) {
  $error = "데이터베이스 에러: " . $e->getMessage();
  require_once('view/error.php');
  exit();
}
