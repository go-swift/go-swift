<?php
  require_once 'db.php';
  $sql = "select * from goswift";
  $result = mysql_query($sql,$con);
  var_dump($result);
  $userList = '';
  while($rs = mysql_fetch_array($result)){
        $userList[] = $rs;
	echo "good";
    }
var_dump($userList);
mysql_query("INSERT INTO `gw_table` ( `title`, `url`, `thrumb`) VALUES ('google','http://google.net','go.png')");
?>
