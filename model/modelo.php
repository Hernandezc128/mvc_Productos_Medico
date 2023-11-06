<?php
class Usuario
{
	private $usuario; 
	private $dbh;

	public function __construct()
	{
		$this->usuario = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bdproductosmedicos', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_platillos()
	{
		self::set_names();
		$sql="select * from usuarios ";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->usuario[]=$res;
		}
		return $this->usuario;
		$this->dbh=null;
	}
}
?>