<?php 

$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "DB";

try {
	$db = new PDO("mysql:host=$servername;dbname = DB", $username, $password);
	echo "Connection succesfully";
}
catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

/**
 * Добавляем клиента в базу данных:
 */
try {
  $conn = new PDO("mysql:host=$servername;dbname=DB", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    var_dump($conn);
  echo "Connection succesfully";
    $conn->query('SELECT * FROM clients');
    var_dump($conn);
  $sql = "INSERT INTO clients (first_name, last_name, email, company_name, is_active, age)
      VALUES('Pedro', 'Pedrovich', 'pedro@gmail.com', 'Umbrella_Corporation', 1, 65 )";
  $conn->exec($sql);
  echo "Record created";
}
catch(PDOException $e) {
  echo $sql . $e->getMessage();
}

 ?>