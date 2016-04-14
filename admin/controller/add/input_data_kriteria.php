 <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><h2>Managemen Data Kriteria</h2></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>

  <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
      <div class="grid_12">
  
         <?php
         $kategori = htmlspecialchars(mysql_real_escape_string($_POST['kategori']));
         $tipe_laptop = htmlspecialchars(mysql_real_escape_string($_POST['tipe']));
         $c1 = htmlspecialchars(mysql_real_escape_string($_POST['c1']));
         $c2 = htmlspecialchars(mysql_real_escape_string($_POST['c2']));
         $c3 = htmlspecialchars(mysql_real_escape_string($_POST['c3']));
         $c4 = htmlspecialchars(mysql_real_escape_string($_POST['c4']));
         $c5 = htmlspecialchars(mysql_real_escape_string($_POST['c5']));
        $no = $_POST['no'];

$c = $c1; // C1 uinputan nilai kecepatan processor
$d = $c2;
$e = $c3;
$f = $c4;
$g = $c5;

//kecepatan processor
//kondisi rendah
if ((0 <= $c ) && ( $c <= 2.4 )) {
  $hasilc1 = (2.4-$c)/2.4;
  $hasilc1;
}
//kondisi sedang
if ((1.2 <= $c ) && ( $c <= 2.4 )) {
  $hasilc2 = ($c-1.2)/1.2;
    $hasilc2;

}
if ((2.4 <= $c ) && ( $c <= 3.6 )) {
   $hasilc3 = (3.6-$c)/1.2;
    $hasilc3;

}
//kondisi tinggi

if ((2.4 <= $c ) && ( $c <= 4.8 )) {
   $hasilc4 = ($c-2.4)/2.4;
    $hasilc4;

}

$nilaic = max(($hasilc1),($hasilc2),($hasilc3),($hasilc4));


//ukuran vga
//kondisi rendah
if ((0 <= $d ) && ( $d <= 4 )) {
  $hasild1 = (4-$d)/4;
  $hasild1;
}
//kondisi sedang
if ((2 <= $d ) && ( $d <= 4 )) {
  $hasild2 = ($d-2)/2;
    $hasild2;

}
if ((4 <= $d ) && ( $d <= 6 )) {
   $hasild3 = (6-$d)/2;
    $hasild3;

}
//kondisi tinggi

if ((4 <= $d ) && ( $d <= 8 )) {
   $hasild4 = ($d-4)/4;
    $hasild4;

}

$nilaid = max(($hasild1),($hasild2),($hasild3),($hasild4));


//ukuran memori
//kondisi rendah
if ((1 <= $e ) && ( $e <= 15 )) {
  $hasile1 = (15-$e)/14;
  $hasile1;
}
//kondisi sedang
if ((8 <= $e ) && ( $e <= 15 )) {
  $hasile2 = ($e-8)/7;
    $hasile2;

}
if ((15 <= $e ) && ( $e <= 22 )) {
   $hasile3 = (22-$e)/7;
    $hasile3;

}
//kondisi tinggi
if ((15 <= $e ) && ( $e <= 22 )) {
  $hasile4 = ($e-15)/7;
    $hasile4;

}
if ((22 <= $e ) && ( $e <= 29 )) {
   $hasile5 = (29-$e)/7;
    $hasile5;

}
//kondisi tinggi sekali

if ((22 <= $e ) && ( $e <= 36 )) {
   $hasile6 = ($e-22)/14;
    $hasile6;

}

$nilaie = max(($hasile1),($hasile2),($hasile3),($hasile4),($hasile5),($hasile6));



//ukuran hardisk
//kondisi rendah
if ((250 <= $f ) && ( $f <= 1250 )) {
  $hasilf1 = (1250-$f)/1000;
  $hasilf1;
}
//kondisi sedang
if ((750 <= $f ) && ( $f <= 1250 )) {
  $hasilf2 = ($f-750)/500;
    $hasilf2;

}
if ((1250 <= $f ) && ( $f <= 1750 )) {
   $hasilf3 = (1750-$f)/500;
    $hasilf3;

}
//kondisi tinggi

if ((1250 <= $f ) && ( $f <= 2250 )) {
   $hasilf4 = ($f-1250)/1000;
    $hasilf4;

}

$nilaif = max (($hasilf1),($hasilf2),($hasilf3),($hasilf4));


//harga
//kondisi murah sekali
if ((2000000 <= $g ) && ( $g <= 10000000 )) {
  $hasilg1 = (10000000-$g)/8000000;
  $hasilg1;
}
//kondisi murah
if ((2000000 <= $g ) && ( $g <= 10000000 )) {
  $hasilg2 = ($g-2000000)/8000000;
    $hasilg2;

}
if ((10000000 <= $g ) && ( $g <= 18000000 )) {
   $hasilg3 = (18000000-$g)/8000000;
    $hasilg3;

}
//kondisi sedang
if ((10000000 <= $g ) && ( $g <= 18000000 )) {
  $hasilg4 = ($g-10000000)/8000000;
    $hasilg4;

}
if ((18000000 <= $g ) && ( $g <= 26000000 )) {
   $hasilg5 = (26000000-$g)/8000000;
    $hasilg5;

}
//kondisi mahal
if ((18000000 <= $g ) && ( $g <= 26000000 )) {
  $hasilg6 = ($g-18000000)/8000000;
    $hasilg6;

}
if ((26000000 <= $g ) && ( $g <= 34000000 )) {
   $hasilg7 = (34000000-$g)/8000000;
    $hasilg7;

}
//kondisi mahal  sekali

if ((26000000 <= $g ) && ( $g <= 34000000 )) {
   $hasilg8 = ($g-26000000)/8000000;
    $hasilg8;

}

$nilaig = max (($hasilg1),($hasilg2),($hasilg3),($hasilg4),($hasilg5),($hasilg6),($hasilg7),($hasilg8));

          // query untuk insert data user baru
            if (isset($_POST['tipe'])) {
              $ceklaptop = mysql_query("select * from kriteria where tipe_laptop='$tipe_laptop' and kategori ='$kategori'");


              if (mysql_num_rows($ceklaptop) == 1) {
             ?>
 <div class="alert info">
                        <span class="hide">x</span><strong>Tipe Laptop Sudah Ada</strong>
                      </div>
             <?php
              }else{
                $SimpanDataLaptop = mysql_query("insert into kriteria values ('', '$kategori','$tipe_laptop','$nilaic','$nilaid','$nilaie','$nilaif','$nilaig')")or die(mysql_error());
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
            <h1>Tambah Data Kriteria</h1>
          </div>
          <form id="validate-form" class="block-content form" action="" method="post" enctype="multipart/form-data">
           
            <p>
              <label >kategori</label>
               <select name="kategori">
                <option selected>Pilih</option>
            <option value="Office">Office</option>
            <option value="Desain">Desain</option>
            <option value="Game">Game</option>
          </select>
            </p>

             <p>
              <label >tipe_laptop</label>
              <?php
        $result = mysql_query("select * from laptop ");

        $jsArray = "var prdName = new Array();\n";
        echo '<select name="tipe" class="form-control" onchange="changeValue(this.value)">'; 
        echo '<option>Pilih</option>';
        while ($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['tipe'] . '">' . $row['tipe'] . '</option>';
        $jsArray .= "prdName['" . $row['tipe'] . "'] = {tipe_laptop:'" . addslashes($row['tipe']) . "',
        kec_prosesor:'" . addslashes($row['kec_prosesor']). "', ukuran_vga:'" . addslashes($row['ukuran_vga']). "', 
        memori:'" . addslashes($row['memori']). "', hardisk:'" . addslashes($row['hardisk']). "', 
        harga:'" . addslashes($row['harga']). "'};\n";  
        }
        echo '</select>';
        ?>
          
            </p>
          
            <p>
              <label >c1</label>
              <input type="text" name="c1" class="required" id="kec_prosesor"  placeholder="Input">
            </p>
          
            <p>
              <label >c2</label>
              <input type="text" name="c2" class="required"  id="ukuran_vga" placeholder="Input">
            </p>
          
            <p>
              <label >c3</label>
              <input type="text" name="c3" class="required" id="memori" placeholder="Input">
            </p>
          
            <p>
              <label >c4</label>
              <input type="text" name="c4" class="required" id="hardisk" placeholder="Input">
            </p>
          
            <p>
              <label >c5</label>
              <input type="text" name="c5" class="required" id="harga" placeholder="Input">
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
 <script type="text/javascript">
        <?php echo $jsArray;
         echo $jsArrayQ; ?>
        function changeValue(id){
        document.getElementById('kec_prosesor').value = prdName[id].kec_prosesor;

        document.getElementById('ukuran_vga').value = prdName[id].ukuran_vga;

        document.getElementById('memori').value = prdName[id].memori;

        document.getElementById('harga').value = prdName[id].harga;

        document.getElementById('hardisk').value = prdName[id].hardisk;
      
   };
  
        </script>      