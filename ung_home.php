<div id="video">
<table width="1073" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#00A2D7" width="753px" height="426px" align="center" valign="middle">
        <iframe width="742px" height="417px" src="https://www.youtube.com/embed/lY6cswtEwuU" frameborder="0"
        allowfullscreen></iframe>
    </td>
    <td align="center" valign="top">
        <table width="290px" height="426px" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td bgcolor="#00A2D7" align="center" valign="middle" height="60px" style="font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#FFF;">Donations</td>
          </tr>
          <tr>
            <td bgcolor="#0092C1" align="center" valign="top">
            	
            	<?php
				/*
					include "includes/con_db.php";
					$donation = mysql_query ("SELECT * FROM `donations` ORDER BY id DESC LIMIT 12") or die(mysql_error());
					
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
				*/

					$api = UnitAPI::getInstance();
					if (!$api) { echo "Error"; return false; }
					$api->lerDonations();
				?>
            
            </td>
          </tr>
        </table>

    </td>
  </tr>
</table>

</div>
