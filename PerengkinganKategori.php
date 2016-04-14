       <?php 
              //Buat array bobot { C1 = 35%; C2 = 25%; C3 = 25%; dan C4 = 15%.}
  mysql_query("TRUNCATE TABLE ranging");
  $query = mysql_query("select * from bobot where kategori='".$_SESSION['kategori']."'");
  $r = mysql_fetch_array($query);
  $bobot = array($r['c1'], $r['c2'], $r['c3'], $r['c4'], $r['c5']);

  //Buat fungsi tampilkan nama
  function getNama($id){
    $q =mysql_query("SELECT * from kriteria where kategori='".$_SESSION['kategori']."' and id = '$id'");
    $d = mysql_fetch_array($q);
    return $d['tipe_laptop'];
  }
//Lakukan Normalisasi dengan rumus pada langkah 2
  //Cari Max atau min dari tiap kolom Matrik
  $crMax = mysql_query("SELECT max(c1) as maxK1, 
            max(c2) as maxK2,
            max(c3) as maxK3,
            max(c4) as maxK4 
      FROM kriteria");
  $max = mysql_fetch_array($crMax);
  $crMin = mysql_query("SELECT min(c5) as minK5 
      FROM kriteria");
    $min = mysql_fetch_array($crMin);

    $sql3 = mysql_query("SELECT * FROM kriteria where kategori = '".$_SESSION['kategori']."'");
 $sql4 = mysql_num_rows($sql3);
while ($dt3 = mysql_fetch_array($sql3)) {
  $Nilai = 
      round((($dt3['c1']/$max['maxK1'])*$bobot[0])+
      (($dt3['c2']/$max['maxK2'])*$bobot[1])+
      (($dt3['c3']/$max['maxK3'])*$bobot[2])+
      (($dt3['c4']/$max['maxK4'])*$bobot[3])+
      (@(($min['minK5']/$dt3['c5'])*$bobot[4])),2);
 
  $tampilnama = getNama($dt3['id']);

  
  mysql_query("insert into ranging values ('$tampilnama','$Nilai')");
}

   ?>
  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Perengkingan Kategori
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="a" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nama</th>
                                            <th>Total Nilai</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            
                                            <?php 
                                            include 'admin/config/config.php';
                                            $kriteria1 = mysql_query("select * from ranging order by nilai desc");
                                            $q=0;
                                            while ($kriteria = mysql_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td><center><?php echo $kriteria['nama']; ?></center></td>
                                            <td><center><?php echo $kriteria['nilai']; ?></center></td>
                                            
 
                                     </tr>

                                
                                              <?php } ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>