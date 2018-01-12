<?php
require  __DIR__ . '/autoload.php'; // автозагрузка


use \model\MDb; // неймспейс для класса MDb

$acss = access::access(); // проверка возможности удаления записи

$db = new MDb(); // создание подключения к БД

//удаление записи
if (!empty($_GET['del'])){
	$addData = $_GET['del']; // получение значения из формы
	$db->delete($addData); // удалить запись по id из базы
}

// добавленеи записи
if (!empty($_POST['message'])){
	$addData = $_POST['message']; // получение значения из формы
	$db->add($addData); // добавить сообщение в базу
	}

// чтение всех записей
$data = $db->query();

require __DIR__ . '/templates/Theder.php';
require __DIR__ . '/templates/TGuestBook.php';
require __DIR__ . '/templates/TFooter.php';
