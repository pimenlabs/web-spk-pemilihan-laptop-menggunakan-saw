<?php
          // memulai session
        
session_start();
 error_reporting(0);
include '../../config/config.php';

          $username = mysql_real_escape_string($_POST['username']);
          $password = mysql_real_escape_string($_POST['password']);
          $level = mysql_real_escape_string($_POST['level']);
          $password = md5($password);
          
          // query untuk mendapatkan record dari username admin
          if ($level == 'admin') {
                $query = "SELECT * FROM login WHERE ad_uname = '$username'";
                $hasil = mysql_query($query);
                $data = mysql_fetch_array($hasil);
                // cek kesesuaian password
                
                if ($password == $data['ad_passwd'])
                {
                echo "sukses";
                    // menyimpan username dan level ke dalam session
                    
                    $_SESSION['level'] = $data['level'];
                    $_SESSION['ad_uname'] = $data['ad_uname'];
                    $_SESSION['img'] = $data['img'];
                    //Penggunaan Meta Header HTTP
                  //  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=main.php?id=home">';    
                   header('location:../../main.php?id=home');
                  exit;
                }else{
                  header('location:../../index.php');
                }
          }
          else
          { header('location:../../index.php');}
         
      ?>