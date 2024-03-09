<?php
session_start();
mysql_connect('localhost','root','') or die ("Database Not Connect");
mysql_select_db('planpurchase') or die ("No Database Selected");

?>