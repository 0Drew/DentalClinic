<?php
class Database {
	public $conn;
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db = 'db_dentalclinic';

	public function connection() {
		try {
		    $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn;
		} catch (PDOException $e) {
            return 'Connection failed: ' . $e->getMessage();
		    die();
		}
    }
}
?>