<?php
$con = mysql_connect("localhost",'knight2015','5A1BC7FF94475f') or die('error:'.mysql_error());
mysql_select_db('knight2015',$con) or die('error:'.mysql_error());
$rs = mysql_query('select * from goswift');
?>
