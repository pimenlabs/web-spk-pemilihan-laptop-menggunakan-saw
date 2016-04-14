<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php   include 'config/config.php'; ?>
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  
  <!-- DNS prefetch -->
  <link rel=dns-prefetch href="//fonts.googleapis.com">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

 <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="css/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="css/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="css/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="css/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="css/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="css/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="css/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="css/forms.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="css/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="css/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <!-- end CSS-->
  
  <!-- Fonts -->
  <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
  <!-- end Fonts-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/moderndizr-2.0.6.min.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
  
</head>
<body id="top">
  <!-- Begin of #container -->
  <div id="container">
<?php 
include 'config/config.php';
session_start();
error_reporting(0);
 
if (isset($_SESSION['level']))
{
  // jika level admin
  if ($_SESSION['level'] == "admin")
   { 
    include 'head.php';
    include 'sidebar.php';
    include 'controller/view/get_url_admin.php';
   //   include 'footer.php';
   }
}
if (!isset($_SESSION['level']))
{
  header('location:index.php');
}
  
  ?>
 
 </div>



  <!--! end of #container -->
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugisns.js"></script> <!-- lightweight wrapper for consolelog, optional -->
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
    
    var validateform = $("#validate-form").validate();
    $("#reset-validate-form").click(function() {
      validateform.resetForm();
      $.jGrowl("Blogpost was not created.", { theme: 'error' });
    });
  });
  </script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>