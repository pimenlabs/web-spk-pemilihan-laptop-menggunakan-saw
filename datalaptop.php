  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Laptop
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table  id="data_laptop" style="margin-left:-16px; " class=" table table-striped  table-bordered table-hover" >
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
                                            include 'admin/config/config.php';
                                            $Kelas = mysql_query("select * from kriteria a, laptop b where a.tipe_laptop=b.tipe and a.kategori='$kategori'");
                                            $q=0; 
                                            mysql_query("TRUNCATE TABLE ranging");
                                            while ($d = mysql_fetch_array($Kelas)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td><center><?php echo $d['tipe']; ?></center></td>
                                            <td><center><?php echo $d['tipe_prosesor']; ?></center></td>
                                            <td><center><?php echo $d['kec_prosesor']; ?></center></td>
                                            <td><center><?php echo $d['vga']; ?></center></td>
                                            <td><center><?php echo $d['ukuran_vga']; ?></center></td>
                                            <td><center><?php echo $d['memori']; ?></center></td>
                                            <td><center><?php echo $d['hardisk']; ?></center></td>
                                            <td><center><?php echo $d['harga']; ?></center></td>
                                            <td><center><?php echo $d['Layar']; ?></center></td>
                                            <td><center><?php echo $d['konektivitas']; ?></center></td>
                                           <td><center><?php echo $d['kamera']; ?></center></td>
                                           
 
                                     </tr>

                                
                                              <?php } ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->