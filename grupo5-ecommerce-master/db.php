<?php
$dsn = 'mysql:host=localhost;dbname=freelance;port=8889';
$user = 'root';
$pass = 'root';
try {
    $db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
