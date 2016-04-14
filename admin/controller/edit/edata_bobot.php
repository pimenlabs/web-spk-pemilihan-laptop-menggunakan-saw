 <?php  $kl = htmlspecialchars(mysql_real_escape_string($_GET['kategori'])); ?><!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Data Bobot</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
       
          <?php
           
        $kategori = htmlspecialchars(mysql_real_escape_string($_POST['kategori']));
         $c1 = htmlspecialchars(mysql_real_escape_string($_POST['c1']));
         $c2 = htmlspecialchars(mysql_real_escape_string($_POST['c2']));
         $c3 = htmlspecialchars(mysql_real_escape_string($_POST['c3']));
         $c4 = htmlspecialchars(mysql_real_escape_string($_POST['c4']));
   $c5 = htmlspecialchars(mysql_real_escape_string($_POST['c5']));
     // query untuk insert data user baru
            if (isset($_POST['kategori'])) {
              $insert = mysql_query("UPDATE bobot SET 
              c1='$c1',
              c2='$c2',
              c3='$c3',
              c4='$c4',
              c5='$c5' WHERE  kategori='$kategori'");
              if ($insert) 
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
            <h1>Edit Bobot</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
          <?php 
          include '../../config/config.php';
         
            $Edituser = mysql_query("select * from bobot where kategori='$kl'");
            while ($Edituser1 = mysql_fetch_array($Edituser)) {
              
          
           ?>
           <p>
              <label >kategori</label>
              <input type="text" name="kategori"  value="<?php echo $Edituser1['kategori']; ?>" class="required">
            </p>
            <p>
              <label >c1</label>
              <input type="text" name="c1"  value="<?php echo $Edituser1['c1']; ?>" class="required">
            </p>
            <p>
              <label >c2</label>
              <input type="text" name="c2"  value="<?php echo $Edituser1['c2']; ?>" class="required">
            </p>
            <p>
              <label >c3</label>
              <input type="text" name="c3"  value="<?php echo $Edituser1['c3']; ?>" class="required">
            </p>
            <p>
              <label >c4</label>
              <input type="text" name="c4"  value="<?php echo $Edituser1['c4']; ?>" class="required">
            </p>
            <p>
              <label >c5</label>
              <input type="text" name="c5"  value="<?php echo $Edituser1['c5']; ?>" class="required">
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
