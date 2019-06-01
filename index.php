<?php 

$servername = "localhost";
//$db = 'DB';
$username = "root";
$password = "";
//$charset = "utf8";

/**
 * соединение с базой данных, созданной ранее:
 */

try {
	$conn = new PDO("mysql:host=$servername;dbname = DB", $username, $password);
	echo "Connection succesfully";
}
catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

/**
 * еще один вариант соединения с базой данных:
 */
/**

$dsn = "mysql:host=$servername;dbname=$db;charset=$charset";
$opt = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn, $username, $password, $opt);

*/

 ?>