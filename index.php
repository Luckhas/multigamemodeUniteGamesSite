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
            <td align="center"><a href="#" class="menu_link">forum</a></td>
            <td align="center"><a href="index.php?ung=upload" class="menu_link">upload</a></td>
            <td align="center"><a href="index.php?ung=contact" class="menu_link">contact</a></td>
            <td valign="middle" align="center" width="325px">

                <form action="http://www.google.com/search" method="get" target="_blank">
                    <input name="q" value="" size="27" type="text" style="height: 27px; background-color: #dbe7f3; border: 1px solid #8badc9;">
                    <input name="domains" value="www.unit-games.com" type="hidden">
                    <input name="sitesearch" value="www.unit-games.com" type="hidden">
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
			   echo "Page wasn't found.";
			  }
			 }
        ?>
    
    </div>

</div>

<div style="width:1073px; height:7px;"></div>

<div id="news" align="right">Last News</div>
<div id="news_sub">

    <table cellpadding="0px" cellspacing="0px" width="1073px">
        <tr>
            <td width="290px" valign="top">

                <div id="title_dev">Development News</div>

                    <ul id="news_dev">
                        <li><a href="#">Training is now opened.</a></li>
                        <li><a href="#">Patch 1.0.1: BUG fixes </a></li>
                        <li><a href="#">Patch 1.0: BUG fixes </a></li>
                        <li><a href="#">UnitGAMES 5.0 release</a></li>                        
                    </ul>

            </td>
            <td width="493px" valign="top">

                <div id="title_anun">Announcement</div>
                <div id="news_anun">

                    <h2>All CW disputed until now.</h2>
                    <p id="text_anun">

                        For all you guys which want know our results from the fusion.<br>
                        I decided to do this post to show you. In total we won 28 clan wars, lost 2, draw 2 and cancelled 1 against EmP|.<br> 
                        You can see all results in the square below.<br>

                        <div style="width: 427px; height: 150px; border: 3px solid #000; overflow: auto; margin: 0 auto; background: #FFF; color: #2E2E2E; font-size: 14px; padding:10px;">
                            
                            • All Official Clanwars of the fusion :  -sK-  UnG // (2014-2015 )<br><br>


                             • Won - 28  Clanwars<br>
                             • Lost -  2  Clanwar<br>
                             • Draw -  2 Clanwars<br>
                             • Cancelled - 1 Clanwar<br><br>

                             • TOTAL   :   # 33  Clanwars .<br><br>


                            • Win :  UnG  [ 18 ] - [ 2 ]  [Gold]<br>
                            • Win :  UnG  [ 15 ] - [ 5 ]   pG<br>
                            • Win :  UnG  [ 15 ] - [ 5 ]  -PEG-<br> 
                            • Win :  UnG  [ 15 ] - [ 5 ]  Hg //<br>
                            • Win :  UnG  [ 17 ] - [ 3 ]  LxG //<br>
                            • Win :  UnG  [ 13 ] - [ 7 ]  nFw<br>
                            • Win :  UnG  [ 11 ] - [ 9 ]  [EPG]<br>
                            • Lost : UnG  [  9  ] - [ 11 ] |FT|<br>
                            • Draw : UnG  [ 10 ] - [ 10 ]  KoN<br>
                            • Win :  UnG  [ 20 ] - [ 0 ]  KoN<br>
                            • Win :  UnG  [ 12 ] - [ 8 ]  FfW<br>
                            • Win :  UnG  [ 12 ] - [ 8 ]  -rG-<br>
                            • Win :  UnG  [ 16 ] - [ 4 ]  fH -<br>
                            • Draw : UnG  [ 10 ] - [ 10 ]  -|TG|-<br>
                            • Win :  UnG  [ 16 ] - [ 4 ]   xD ( OldSchool )<br>
                            • Win :  UnG  [ 17 ] - [ 3 ]  -ffw-<br>
                            • Win :  UnG  [  5  ] - [ 2 ]  SHC// ( HUNTER )<br>  
                            • Win :  UnG  [ 14 ] - [ 6 ]  iR<br>
                            • Lost : UnG  [ 9 ] - [ 11 ]  Dws<br>
                            • Win :  UnG  [ 20 ] - [ 0 ]  ~uF|<br>
                            • Win :  UnG  [ 20 ] - [ 0 ]  -cS//<br>
                            • Win :  UnG  [ 15 ] - [ 5 ]  |APS|<br>
                            • Win :  UnG  [ 14 ] - [ 6 ]  |DST|<br>
                            • Win :  UnG  [ 20 ] - [ 0 ]  |FT|<br>
                            • Win :  UnG  [ 11 ] - [ 9 ]  |APS|<br>
                            • Win :  UnG  [ 15 ] - [ 5 ]  |ED|<br> 
                            • Win :  UnG  [ 17 ] - [ 3 ]  |FT|<br>
                            • Win :  UnG  [ 15 ] - [ 5 ]  eP !<br>
                            • Cancelled :  UnG  vs .  Emp|<br>
                            • Win :  UnG  [ 11 ] - [ 9 ]  [ FoXX ]<br>
                            • Win :  UnG  [ 12 ] - [ 8 ]  /AiR\<br>
                            • Win :  UnG  [ 13 ] - [ 7 ]   xR|<br><br>
                            
                        </div>
                    </p>

                </div>

            </td>
            <td width="290px">

                <div id="title_cw_results">Clan Wars results</div>
                <div id="cw_results">
                    <div style="background-color: #006699; width: 100%;">
                        <table id="top_showResults">
                            <tr>
                                <td align="left" width="90px">Clans</td>
                                <td align="center" width="90px">Result</td>
                                <td align="right" width="90px">Points</td>
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
                <div id="title_vermais"><a href="#"></a></div>

            </td>
            <td width="172px" valign="top" align="right">

                <div id="title_register"><a href="index.php?ung=register">You are not<br>registered?<br>Click here!!!</a></div>
                <div id="title_esqueceu"><a href="#">Forgot your password?</a></div>
                <div id="title_doar"><a href="#">Donate to help us maintain the server online and have fun together ;)</a></div>

            </td>
            <td width="301px" align="right" valign="top">

                <div id="title_enquete">.Poll</div>
                <div id="enquete">

                    <h3>What's your favorite gamemode?</h3>
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
                                <td colspan="2"><input type="submit" value="Vote" style="background:#333; color:#FFF; border:2px solid #9da7b6; width:111px; height:30px;" /></td>
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
                				<font style="padding-right:10px;">Copyright  © 2010 - 2015. www.unit-games.com</font>
                				<br /><font style="padding-right:10px;">Development by:</font>
                                <br /><font color="#00A7DF" style="padding-right:10px;">UnG//Luckhas</font>
           		</td>
            </tr>
        </table>
    
    </div>
    
    <div id="feat"></div>

</div>

</body>
</html>