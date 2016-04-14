 <!-- Begin of #main -->
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
              $cekobat = mysql_query("select * from bobot where kategori='$kategori'");
              if (mysql_num_rows($cekobat) == 1) {
             ?>
 <div class="alert info">
                        <span class="hide">x</span><strong>Kategori Laptop Sudah Ada</strong>
                      </div>
             <?php
              }else{
                $SimpanDataLaptop = mysql_query("INSERT INTO bobot
               
               VALUES (null, '$kategori',
                '$c1',
                '$c2',
                '$c3',
                '$c4',
                '$c5')")or die(mysql_error());
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
            <h1>Tambah Data Bobot</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
           
            <p>
              <label >kategori</label>
          <select name="kategori">
            <option value="Office">Office</option>
            <option value="Desain">Desain</option>
            <option value="Game">Game</option>
          </select>
            </p>
          
            <p>
              <label >c1</label>
              <input type="text" name="c1" class="required" placeholder="Input">
            </p>
          
            <p>
              <label >c2</label>
              <input type="text" name="c2" class="required" placeholder="Input">
            </p>
          
            <p>
              <label >c3</label>
              <input type="text" name="c3" class="required" placeholder="Input">
            </p>
          
            <p>
              <label >c4</label>
              <input type="text" name="c4" class="required" placeholder="Input">
            </p>
          
            <p>
              <label >c5</label>
              <input type="text" name="c5" class="required" placeholder="Input">
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
