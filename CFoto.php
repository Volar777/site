<?php
/**
 * контроллер страници с фото
 */
require  __DIR__ . '/autoload.php'; // автозагрузка
use \model\MFiles;

// экземпляр класса для работы с файлами
$FilesLoud = new MFiles();
// $fotos используется в шаблоне - возвращается список файлов
$fotos = $FilesLoud->show();

require __DIR__ . '/templates/THeder.php';
require __DIR__ . '/templates/TFoto.php';
require __DIR__ . '/templates/TFooter.php';
