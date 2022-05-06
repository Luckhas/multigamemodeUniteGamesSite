<?php
	/*******************************************************/
	/* UnitGAMES 5.0 - www.unit-games.com                  */
	/* Desenvolvido por: #RuuN                             */
	/* UnitAPI                                             */
	/* class/config.php                                    */
	/* 12/03/2014                                          */
	/*******************************************************/
	$configInstance = nil;

	class Config
	{
		private $_configs = array();

		public function __construct()
		{
			// datebase configs
			$this->_configs['host'] = "localhost";
			$this->_configs['user'] = "root";
			$this->_configs['senha'] = "1231";
			$this->_configs['db'] = "unitdb";


			// rank's config
			$this->_configs['rank_perpage'] = 8;
		}

		public function getInstance()
		{
			if ($configInstance)
			{
				return $configInstance;
			}
			else
			{
				$configInstance = new Config();
				return $configInstance;
			}
		}

		public function getConfig($col)	
		{
			return $this->_configs[$col];
		}

		public function setConfig($col, $val)
		{
			$this->_configs[$col] = $val;
		}
	}

?>