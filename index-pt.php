<?php //error_reporting(0); ?>
<?php ob_start(); ?>
<?php 
    include ("includes/functions.php");
    $api = UnitAPI::getInstance();
    if (!$api)
    {
        echo "Error";
        die();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" />
<title>UnitGAMES</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/script2.js"></script>

</head>
<body>

<div id="top"></div>

<div class="box">
	<span class="paginacao"></span>

        <div class="banner">
        
            <div class="banner-item">
            
                <p>
                
                    Visite nossos servidores no Multi thef Auto (MTA)
                    <br />UnitGAMES - Multigamemode
                    <br />UnitGAMES - Gang war
                    <br /><br /><a href="">Ver mais ></a>
                
                </p>
                <img src="img/banner/banner_1.jpg" width="1093" height="249" />
            
            </div>
            
                <div class="banner-item">
            
                <p>
                
                    Visite nossos servidores no Counter Strike (1.6 )
                    <br />UnitGAMES - Vários server
                    <br />UnitGAMES - JailBreak
                    <br /><br /><a href="">Ver mais ></a>
                
                </p>
                <img src="img/banner/banner_2.jpg" width="1093" height="249" />
            
            </div>
            
                <div class="banner-item">
            
                <p>
                
                    Visite nossos servidores no Multi thef Auto (MTA)
                    <br />UnitGAMES - Multigamemode
                    <br />UnitGAMES - Gang war
                    <br /><br /><a href="">Ver mais ></a>
                
                </p>
                <img src="img/banner/banner_3.jpg" width="1093" height="249" />
            
            </div>
            
                <div class="banner-item">
            
                <p>
                
                    Visite nossos servidores no Counter Strike (1.6 )
                    <br />UnitGAMES - Vários server
                    <br />UnitGAMES - JailBreak
                    <br /><br /><a href="">Ver mais ></a>
                
                </p>
                <img src="img/banner/banner_4.jpg" width="1093" height="249" />
            
            </div>
        
        </div>
</div>
<div id="corpo_exterior">

	<div id="menu">
    
        <table width="100%" height="60px" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center"><a href="index.php?ung=home" class="menu_link">home</a></td>
            <td align="center"><a href="index.php?ung=members" class="menu_link">staff</a></td>
            <td align="center"><a href="index.php?ung=gallery" class="menu_link">gallery</a></td>
            <td align="center"><a href="index.php?ung=" class="menu_link">forum</a></td>
            <td align="center"><a href="index.php?ung=upload" class="menu_link">upload</a></td>
            <td align="center"><a href="index.php?ung=contact" class="menu_link">contact</a></td>
            <td valign="middle" align="center" width="325px">

                <form action="http://www.google.com/search" method="get" target="_blank">
                    <input name="q" value="" size="27" type="text" style="height: 27px; background-color: #dbe7f3; border: 1px solid #8badc9;">
                    <input name="domains" value="www.onlyinformatica.com/unitgames" type="hidden">
                    <input name="sitesearch" value="www.onlyinformatica.com/unitgames" type="hidden">
                    <input value="Search" type="submit" style="height: 28px; width: 70px; background-color: #0193c2; border:0; color: #FFF;">
                </form>

            </td>
          </tr>
        </table>

    </div>
    
    <div id="corpo">
    
		<?php
    
			 if (empty($_GET["ung"]))
			 {
			  include ("ung_home.php");
			 } else {
			  if (file_exists("ung_" . $_GET["ung"] . ".php"))
			  {
			   include ("ung_" . $_GET["ung"] . ".php");
			  } else {
			   echo "Pagina não encontrada.";
			  }
			 }
        ?>
    
    </div>

</div>

<div style="width:1073px; height:7px;"></div>

<div id="news" align="right">Últimas Notícias</div>
<div id="news_sub">

    <table cellpadding="0px" cellspacing="0px" width="1073px">
        <tr>
            <td width="290px" valign="top">

                <div id="title_dev">News Desenvolvimento</div>

                    <ul id="news_dev">
                        <li><a href="#">Liberação da sala Training</a></li>
                        <li><a href="#">Patch correção BUGs 1.0.1</a></li>
                        <li><a href="#">Patch correção BUGs 1.0</a></li>
                        <li><a href="#">UnitGAMES 5.0 Lançamento</a></li>                        
                    </ul>

            </td>
            <td width="493px" valign="top">

                <div id="title_anun">Anúncios</div>
                <div id="news_anun">

                    <h2>Lançamento da UnitGAMES 5.0</h2>
                    <p id="text_anun">

                        É com muito prazer que venho a vocês anunciar o lançamento da UnitGAMES 5.0.
                        A UnitGAMES 5.0 teve seu lançamento adiantado devido aos problemas de conexão 
                        que a versão 4.0 possuía, deste modo nós estávamos esperançosos que recuperaríamos 
                        os player que infelizmente haviam migrado a outros servidores.<br>
                        Essa nova versão ainda está em fase Alpha
                        por isso pedimos um pouco de paciência quanto a implementação de novos sistemas como o clássico painel F3
                        que está sendo desenvolvido com toda a dedicação para melhor deleite dos players.<br>
                        Esperamos sinceramente que apreciem a estadia e bom jogo...

                    </p>

                </div>

            </td>
            <td width="290px">

                <div id="title_cw_results">Resultado dos CWs</div>
                <div id="cw_results">
                    <div style="background-color: #006699; width: 100%;">
                        <table id="top_showResults">
                            <tr>
                                <td align="left" width="90px">Clãs</td>
                                <td align="center" width="90px">Resultado</td>
                                <td align="right" width="90px">Placar</td>
                            </tr>
                        </table>
                    </div>
                    <?php
                        /*
                        $cw_results = mysql_query("SELECT * FROM `cw_results` ORDER BY id DESC LIMIT 7") or die (mysql_error());

                        while ($showResults = mysql_fetch_array($cw_results)) {
                            echo "<table id='showResults' border='0px;'>";
                                echo "<tr>";
                                    echo "<td align='left' width='130px'>" . $showResults['clan_tags'] . "</td>";
                                    echo "<td align='left' width='70px'>" . $showResults['results'] . "</td>";
                                    echo "<td align='right' width='70px'>" . $showResults['valor'] . "</td>";
                                echo "</tr>";
                            echo "</table>";
                        }
                        */
                        $api->lerCWs();
                    ?>

                </div>

            </td>
        </tr>
    </table>

    <table cellpadding="0px" cellspacing="0px" width="1073px">
        <tr>
            <td width="600px" valign="top">

                <div id="title_rank">.Rank</div>
                <div id="table_rank">

                    <?php
                        $api->lerRank();
                    ?>

                </div>
                <div id="title_vermais"><a href="#">.ver mais>></a></div>

            </td>
            <td width="172px" valign="top" align="right">

                <div id="title_register"><a href="index.php?ung=register">Ainda não<br>é registrado?<br>Clique aqui!!!</a></div>
                <div id="title_esqueceu"><a href="#">Esqueceu a senha?</a></div>
                <div id="title_doar"><a href="#">Faça uma doação para manter nosso servidor no ar! ;)</a></div>

            </td>
            <td width="301px" align="right" valign="top">

                <div id="title_enquete">.Enquete</div>
                <div id="enquete">

                    <h3>Qual o seu mod favorito?</h3>
                    <form name="enquete" method="post" action="">

                        <table id="text_enquete">
                            <tr>
                                <td><input type="radio" name="options" value="1" /></td>
                                <td>Race DM</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="options" value="2" /></td>
                                <td>Play/Freeroam</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="options" value="3" /></td>
                                <td>Hunter</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="options" value="4" /></td>
                                <td>Shooter</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Votar" style="background:#333; color:#FFF; border:2px solid #9da7b6; width:111px; height:30px;" /></td>
                            </tr>
                        </table>

                    </form>

                        <?php
                            $api->registrarEnquete();
                        ?>

                </div>

            </td>
        </tr>
    </table>

</div>

<div id="end">

	<div id="creditos">
    
    	<table cellpadding="0" cellspacing="0" width="100%" height="80px">
            <tr>
                <td width="34%" align="center" valign="middle"><img src="img/ung_logo.png" /></td>
                <td width="33%" align="center" valign="middle"><img src="img/ung_power.png" /></td>
                <td width="33%" align="right" valign="middle">
                				<font style="padding-right:10px;">Copyright  © 2010 - 2014. www.unit-games.com</font>
                				<br /><font style="padding-right:10px;">Desenvolvido por:</font>
                                <br /><font color="#00A7DF" style="padding-right:10px;">UnG//Luckhas</font>
           		</td>
            </tr>
        </table>
    
    </div>
    
    <div id="feat"></div>

</div>

</body>
</html>