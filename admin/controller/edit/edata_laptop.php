 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['tipe'])); ?><!-- Begin of #main -->
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
              $insert = "UPDATE laptop SET tipe='$tipe',tipe_prosesor='$tipe_prosesor',
              kec_prosesor='$kec_prosesor',vga='$vga',ukuran_vga='$ukuran_vga',memori='$memori',
              hardisk='$hardisk',harga='$harga',Layar='$Layar',konektivitas='$konektivitas',
              kamera='$kamera' WHERE tipe='$tipe'";
              if (mysql_query($insert))
              { ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Berhasil Diupdate </strong>
        </div>
        <?php
              }
              else {
                 ?>
                 <div class="alert info">
          <span class="hide">x</span><strong>Data Gagal Diupdate</strong>
        </div><?php
              }
            }
            ?>

      </div>
    <div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Edit Laptop</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from laptop where tipe='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
          
           ?>
           <p>
              <label >tipe</label>
              <input type="text" name="tipe"  value="<?php echo $Edituser1['tipe']; ?>" class="required">
            </p>
            <p>
              <label >tipe_prosesor</label>
              <input type="text" name="tipe_prosesor"  value="<?php echo $Edituser1['tipe_prosesor']; ?>" class="required">
            </p>
            <p>
              <label >kec_prosesor</label>
              <input type="text" name="kec_prosesor"  value="<?php echo $Edituser1['kec_prosesor']; ?>" class="required">
            </p>
            <p>
              <label >vga</label>
              <input type="text" name="vga"  value="<?php echo $Edituser1['vga']; ?>" class="required">
            </p>
            <p>
              <label >ukuran_vga</label>
              <input type="text" name="ukuran_vga"  value="<?php echo $Edituser1['ukuran_vga']; ?>" class="required">
            </p>
            <p>
              <label >memori</label>
              <input type="text" name="memori"  value="<?php echo $Edituser1['memori']; ?>" class="required">
            </p>
            <p>
              <label >hardisk</label>
              <input type="text" name="hardisk"  value="<?php echo $Edituser1['hardisk']; ?>" class="required">
            </p>
            <p>
              <label >harga</label>
              <input type="text" name="harga"  value="<?php echo $Edituser1['harga']; ?>" class="required">
            </p>
            <p>
              <label >Layar</label>
              <input type="text" name="Layar"  value="<?php echo $Edituser1['Layar']; ?>" class="required">
            </p>
            <p>
              <label >konektivitas</label>
              <input type="text" name="konektivitas"  value="<?php echo $Edituser1['konektivitas']; ?>" class="required">
            </p>
            <p>
              <label >kamera</label>
              <input type="text" name="kamera"  value="<?php echo $Edituser1['kamera']; ?>" class="required">
            </p>

            <?php   } ?>

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
