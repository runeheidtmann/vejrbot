<?php

class db{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	public function connect(){
		$this->servername = "mysql42.unoeuro.com";
		$this->username = "wemakebots_dk";
		$this->password = "colafrik1";
        $this->dbname = "wemakebots_dk_db";
        // $this->servername = "localhost";
		// $this->username = "root";
		// $this->password = "";
		// $this->dbname = "test";

		$conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
		return $conn;
	}
}
?>