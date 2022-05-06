<?php
	include ("includes/config.php");
	include ("includes/utils.php"); 
	include ("includes/mysql.php");
	include ("includes/account.php");
	$apiInstance = nil;

	class UnitAPI
	{
		// private vars
		private $sqlConn = nil;
		private $db = "";

		// construct function
		public function __construct()
		{
			$this->db = Config::getInstance()->getConfig("db"); // get db name
			$this->sqlConn = Mysql::getInstance()->createSQLConnection($this->db); // create mysql connection
		}

		public function getSQL()
		{
			return $this->sqlConn;
		}

		public function getInstance()
		{
			if ($apiInstance)
			{
				return $apiInstance;
			}
			else
			{
				$apiInstance = new UnitAPI();
				return $apiInstance;
			}
		}

		function showPollResult() {
					//Realizar as consultas
					$votar1 = mysql_query("SELECT * FROM `enquete` WHERE voto = 1", $this->getSQL());
					$votar2 = mysql_query("SELECT * FROM `enquete` WHERE voto = 2", $this->getSQL());
					$votar3 = mysql_query("SELECT * FROM `enquete` WHERE voto = 3", $this->getSQL());
					$votar4 = mysql_query("SELECT * FROM `enquete` WHERE voto = 4", $this->getSQL());

					//Exibir resultado após o registro
					echo "<h3>" . "Partial result" . "</h3>";
					echo "<table style='padding: 10px; font-size: 14px; width: 290px; border-bottom: 1px solid #CCC; font-style: italic;'>";

						echo "<tr>";
							echo "<td width='170px'>";
								echo "Race DM";
							echo "</td>";

							echo "<td align='right'>";
								echo mysql_num_rows($votar1) . " Votos";
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td width='170px'>";
								echo "Play/Freeroam";
							echo "</td>";

							echo "<td align='right'>";
								echo mysql_num_rows($votar2) . " Votos";
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td width='170px'>";
								echo "Hunter";
							echo "</td>";

							echo "<td align='right'>";
								echo mysql_num_rows($votar3) . " Votos";
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td width='170px'>";
								echo "Shooter";
							echo "</td>";

							echo "<td align='right'>";
								echo mysql_num_rows($votar4) . " Votos";
							echo "</td>";
						echo "</tr>";

					echo "</table>";
		}

		public function registrarEnquete() {
			if (isset($_COOKIE['enquete_ung'])) {
					
					$this->showPollResult();

					if ($_POST['options'] <> "") {
						echo "<script> alert('You already voted in this poll!!!');</script>";
					} else {

					}


			} else {

				$voto = $_POST['options'];
				if (empty($voto)) {
					$this->showPollResult();
				} else {
					$this->showPollResult();
					setcookie('enquete_ung',$_SERVER['REMOTE_ADDR'],time()+604800);
					$inserir = mysql_query("INSERT INTO `enquete` (voto) VALUES ('$voto')", $this->getSQL());
						if (empty($voto)) {
							
						} else {
							echo '<script>alert("Thank you for vote in our poll!");</script>';
						}
				}
			}
		}


		public function lerRank() {
		    $sql = "SELECT * FROM `accounts_data` WHERE `resname`='racedm' AND `key`='exp' ORDER BY `value` DESC";
		    $lerRank = mysql_query($sql, $this->getSQL());
		    $pos = 1;
		    $maxPerPage = Config::getInstance()->getConfig("rank_perpage");

		    $ranks = array();

		    // build rank array
		    while ($key = mysql_fetch_array($lerRank)) {
		    	$ranks[] = array('aid' => $key['aid'], 'value' => $key['value']);
		    }

		    // sort rank array
		    $ranks = array_sort($ranks, 'value', SORT_DESC);

		    // draw
		    foreach ($ranks as $key) {
		        echo "<table width='585px' height='28px'>";
		            echo "<tr>";
		                echo "<td width='60px' align='center' style='text-shadow: 2px 2px #000;'>";
		                	echo $pos++;
		                echo "</td>";

		                echo "<td width='325px'>";
	                    	$playerName = Accounts::getInstance()->getUserInfo($key['aid'], "playerName");
	                    	if ($playerName == "" or is_null($playerName))
	                    	{
	                    		$playerName = "Desconhecido.";
	                    	}

	                    	$playerName = preg_replace("/#[a-f0-9]{6}/i", "", $playerName);
	                    	echo $playerName;
		                echo "</td>";

		                echo "<td width='200px' align='right'>";
		                    echo $key['value'];
		                echo "</td>";
		            echo "</tr>";
		        echo "</table>";

		        if ($pos > $maxPerPage)
		    	{
		    		break;
		    	}
		    }
		    
		}


		public function lerDonations()
		{
			$sql = "SELECT * FROM `donations` ORDER BY id DESC LIMIT 12";
			$donation = mysql_query($sql, $this->getSQL());
			
			while ($showDonations = mysql_fetch_array($donation)){
				echo "<table id='donations' width='90%' style='background: rgba(0, 0, 0, 0.8); color:#E8E8E8;'>";
					echo "<tr>";
						echo "<td bgcolor='#FFFFFF' width='20px' align='center'>";
							echo "<img src='img/v.png'/>";
						echo "</td>";
						
						echo "<td width='161px' style='padding-left:5px;'>";
							echo $showDonations['nick'];
						echo "</td>";
						
						echo "<td width='80px'>";
							echo $showDonations['valor'];
						echo "</td>";
					echo "</tr>";
				echo "</table>";
				}
		}

		public function lerCWs()
		{
			$sql = "SELECT * FROM `cw_results` ORDER BY id DESC LIMIT 7";
            $cw_results = mysql_query($sql, $this->getSQL());

            while ($showResults = mysql_fetch_array($cw_results)) {
                echo "<table id='showResults' border='0px;'>";
                    echo "<tr>";
                        echo "<td align='left' width='130px'>" . $showResults['clan_tags'] . "</td>";
                        echo "<td align='left' width='70px'>" . $showResults['results'] . "</td>";
                        echo "<td align='right' width='70px'>" . $showResults['valor'] . "</td>";
                    echo "</tr>";
                echo "</table>";
            }
		}

		public function doUp()
		{
			if($_GET['up'] == 'enviar') {
				$file = $_FILES['map']['name'];
				$tipo = $_FILES['map']['type'];
				$size = $_FILES['map']['size'];
				$temp = $_FILES['map']['tmp_name'];
				$erro = $_FILES['map']['error'];
				$extension = end (explode(".", $file));
				
				if($erro > 0) {
					die ('Error to send map:' . $erro);
				} else {				
					if($size > 20971520) {
						die ("The file size exceeded the limit of 20MB.");
					} elseif ($extension != "zip") {
						die ("Invalid extension.");
					} else {
					move_uploaded_file($temp, "uploads/" . $file);
					echo "Uploaded successfully!";
					}
				}
			}
		}

		public function sendMail()
		{
			$to = "ldcf_lucas@hotmail.com";
			$subject = 'Contact from: ' . $_POST['name'];
			$message = $_POST['name'] . "<br>" . $_POST['email'] . "<br>" . $_POST['message'];

			if (empty($to) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
			{
				
			} else {
				if ($_GET['mail'] == 'sending_message') {
					//echo $to, $subject, $message;
					mail($to, $subject, $message);

				} else {
					die('Error');
				}
			}
		}

		public function register()
		{
			if ($_GET['reg'] == 'recording')
			{
				$login = $_POST['login'];
				$email = $_POST['email'];
				$skype = $_POST['skype'];
				$passA = $_POST['passA'];
				$passB = $_POST['passB'];

				if (empty($login) || empty($email) || empty($passA) || empty($passB))
				{
					echo "<script> history.go(-1); alert('The fields login, e-mail and password are obligatory.'); </script>";
				} else {
					if ($passA != $passB)
					{
						echo "<script> history.go(-1); alert('Passwords are not equal'); </script>";
						die();
					} else {
						$sqlC = mysql_query("SELECT * FROM accounts WHERE user = '$login' OR email = '$email'");
						$count = mysql_num_rows($sqlC);

						if ($count > 0) {
							echo "<p id='alreadyRegistered'>User or email is already signed up.</p>";
						} else {
							$passF = md5($passA);
							$registerInDB = mysql_query("INSERT INTO accounts (user, password, email, skype) VALUES ('$login', '$passF', '$email', '$skype')");

							if (!$registerInDB) {
								die("Error to try insert on MySql: " . mysql_error());
							}

							if ($registerInDB) {
								echo "<p id='alreadyRegistered'>Account signed successfully</p>";
							} else {
								echo "<p id='alreadyRegistered'>Wasn't possible signed up.</p>";
							}
						}
					}
					
				}
			} else {

			}
		}

	}
?>