<?php

/**
 * Created by PhpStorm.
 * User: maveriks
 * Date: 15/5/17
 * Time: 11:57
 */
class MySqlRepository {

	private $conection;

	public function conectToDatabase () {
		try {
			$this->conection = new PDO("mysql:host=localhost;dbname=shopcart", "root", "123456");
		} catch (PDOException $exception) {
			echo "No se pudo conectar: $exception->getMessage()";
		}

	}


	public function getConection() {
		if ($this->conection instanceof PDO) {
			return $this->conection;
		}
	}
}