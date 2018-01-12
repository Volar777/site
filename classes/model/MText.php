<?php
namespace model;

/**
 * Class Text
 * для работы с текстовым файлом
 */

class MText {

	/**
	 * @var - путь к текстовому файлу
	 */
	protected $path;

	/**
	 * @var - содержимое файла
	 */
	protected $data;

	public function __construct($path) {
		$this->path = $path;
	}

	/**
	 * перезапись файла
	 */
	public function overwrit(){
		if (!empty($_POST['message'])) {
			// перезапись данных
			$data = "\n" . $_POST['message'];
			file_put_contents($this->path, $data);
		}
	}

	/**
	 * @return array|bool
	 * чтение файла в массив с разбиением по строкам
	 */
	public function read()
	{
		$this->data = file($this->path);
		return $this->data;
	}

}
