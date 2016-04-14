  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Matrik Awal
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="matrikawal" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>kategori</th>
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
                                            include 'admin/config/config.php';
                                            $kriteria1 = mysql_query("select * from kriteria where kategori='".$_POST['kategori']."'");
                                            $q=0;
                                            while ($kriteria = mysql_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td><center><?php echo $kriteria['kategori']; ?></center></td>
                                            <td><center><?php echo $kriteria['tipe_laptop']; ?></center></td>
                                            <td><center><?php echo $kriteria['c1']; ?></center></td>
                                            <td><center><?php echo $kriteria['c2']; ?></center></td>
                                            <td><center><?php echo $kriteria['c3']; ?></center></td>
                                            <td><center><?php echo $kriteria['c4']; ?></center></td>
                                            <td><center><?php echo $kriteria['c5']; ?></center></td>
                                          
 
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