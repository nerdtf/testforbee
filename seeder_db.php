<?php
require_once 'db_connection.php';

$tasks = [
    [
      'user_name' => 'John',
      'email' => 'dlghlgdhld@mail.com',
      'task_text' => '12345',
      'image' => '1.jpg',
      'status' => ''
    ],

    [
        'user_name' => 'Alex',
        'email' => 'ghdhdjh@gmail.com',
        'task_text' => 'Do it!',
        'image' => '',
        'status' => ''
    ],

    [
        'user_name' => 'Rendy',
        'email' => 'fklfhkhjf@mail.ru',
        'task_text' => 'Some text Some text',
        'image' => '2.jpg',
        'status' => ''
    ],

    [
        'user_name' => 'Jack',
        'email' => 'gdhjdgh@gmail.com',
        'task_text' => 'Another text Another text',
        'image' => '',
        'status' => ''

    ],

    [
        'user_name' => 'Emily',
        'email' => 'hlkjkg@gmail.com',
        'task_text' => 'qwerty',
        'image' => '3.png',
        'status' => ''
    ],

    [
        'user_name' => 'Olivia',
        'email' => 'kljuhh@mail.ru',
        'task_text' => '0000000000000000',
        'image' => '',
        'status' => ''
    ],

    [
        'user_name' => 'Eva',
        'email' => 'eva@hmail.com',
        'task_text' => 'Nothing',
        'image' => '4.png',
        'status' => ''
    ],



];
try{
	$sql = 'INSERT INTO tasks SET 
		user_name = :user_name,
		email = :email,
		task_text = :task_text,
		image = :image,
		status = :status
	';
$pdoStatement = $pdo->prepare($sql);
foreach ($tasks as $task) {
	$pdoStatement->bindValue(':user_name' , $task['user_name']);
	$pdoStatement->bindValue(':email' , $task['email']);
	$pdoStatement->bindValue(':task_text' , $task['task_text']);
	$pdoStatement->bindValue(':image' , $task['image']);
	$pdoStatement->bindValue(':status' , $task['status']);
	$pdoStatement->execute();
}
echo 'Test data added';
die();

}catch(Exception $e){
	echo 'Error adding test data' . $e->getMessage();
}