<?php
//Variaveis de conecção banco de dados
$host = "localhost";
$db = "unitdb";
$user = "root";
$pass = "1231";

//Login no Banco de Dados
$con_mysql = mysql_connect( $host, $user, $pass ) or die (mysql_error());

//Seleção da data base
$con_db = mysql_select_db ($db, $con_mysql) or die (mysql_error());
?>