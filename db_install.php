<meta charset="utf-8">
<?php
require_once 'db_connection.php';
try{
	$sql = 'CREATE TABLE tasks(
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		user_name VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
        task_text TEXT NOT NULL,
        image VARCHAR(255),
        status VARCHAR(255)
	)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
	$pdo->exec($sql);

}catch(Exception $e){
	echo "Не удалось создать таблицу" . $e->getMessage();
}