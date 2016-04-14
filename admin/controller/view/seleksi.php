 <!-- Begin of #main -->
    <div id="main" role="main">
    	
    	<!-- Begin of titlebar/breadcrumbs -->
		<div id="title-bar">
			<ul id="breadcrumbs">
				<li><a href="main.php?id=home" title="Home"><span id="bc-home"></span></a></li>
				<li class="no-hover">Sistem Pendukung Keputusan Pemilihan Laptop Menggunakan Metode SAW</li>
			</ul>
		</div> <!--! end of #title-bar -->
		
		<div class="shadow-bottom shadow-titlebar"></div>

	<!-- Begin of #main-content -->
		<div id="main-content">
			<div class="container_12">
			
			<div class="grid_12">
			
			<div class="grid_12">
        <div class="block-border">
          <div class="block-header">
            <h1>Tentukan Kategori Laptop</h1>
          </div>
          <form id="validate-form" class="block-content form" action="main.php?id=proses_seleksi" method="post" enctype="multipart/form-data">
           
            <p>
              <label >kategori</label>
          <select name="kategori">

            <option selected>Pilih</option>
            <option value="Office">Office</option>
            <option value="Desain">Desain</option>
            <option value="Game">Game</option>
          </select>
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
			
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->
