<?php 
$get = htmlspecialchars(mysql_real_escape_string($_GET['id']));

if ( $get == 'home') {
	include_once 'conten_utama.php';

}
else if ( $get == 'input_data_laptop') {
	include_once 'controller\add\input_data_laptop.php';

}else if ( $get == 'input_data_bobot') {
	include_once 'controller\add\input_data_bobot.php';

}else if ( $get == 'input_data_kriteria') {
	include_once 'controller\add\input_data_kriteria.php';

}else if ( $get == 'data_laptop') {
	include_once 'controller\view\data_laptop.php';

}else if ( $get == 'data_bobot') {
	include_once 'controller\view\data_bobot.php';

}else if ( $get == 'data_kriteria') {
	include_once 'controller\view\data_kriteria.php';

}else if ( $get == 'edata_laptop') {
	include_once 'controller\edit\edata_laptop.php';

}else if ( $get == 'edata_bobot') {
	include_once 'controller\edit\edata_bobot.php';

}else if ( $get == 'edata_kriteria') {
	include_once 'controller\edit\edata_kriteria.php';

}else if ( $get == 'proses_seleksi') {
	include_once 'controller\view\proses_seleksi.php';

}else if ( $get == 'nilai_kriteria_laptop') {
	include_once 'controller\view\nilai_kriteria_laptop.php';

}

else if ( $get == 'matrik_awal') {
	include_once 'controller\view\matrik_awal.php';

}
else if ( $get == 'materik_normalisasi') {
	include_once 'controller\view\materik_normalisasi.php';

}
else if ( $get == 'perengkingan_kategori') {
	include_once 'controller\view\perengkingan_kategori.php';

}
else if ( $get == 'alternatif_terbaik') {
	include_once 'controller\view\alternatif_terbaik.php';

}else if ( $get == 'seleksi') {
	include_once 'controller\view\seleksi.php';

}


else{
	include_once 'controller\error\error.php';
}

 ?>