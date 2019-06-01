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
 * 1. Список всех клиентов
 */
$stmt = $pdo->query('SELECT first_name FROM clients');
while ($row = $stmt->fetch()) {
	echo $row['first_name'] . "\n"; //Список всех клиентов, вывел в данном случае имена
}
echo "<br>";
/**
 * 2. Список клиентов который активны (поле is_active)
 */
$stmt = $pdo->prepare("SELECT * FROM clients WHERE is_active=1");
$stmt->bindValue(1, $is_active, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет array(8), как и в таблице список
echo "<br>";
/**
 * 3. Список клиентов возраст которых больше или равно 30
 */
$stmt = $pdo->prepare("SELECT * FROM clients WHERE age>=30");
$stmt->bindValue(1, $age, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет array(9), как и в таблице список
echo "<br>";
/**
 * 4. Список клиентов имя которых начинается на В (Вася, Владимир)
 */
$stmt = $pdo->prepare("SELECT * FROM clients WHERE first_name LIKE 'V%'");
$stmt->bindValue(1, $first_name, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет array(3), а так же их список
echo "<br>";
/**
 * 5. Сколько клиентов у вас в базе всего
 */
$stmt = $pdo->prepare("SELECT COUNT(id) as c_clients FROM clients");
$stmt->bindValue(1, $id, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет ["c_clients"]=> int(13) 
echo "<br>";
/**
 * 6. Самого старого (по возрасту клиента)
 */
$stmt = $pdo->prepare("SELECT MAX(age) as c_clients FROM clients");
$stmt->bindValue(1, $age, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет ["c_clients"]=> int(65) 
echo "<br>";
/**
 * 7. Сколько у вас активных клиентов
 */
$stmt = $pdo->prepare("SELECT COUNT(id) as c_clients FROM clients WHERE is_active=1");
$stmt->bindValue(1, $is_active, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет ["c_clients"]=> int(8)
echo "<br>";
/**
 * 8. Получить и отсортировать всех клиентов по возрасту
 */
$stmt = $pdo->prepare("SELECT * FROM clients ORDER BY age ASC");
$stmt->bindValue(1, $age, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет список клиентов, сортировка возраста по увелечению
echo "<br>";
/**
 * 9. Получить и отсортировать всех клиентов по имени
 */
$stmt = $pdo->prepare("SELECT * FROM clients ORDER BY first_name DESC");
$stmt->bindValue(1, $first_name, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); //Вернет список клиентов, сортировка по имени, по алфавиту с конца
echo "<br>";
/**
 * 10. Посчтить сколько у вас активных клиентов старше 25
 */
$stmt = $pdo->prepare("SELECT COUNT(id) as c_clients FROM clients WHERE is_active=1 AND age>25");
$stmt->bindValue(1, $is_active, PDO::PARAM_INT);
$stmt->bindValue(2, $age, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows); // Вернет ["c_clients"]=> int(6)

 ?>