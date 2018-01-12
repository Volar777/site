<?php
/**
 * контроллер главной страницы
 */
require  __DIR__ . '/autoload.php'; // автозагрузка классов
require  __DIR__ . '/config/config.php'; // конфиг для работы с описанием страницы обо мне

use \model\MText;

$acss = access::access(); // проверка возможности редактирования

$text = new MText(PATH); // создаем экземпляр класа для работы с *.txt

$text->overwrit(); // получаем данные из формы и перезаписываем файл

$aboutMe = $text->read(); // чтение данных из файла

// подключение шаблонов страници

require __DIR__ . '/templates/THeder.php';
require __DIR__ . '/templates/TAboutMe.php';
// если разрешено редактирование, показываем форму для перезаписи файла
if($acss === TRUE)
{
	require __DIR__ . '/templates/TForm.php';
}
require __DIR__ . '/templates/TFooter.php';

