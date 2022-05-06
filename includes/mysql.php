<?php
	/*******************************************************/
	/* UnitGAMES 5.0 - www.unit-games.com                  */
	/* Desenvolvido por: #RuuN                             */
	/* UnitAPI                                             */
	/* class/mysql.php                                     */
	/* 12/03/2014                                          */
	/*******************************************************/
	$mysqlInstance = nil;

	class Mysql
	{
		// MYSQL FUNCTIONS //
		function createSQLConnection($dbname)
		{
			if (empty($dbname)) 
			{ 
				die('Nome da database invalida.'); 
			}

			$connection = mysql_connect(Config::getInstance()->getConfig('host'), 
				Config::getInstance()->getConfig('user'), 
				Config::getInstance()->getConfig('senha'));
			
			if (!$connection) 
			{
				die ("Não foi possivel se conectar no servidor mySQL: " . mysql_error());
			}

			$selectDB = mysql_select_db($dbname, $connection);
			if (!$connection) 
			{
				die ("Não foi possivel selecionar a database: " . mysql_error());
			}
			return $connection;
		}

		public function getInstance()
		{
			if ($mysqlInstance)
			{
				return $mysqlInstance;
			}
			else
			{
				$mysqlInstance = new Mysql();
				return $mysqlInstance;
			}
		}
	}

?>