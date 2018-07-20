<?php

try{
	$pdo = new PDO('mysql:host=localhost;dbname=task',
		'task_user' , '123456789');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}catch(Exception $e){
	echo 'Не удалось подключиться к бд';
	die();
}
