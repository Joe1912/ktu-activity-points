<?php

class HomeModel extends Model {

	public function Index(){
		$this->query('SELECT * FROM PointsTable WHERE User = :username');
		$this->bind(':username', $_SESSION['user']);
		$rows = $this->resultSet();
		return $rows;
	}

}