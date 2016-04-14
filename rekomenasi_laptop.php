<?php if ($_POST['kategori'] == 'Pilih Kategori') {
?>

<section id="center">
    <div class="container">
    <div class="row">
  
       <div class="panel  panel-danger" style="margin-left:-5px; ">
         
  <!-- Default panel contents -->
  <div class="panel-heading"><center><b>Maaf, Anda Belum Memilih Kategori Laptop</b>,  <a href="index.php?id=rekomenasi_laptop">pilih kategori</a></center></div>
  

  <!-- Table -->
 
             </div>                         
    </div>      
</section>
<?php
 } else {?>



<section id="center">
  <div class="container">
    <div class="row">
            <div>
  
                    <div class="panel panel-info" style="margin-left:-30px; width:1050px;">
                        <div class="panel-heading">
                          Rekomendasi Laptop (kategori <b><?php echo $_POST['kategori']; ?></b>)
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                       
                               
  <!-- Nav tabs -->
  <ul class="nav nav-tabs"   role="tablist">
    <li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Data Laptop</a></li>
    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nilai Kriteria Laptop</a></li>
    <li role="presentation"  ><a href="#MatrikAwal" aria-controls="MatrikAwal" role="tab" data-toggle="tab">Matrik Awal</a></li>
    <li role="presentation" ><a href="#MatrikNormalisasi" aria-controls="profile" role="tab" data-toggle="tab">Matrik Normalisasi</a></li>
    <li role="presentation"  ><a href="#PerengkinganKategori" aria-controls="home" role="tab" data-toggle="tab">Perengkingan Kategori</a></li>
    <li role="presentation" ><a href="#AlternatifTerbaik" aria-controls="profile" role="tab" data-toggle="tab">Alternatif Terbaik</a></li>
    </ul>

  <!-- Tab panes -->
  <div class="tab-content"><br>
    <!--data laptop -->
    <div role="tabpanel" class="tab-pane active" id="home">
    <div class="row">                
              <?php include 'datalaptop.php'; ?>
                </div></div>
     </div>
    
<!--Nilai Kriteria Laptop -->
    <div role="tabpanel" class="tab-pane" id="profile">
    <div class="row">
           <?php include 'datakriterialaptop.php'; ?>
    </div>       
    </div>  

     <div role="tabpanel" class="tab-pane" id="MatrikAwal">
    <div class="row">
            <?php include 'matrikawal.php'; ?>
    </div>       
    </div>  


 <div role="tabpanel" class="tab-pane" id="MatrikNormalisasi">
    <div class="row">
     <?php include 'MatrikNormalisasi.php'; ?>
    </div>       
    </div>  

 <div role="tabpanel" class="tab-pane" id="PerengkinganKategori">
    <div class="row">
         <?php include 'PerengkinganKategori.php'; ?>
    </div>       
    </div>  

 <div role="tabpanel" class="tab-pane" id="AlternatifTerbaik">
    <div class="row">
        <?php include 'AlternatifTerbaik.php'; ?>
    </div>       
    </div>  


</div>    
  </div>     </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>    
                    <!-- /.panel -->
               
</section><?php } ?>