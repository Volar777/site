<?php

namespace model;
/**
 * Class Files
 * класс для работы с файлами
 */

class MFiles {

	/**
	 * Files constructor.
	 * перемещает файл из временного хранилища в нужню директорию
	 */

	public function __construct()
	{
		if(!empty($_FILES)){ // пришол ли какой-либо файл
			$upload = $_FILES['mmm'];  // name="mmm" - из формы

			if($upload['type'] == "image/jpeg" or $upload['type'] == "image/png"){ // проверка на нужный тип файла
				if($upload['error'] == 0){ // проверка на наличие ошибок
					move_uploaded_file( // перемещаем
						$upload['tmp_name'], // из временног места храненеия
						__DIR__ . '/../../img/' . $upload['name'] // в постоянное
					);
				}
//				echo 'все ок))' . $upload['name'];
			} else {
//				echo 'не тот формат картинки((';
			}
		}
	}

	/**
	 * @return array
	 * возвращает списик файлов из папки с картинками (поддериктории не возвращает)
	 */

	public function show()
	{
		$res =  scandir(__DIR__ . '/../../img'); //список файлов в папке
		$a = [];
		foreach($res as $s){
			if (!is_dir($s)) { // если не директория, то добавить в массив
				array_push($a,$s);
			}
		}
		return $a;
	}

}
