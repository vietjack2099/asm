<?php 
class DBConnector{
	public $host = 'localhost';
	public $dbname = 'asmver1';
	public $un = 'root';
	public $pw = '';
	
	public function runQuery($sql)
	{
		$conn = new mysqli($this->host, $this->un, $this->pw, $this->dbname);
		mysqli_set_charset($conn, 'UTF8');
		$result = $conn->query($sql);
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$conn->close();
		return $rows;
	}
	public function execStatement($sql)
	{
		$conn = new mysqli($this->host, $this->un, $this->pw, $this->dbname);
		$result = $conn->query($sql);
		$conn->close();
		return $result;
	}
	public function execQuery($sql, $numparam, $param)
	{
		$conn = new mysqli($this->host, $this->un, $this->pw, $this->dbname);
		$stm = $conn->prepare($sql);
		$stm->bind_param($numparam, $param);
		$stm->execute();
		$stm->close();
		$conn->close();
	}
}

?>