	<!-- Begin of Sidebar -->
    <aside id="sidebar">
    	
    	<!-- Begin of #login-details -->
		<section id="login-details">
    		<?php 
          if ($_SESSION['level'] == 'admin') {
            ?>
            <img class="img-left framed" height="60" width="60" src="img/gambar/profile/<?php echo $_SESSION['img']; ?>" alt="Hello Admin">
        
            <?php
            # code...
          }else if ($_SESSION['level'] == 'pengajar') {
            ?>
            <img class="img-left framed" height="60" width="60" src="img/gambar/pengajar/<?php echo $_SESSION['img']; ?>" alt="Hello Admin">
    
            <?php

            # code...
          }?>
        <h3>Login Sebagai</h3>
    		<h2><?php echo $_SESSION['username']; ?></h2>
        <h3>Level : <?php echo $_SESSION['level']; ?></h3>
    		
    		<div class="clearfix"></div>
  		</section> <!--! end of #login-details -->
    	
    	<!-- Begin of Navigation -->
    	<nav id="nav">
	    	<ul class="menu collapsible shadow-bottom"> 
	    	    <?php 
	    	       
                include 'config/config.php';

                  $kategorimenu = mysql_query("select * from kmenu where level ='".$_SESSION['level']."'");
                  $totalkategorimenu  = mysql_num_rows($kategorimenu);
                  while ($klist = mysql_fetch_array($kategorimenu)) {
                       $kategori[] = $klist['kategori'];
                       $kicon[] = $klist['icon'];
                  }
    
         
                  for ($i=0; $i < $totalkategorimenu; $i++) { 
                        
                    ?>
                        <li><a href=""><img src="img/icons/packs/fugue/16x16/<?php echo $kicon[$i]; ?>"><?php echo $kategori[$i]; ?></a>
                                <ul class="sub">
                               <?php 
                               $e = $_SESSION['level'];
                                    $listmenu = mysql_query("select * from lmenu where kategori='".$kategori[$i]."' and level='".$_SESSION['level']."'");              
                                    $totallist = mysql_num_rows($listmenu);
                                    for ($w=0; $w < $totallist; $w++) { 
                                            while ($tampillist = mysql_fetch_array($listmenu)) {
                                            ?>
                                            <li><a href="<?php echo $tampillist['url']; ?>"><img src="img/icons/packs/fugue/16x16/<?php echo $tampillist['icon']; ?>"><?php echo  $tampillist['nama']; ?></a>
                                             <?php
                                   

                                            }
                                           }
                                 ?>
                            
                                </ul>
                        </li>
                    <?php
                       
                  }

                ?>


	    	    
	    	</ul>
    	</nav> <!--! end of #nav -->
    	
    </aside> <!--! end of #sidebar -->
 