<?php
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('result', $con);
$sql="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sql);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());
?>