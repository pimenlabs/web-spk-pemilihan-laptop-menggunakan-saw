<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="description" content="Create by lapak project">
    <meta name="author" content="lapakproject.com">
    <link rel="shortcut icon" href=""> 
    <!-- Author pimen -->
    
    <title>Sistem Pendukung Keputusan Pemilihan Laptop Menggunakan Metode SAW</title>
    
    <link href="dist/css/bootstrap.css" rel="stylesheet">
 <!-- DataTables CSS -->
    <link href="dist/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="dist/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
  
  
    
    <link href="dist/css/style.css" rel="stylesheet">
    
</head>
<body>
<?php 
include 'header.php';

if (isset($_GET['id']) == '') {
    header('location:index.php?id=main');
}else{
if ($_GET['id'] == 'main') {
include 'content_utama.php';
}else if ($_GET['id'] == 'tentang_kami') {
include 'tentang_kami.php';
}else if ($_GET['id'] == 'data_laptop') {
include 'content1.php';

}else if ($_GET['id'] == 'proses_seleksi') {
include 'rekomenasi_laptop.php';

}else if ($_GET['id'] == 'rekomenasi_laptop') {
//
?> 

<section id="center">
    <div class="container">
    <div class="row">
  
       <div class="panel  panel-success" style="margin-left:-5px; ">
         
  <!-- Default panel contents -->
  <div class="panel-heading"><center><b>Tentukan Kategori Laptop</b></center></div>
   <div class="panel-body">
   <form id="validate-form" class="block-content form" action="index.php?id=proses_seleksi" method="post" enctype="multipart/form-data">
           
            <p>
          <select name="kategori" class="form-control">

            <option value="Pilih Kategori" selected>Pilih Kategori</option>
            <option value="Office">Office</option>
            <option value="Desain">Desain</option>
            <option value="Game">Game</option>
          </select>
            </p>
          
            <div class="clear"></div>
            
            <!-- Buttons with actionbar  -->
            <div class="block-actions">
              
              <input type="submit" class="form-control"  class="button" value="Pilih"></li>
            
            </div> <!--! end of #block-actions -->
          </form>
  </div>

  <!-- Table -->
 
             </div>                         
    </div>      
</section>
    <?php
}else{
    ?> 

<section id="center">
    <div class="container">
    <div class="row">
  
       <div class="panel  panel-danger" style="margin-left:-5px; ">
         
  <!-- Default panel contents -->
  <div class="panel-heading"><center><b>Maaf, Halaman Belum Tersedia</b></center></div>
  

  <!-- Table -->
 
             </div>                         
    </div>      
</section>
    <?php
}}
include 'footer.php'; ?>


	<script type="text/javascript" src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/carousel/jquery.carouFredSel-6.2.1.js"></script>
    <script src="dist/js/get-script.js"></script>
    <script type="text/javascript" src="dist/js/jquery.js"></script>
    
    <!-- DataTables JavaScript -->
    <script src="dist/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="dist/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
   $(document).ready(function() {
        $('#matrikawal').DataTable({
                responsive: true
        });
    });
     $(document).ready(function() {
        $('#matriknormalisasi').DataTable({
                responsive: true
        });
    }); $(document).ready(function() {
        $('#nilaikriterialaptop').DataTable({
                responsive: true
        });
    });

    
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    }); 
     $(document).ready(function() {
        $('#data_laptop').DataTable({
                responsive: true
        });
    });
    
    </script>

    <script type="text/javascript">
         $(document).ready(function() {
        $('#a').DataTable({
                responsive: true
        });
    });       $(document).ready(function() {
        $('#b').DataTable({
                responsive: true
        });
    });
    </script>

</body>
</html>