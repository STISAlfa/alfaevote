<?php

include("conn.php");
session_start();
$error='';


if (isset($_POST['password'])) {

    $password = htmlentities((trim($_POST['password'])));


    $login = mysql_query("select * from siswa where password='$password'");
    $countrow = mysql_num_rows($login);
    if (empty($countrow)) {
        $error = "Username dan Password Salah";
    } else {
        while ($row = mysql_fetch_array($login)) {
            $id_siswa=$row['id_siswa'];
            $username = $row['username'];
            $tingkat = $row['tingkat'];
            $status = $row['status'];
            $nim = $row['nim'];
        }
        //echo '<script language="javascript">alert("berhasil login' . $flag . '")</script>;';

        if ($status=="sudah") {
            header('location: uwes.php');
        }
        else{

            $_SESSION['id_siswa'] = $id_siswa;
            $_SESSION['username']=$username;
            $_SESSION['tingkat'] = $tingkat;
            $_SESSION['nim'] = $nim;


            $ambil=mysql_query("select * from pemilih where username='$username'");
            $cek_ambil=mysql_num_rows($ambil);
            if(empty($cek_ambil)){
                header('location : vote.php');
            }
            else{
                while($row=mysql_fetch_array($ambil)){ 
                    $sema=$row['milih_sema']; 
                    $tingkatst=$row['milih_tingkat'];
                }
                                                                    
                if($sema=='belum' && $tingkatst=='belum' ){

                    header('Location : vote.php');                                    
                
                }
                else if( $sema=='sudah' && $tingkatst=='belum' ){ 
                    header('Location : ketuatingkat.php');
                }
            }
            
        }
    }
} else
    unset($_POST['password']);
    mysql_close($connect);
=-?>
