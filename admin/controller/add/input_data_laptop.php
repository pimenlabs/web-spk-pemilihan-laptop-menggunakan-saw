 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Data Laptop</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
        $tipe = htmlspecialchars(mysql_real_escape_string($_POST['tipe']));
         $tipe_prosesor = htmlspecialchars(mysql_real_escape_string($_POST['tipe_prosesor']));
         $kec_prosesor = htmlspecialchars(mysql_real_escape_string($_POST['kec_prosesor']));
         $vga = htmlspecialchars(mysql_real_escape_string($_POST['vga']));
         $ukuran_vga = htmlspecialchars(mysql_real_escape_string($_POST['ukuran_vga']));
         $memori = htmlspecialchars(mysql_real_escape_string($_POST['memori']));
         $hardisk = htmlspecialchars(mysql_real_escape_string($_POST['hardisk']));
         $harga = htmlspecialchars(mysql_real_escape_string($_POST['harga']));
         $Layar = htmlspecialchars(mysql_real_escape_string($_POST['Layar']));
         $konektivitas = htmlspecialchars(mysql_real_escape_string($_POST['konektivitas']));
         $kamera = htmlspecialchars(mysql_real_escape_string($_POST['kamera']));
         
          // query untuk insert data user baru
            if (isset($_POST['tipe'])) {
              $cekobat = mysql_query("select * from laptop where tipe='$tipe'");
              if (mysql_num_rows($cekobat) == 1) {
             ?>
 <div class="alert info">
                        <span class="hide">x</span><strong>Tipe Laptop Sudah Ada</strong>
                      </div>
             <?php
              }else{
                $SimpanDataLaptop = mysql_query("INSERT INTO laptop
               
               VALUES (null, '$tipe',
                '$tipe_prosesor',
                '$kec_prosesor',
                '$vga',
                '$ukuran_vga',
                '$memori',
                '$hardisk',
                '$harga',
                '$Layar',
                '$konektivitas',
                '$kamera')")or die(mysql_error());
                     if ($SimpanDataLaptop)

                            {
                             ?>
                               <div class="alert info">
                        <span class="hide">x</span><strong>Data Berhasil Disimpan</strong>
                      </div>
                      <?php
                            }
                            else {
                               ?>
                               <div class="alert info">
                        <span class="hide">x</span><strong>Data Gagal Disimpan <?php echo $SimpanDataLaptop; ?> </strong>
                      </div><?php
                            }
              }
          }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Tambah Data Laptop</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
           
            <p>
              <label >tipe</label>
              <input type="text" name="tipe" class="required" placeholder="Input">
            </p>
            <p>
              <label >tipe_prosesor</label>
              <input type="text" name="tipe_prosesor" class="required" placeholder="Input">
            </p>
            <p>
              <label >kec_prosesor</label>
              <input type="text" name="kec_prosesor" class="required" placeholder="Input">
            </p>
            <p>
              <label >vga</label>
              <input type="text" name="vga" class="required" placeholder="Input">
            </p>
            <p>
              <label >ukuran_vga</label>
              <input type="text" name="ukuran_vga" class="required" placeholder="Input">
            </p>
            <p>
              <label >memori</label>
              <input type="text" name="memori" class="required" placeholder="Input">
            </p>
            <p>
              <label >hardisk</label>
              <input type="text" name="hardisk" class="required" placeholder="Input">
            </p>
            <p>
              <label >harga</label>
              <input type="text" name="harga" class="required" placeholder="Input">
            </p>
            <p>
              <label >Layar</label>
              <input type="text" name="Layar" class="required" placeholder="Input">
            </p>
            <p>
              <label >konektivitas</label>
              <input type="text" name="konektivitas" class="required" placeholder="Input">
            </p>
            <p>
              <label >kamera</label>
              <input type="text" name="kamera" class="required" placeholder="Input">
            </p>
            
            <div class="clear"></div>
            
            <!-- Buttons with actionbar  -->
            <div class="block-actions">
              
              <ul class="actions-right">
                <li><input type="submit" class="button" value="Simpan"></li>
              </ul>
            </div> <!--! end of #block-actions -->
          </form>
         
        </div>
      </div>
            
      <div class="clear height-fix"></div>

    </div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->
