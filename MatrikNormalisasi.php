  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Matrik Normalisasi
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="matriknormalisasi" class=" table table-striped  table-bordered table-hover" >
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

                                          $crMin = mysql_query("SELECT min(c5) as minK5 FROM kriteria where kategori='".$_POST['kategori']."'");
                                            $min = mysql_fetch_array($crMin);

                                          //Hitung Normalisasi tiap Elemen
                                            include 'admin/config/config.php';
                                            $kriteria1 = mysql_query("select * from kriteria where kategori='".$_POST['kategori']."'");
                                            $q=0;
                                            while ($kriteria = mysql_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td><center><?php echo $kriteria['tipe_laptop']; ?></center></td>
                                            <td><center><?php echo round($kriteria['c1']/$max['maxK1'],2); ?></center></td>
                                            <td><center><?php echo  round($kriteria['c2']/$max['maxK2'],2); ?></center></td>
                                            <td><center><?php echo  round($kriteria['c3']/$max['maxK3'],2); ?></center></td>
                                            <td><center><?php echo round($kriteria['c4']/$max['maxK4'],2);  ?></center></td>
                                            <td><center><?php echo round(@($min['minK5']/$kriteria['c5']),2);?></center></td>
                                          
 
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