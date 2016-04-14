
  
    <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><b>Managemen matrik normalisasi</b></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>
    
    <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
    
      
      <div class="grid_12">
        <div class="block-border">
         <div class="block-header">
            <h1> <a href="main.php?id=proses_seleksi">Data Laptop</a> | 
            <a href="main.php?id=nilai_kriteria_laptop">Nilai Kriteria Laptop</a> | 
          <a href="main.php?id=matrik_awal">Matrik awal</a> | 
        <a href="main.php?id=materik_normalisasi">Matrik Normalisasi</a> | 
      <a href="main.php?id=perengkingan_kategori">Perengkingan Kategori</a> | 
      <a href="main.php?id=alternatif_terbaik">Alternatif Terbaik</a> </h1>


             <span></span>
          </div>
          <div class="block-content">
           <table id="table-example" class="table">
              <thead>
                <tr>
                  <th>id</th>
               <th>tipe_laptop</th>
                <th>c1</th>
                <th>c2</th>
                <th>c3</th>
                <th>c4</th>
               <th>c5</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                //Lakukan Normalisasi dengan rumus pada langkah 2
  //Cari Max atau min dari tiap kolom Matrik
  $crMax = mysql_query("SELECT max(c1) as maxK1, 
            max(c2) as maxK2,
            max(c3) as maxK3,
            max(c4) as maxK4 
      FROM kriteria where kategori='".$_POST['kategori']."'");
  $max = mysql_fetch_array($crMax);

  $crMin = mysql_query("SELECT min(c5) as minK5 FROM kriteria where kategori='".$_SESSION['kategori']."'");
    $min = mysql_fetch_array($crMin);

  //Hitung Normalisasi tiap Elemen
                  $muser = mysql_query("SELECT * FROM kriteria where kategori='".$_SESSION['kategori']."'");
                

                $urut=0;
                while ($puser = mysql_fetch_array($muser)) {
                 $urut++;
                 ?>
                <tr class="gradeX">
                  <td><?php echo $urut; ?></td>
                  <td><?php echo $puser['tipe_laptop']; ?></td>
                  <td><?php echo round($puser['c1']/$max['maxK1'],2);?></td>
                      <td><?php echo round($puser['c2']/$max['maxK2'],2); ?></td>

                <td><?php echo round($puser['c3']/$max['maxK3'],2); ?></td>
                <td><?php echo round($puser['c4']/$max['maxK4'],2); ?></td>
                <td><?php echo round(@($min['minK5']/$puser['c5']),2); ?></td>
                
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <div class="clear height-fix"></div>

    </div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->

    
  
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script> <!-- lightweight wrapper for consolelog, optional -->
  <script defer src="js/mylibs/jquery-ui-1.8.15.custom.min.js"></script> <!-- jQuery UI -->
  <script defer src="js/mylibs/jquery.notifications.js"></script> <!-- Notifications  -->
  <script defer src="js/mylibs/jquery.uniform.min.js"></script> <!-- Uniform (Look & Feel from forms) -->
  <script defer src="js/mylibs/jquery.validate.min.js"></script> <!-- Validation from forms -->
  <script defer src="js/mylibs/jquery.dataTables.min.js"></script> <!-- Tables -->
  <script defer src="js/mylibs/jquery.tipsy.js"></script> <!-- Tooltips -->
  <script defer src="js/mylibs/excanvas.js"></script> <!-- Charts -->
  <script defer src="js/mylibs/jquery.visualize.js"></script> <!-- Charts -->
  <script defer src="js/mylibs/jquery.slidernav.min.js"></script> <!-- Contact List -->
  <script defer src="js/common.js"></script> <!-- Generic functions -->
  <script defer src="js/script.js"></script> <!-- Generic scripts -->
  
  <script type="text/javascript">
  $().ready(function() {
    
    /*
     * Form Validation
     */
    $.validator.setDefaults({
      submitHandler: function(e) {
        $.jGrowl("Form was successfully submitted.", { theme: 'success' });
        $(e).parent().parent().fadeOut();
        v.resetForm();
        v2.resetForm();
        v3.resetForm();
      }
    });
    var v = $("#create-user-form").validate();
    jQuery("#reset").click(function() { v.resetForm(); $.jGrowl("User was not created!", { theme: 'error' }); });
    
    var v2 = $("#write-message-form").validate();
    jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });
    
    var v3 = $("#create-folder-form").validate();
    jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });
    
    /*
     * DataTables
     */
    $('#table-example').dataTable();
    
  });
  </script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
