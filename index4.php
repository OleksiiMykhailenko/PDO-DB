<?php 

$servername = "localhost";
$db = 'DB';
$username = "root";
$password = "";
$charset = "utf8";

$dsn = "mysql:host=$servername;dbname=$db;charset=$charset";
$opt = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn, $username, $password, $opt);

/**
 * 1. Изменить возраст на 45 для клиента номер 2
 */
$stmt = $pdo->prepare("UPDATE clients SET age = :age WHERE id=:id");
$stmt->bindParam(':age', $age, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$age = 45;
$id = 2;
$stmt->execute();
/**
 * 2. Изменит имя клиенту с номером 1
 */
$stmt = $pdo->prepare("UPDATE clients SET first_name = :first_name WHERE id=:id");
$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$first_name = "Teodorius";
$id = 1;
$stmt->execute();
/**
 * 3. Деактивировать клиента номер 3 (подсказка - см. поле is_active)
 */
$stmt = $pdo->prepare("UPDATE clients SET is_active = :is_active WHERE id=:id");
$stmt->bindParam(':is_active', $is_active, PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$is_active = 0;
$id = 3;
$stmt->execute();
/**
 * 4. Удалить всех не активных клиентов
 */
$stmt = $pdo->prepare("DELETE FROM clients WHERE is_active=:is_active");
$stmt->bindValue(':is_active', $is_active, PDO::PARAM_INT);
$is_active = 0;
$stmt->execute();
$affected_rows = $stmt->rowCount();
/**
 * 5. Удалить всех созданных вами клиентов
 */
$pdo->exec("DELETE FROM clients");

 ?>