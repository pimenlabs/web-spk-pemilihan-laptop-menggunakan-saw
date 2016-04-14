<?php 
include_once '../../config/config.php';
$d = htmlspecialchars(mysql_real_escape_string($_GET['ddata_kriteria']));
mysql_query("delete from kriteria where tipe_laptop='$d'");
header("Location: ../../main.php?id=data_kriteria");
 ?>