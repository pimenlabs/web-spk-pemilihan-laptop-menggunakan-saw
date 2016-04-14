<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['ddata_laptop']));
mysql_query("delete from laptop where tipe='$d'");
header("Location: ../../main.php?id=data_laptop");
 ?>