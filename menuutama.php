
                    <div class="panel panel-info" style="margin-left:-30px; width:1020px;">
                        <div class="panel-heading">
                           Data Latop
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body"  style="padding:20px">
                            <div class="dataTable_wrapper ">
                               
  <table id="dataTables-example" style="margin-left:-20px; " class=" table table-striped  table-bordered table-hover" >
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
                                            include 'admin/config/config.php';
                                            $Kelas = mysql_query("select * from laptop");
                                            $q=0;
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
           