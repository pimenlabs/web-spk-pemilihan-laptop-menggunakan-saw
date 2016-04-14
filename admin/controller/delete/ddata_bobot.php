<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['ddata_bobot']));
mysql_query("delete from bobot where kategori='$d'");
header("Location: ../../main.php?id=data_bobot");
 ?>