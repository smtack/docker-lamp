<?php
$host = 'db';
$db = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p style='color:green'>✅ Successfully connected to MySQL using PDO!</p>";
} catch (PDOException $e) {
    die("<p style='color:red'>❌ Connection failed: " . htmlspecialchars($e->getMessage()) . "</p>");
}

$message = "🐳 Hello Docker!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $message ?></title>
</head>
<body>
    <h1><?= $message ?></h1>
</body>
</html>