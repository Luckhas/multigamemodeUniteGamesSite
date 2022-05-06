<?php
	/*******************************************************/
	/* UnitGAMES 5.0 - www.unit-games.com                  */
	/* Desenvolvido por: #RuuN                             */
	/* UnitAPI                                             */
	/* class/accounts.php                                  */
	/* 11/03/2014                                          */
	/*******************************************************/
	$accountInstance = nil;

	class Accounts
	{
		private $sqlConn = nil;
		public function __construct()
		{
			// mySQL Connection
			$this->sqlConn = Mysql::getInstance()->createSQLConnection("unitdb");
		}

		public function getAccountInfo($aid, $resname, $key)
		{
			$sql = sprintf("SELECT * FROM `accounts_data` WHERE `aid`='%s' AND `resname`='%s' AND `key`='%s'",
				    mysql_real_escape_string($aid),
				    mysql_real_escape_string($resname),
				    mysql_real_escape_string($key));

			$query = mysql_query($sql, $this->sqlConn);
			$result = mysql_fetch_assoc($query);
			return $result['value'];
		}

		public function getUserInfo($aid, $column)
		{
			$sql = sprintf("SELECT * FROM `accounts` WHERE `aid`='%s'",
				    mysql_real_escape_string($aid));
			$query = mysql_query($sql, $this->sqlConn);
			$result = mysql_fetch_assoc($query);
			return $result[$column];
		}

		public function setUserInfo($aid, $column, $value)
		{
			$result = $this->getUserInfo($aid, $column);
			// check if exists
			if (!is_null($result))
			{
				$sql = sprintf("UPDATE `accounts` SET `%s`='%s' WHERE `aid`='%s'",
					    mysql_real_escape_string($column),
					    mysql_real_escape_string($value),
					    mysql_real_escape_string($aid));

				mysql_query($sql, $this->sqlConn);
				echo "a";
			}	
		}

		public function getInstance()
		{
			if ($accountInstance)
			{
				return $accountInstance;
			}
			else
			{
				$accountInstance = new Accounts();
				return $accountInstance;
			}
		}

	}

	// test
	/*$account = new Account();
	$name = $account->getAccountInfo("usuarios", "playerName", 101);
	echo $name*/;
?>