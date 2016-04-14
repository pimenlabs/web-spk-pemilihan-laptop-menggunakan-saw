
  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       Alternatif Terbaik
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="b" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                         <th>id</th>
                                            <th>Nama</th>
                                            <th>Total Nilai</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            
                                            <?php 
                                            $s = mysql_query("select max(nilai) from ranging as ni");

while ($d = mysql_fetch_array($s)) {
  $data = $d['max(nilai)'];
}
                                            include 'admin/config/config.php';
                                            $kriteria1 = mysql_query("select * from ranging where nilai='$data'");
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