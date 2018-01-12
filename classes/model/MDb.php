<?php

namespace model;

/**
 * класс для работы с базой данных
 */
class MDb {

	/**
	 * @var \PDO
	 * свойство для хронения экземпляра класса DBO
	 */
	protected $dbh;

	/**
	 * MDb constructor.
	 * $this->dbh записываем экземпляр класса PDO
	 */
	public function __construct() { // подключение к БД
		$config = include __DIR__ . '/../../config/configDb.php';
		$dsn = 'mysql:host' . $config['host'] .';dbname=' . $config['dbname'];
			$this->dbh = new \PDO(
			$dsn,
			$config['user'],
			$config['password']
		);
	}

	/**
	 * @param $sql
	 * выполнение запроса
	 * @return \PDOStatement
	 */
	protected function prepare($sql)
	{
		$sth =  $this->dbh->prepare($sql); // подготовка запроса (метод у PDO)
		$sth->execute(); // выполнение запроса

		return $sth;
	}

	/**
	 * @param $delId
	 * метод для удаления записи
	 */
	public function delete($delId)
	{
		$sql = 'DELETE FROM guestB WHERE id =' . $delId;
		$this->prepare($sql);
	}

	/**
	 * @param $addData
	 * метрод для добавления записи
	 */
	public function add($addData)
	{
		$sql = 'INSERT INTO guestB(text) VALUE(\'' . $addData .'\')';
		$this->prepare($sql);
	}

	/**
	 * @param $sql
	 * Метод для выборки всех записей
	 * @return array
	 */
	public function query()
	{
		$sql = 'SELECT * FROM guestB';
		$sth = $this->prepare($sql);

		return $sth->fetchAll(); // возвращение всех результатов запроса
	}

}
