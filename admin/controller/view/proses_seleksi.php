
  
    <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><b>Managemen Data Laptop (kategori <?php echo $_SESSION['kategori']; ?>)</b></li>
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
               <th>tipe</th>
               <th>tipe_prosesor</th>
                <th>kec_prosesor</th>
                <th>vga</th>
                <th>ukuran_vga</th>
                <th>memori</th>
               <th>hardisk</th>
               <th>harga</th>
               <th>Layar</th>
               <th>konektivitas</th>
               <th>kamera</th>    
              </tr>
              </thead>
              <tbody>
                <?php 

                 $kategori = $_POST['kategori'];
                    $_SESSION['kategori'] = $_POST['kategori'];
                $muser = mysql_query("select * from kriteria a, laptop b where a.tipe_laptop=b.tipe and a.kategori='$kategori'");
                $urut=0;
                mysql_query("TRUNCATE TABLE ranging");
                while ($puser = mysql_fetch_array($muser)) {
                 $urut++;
                 ?>
                <tr class="gradeX">
                  <td><?php echo $urut; ?></td>
                <td><?php echo $puser['tipe']; ?></td>
                  <td><?php echo $puser['tipe_prosesor']; ?></td>
                    <td><?php echo $puser['kec_prosesor']; ?></td>
                      <td><?php echo $puser['vga']; ?></td>

                <td><?php echo $puser['ukuran_vga']; ?></td>
                <td><?php echo $puser['memori']; ?></td>
                <td><?php echo $puser['hardisk']; ?></td>
                <td><?php echo $puser['harga']; ?></td>
                 <td><?php echo $puser['Layar']; ?></td>
                <td><?php echo $puser['konektivitas']; ?></td>
                <td><?php echo $puser['kamera']; ?></td>
                
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
  
