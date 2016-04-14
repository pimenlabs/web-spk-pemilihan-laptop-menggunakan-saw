
  
    <!-- Begin of #main -->
    <div id="main" role="main">
      
      <!-- Begin of titlebar/breadcrumbs -->
    <div id="title-bar">
      <ul id="breadcrumbs">
        <li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
        <li class="no-hover"><b>Managemen Data Bobot</b></li>
      </ul>
    </div> <!--! end of #title-bar -->
    
    <div class="shadow-bottom shadow-titlebar"></div>
    
    <!-- Begin of #main-content -->
    <div id="main-content">
      <div class="container_12">
      
    
      
      <div class="grid_12">
        <div class="block-border">
         
          <div class="block-content">
           <table id="table-example" class="table">
              <thead>
                <tr>
                  <th>id</th>
               <th>kategori</th>
               <th>c1</th>
                <th>c2</th>
                <th>c3</th>
                <th>c4</th>
                <th>c5</th>
                  <th>aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                  $muser = mysql_query("select * from bobot");
                while ($puser = mysql_fetch_array($muser)) {
                 
                 ?>
                <tr class="gradeX">
                  <td><?php echo $puser['id']; ?></td>
                <td><?php echo $puser['kategori']; ?></td>
                  <td><?php echo $puser['c1']; ?></td>
                    <td><?php echo $puser['c2']; ?></td>
                      <td><?php echo $puser['c3']; ?></td>

                <td><?php echo $puser['c4']; ?></td>
                <td><?php echo $puser['c5']; ?></td>
                
               
                 
                  <td><a href="main.php?id=edata_bobot&kategori=<?php echo $puser['kategori']; ?>">Edit</a> 
                    | <a href="controller/delete/ddata_bobot.php?ddata_bobot=<?php echo $puser['kategori']; ?>">Hapus</a></td>

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
  
