<?php
$servername = "localhost";
$username = "ProgramAccess";
$password = "lH6M2oi5FvsW9Euu";
$dbName = "cis355";


try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo "<br><br>";
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM Persons";
$q = $pdo->prepare($sql);
$q -> execute(array());
$data = $q -> fetch(PDO::FETCH_ASSOC);
print_r($data)
?>