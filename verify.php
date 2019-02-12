<?php
//verify.php
//fetch username & password
$namapengguna= $_POST['namapengguna'];
$katalaluan= $_POST['katalaluan'];

//sql string
$sql="SELECT * FROM pengguna 
    WHERE namapengguna='$namapengguna' 
    AND katalaluan=md5('$katalaluan') ";
    //echo $sql;
//laksana dalam database
include "connection.php";
$rs=mysqli_query($db, $sql);
$rekod=mysqli_fetch_array($rs);
//namapengguna & katalaluan match
if(mysqli_num_rows($rs)==1){
    //echo "Nama pengguna dijumpai";
    
    //register session
    session_start();
    $_SESSION['sessionid']=session_id();
    //simpan namapengguna dalam session
    $_SESSION['namapengguna']=$namapengguna;
    //capture userlevel
    $userlevel=$rekod['userlevel'];
    $_SESSION['userlevel']=$userlevel;
    $_SESSION['namapenuh']=$rekod['namapenuh'];
    $_SESSION['idpelajar']=$rekod['IDPelajar'];
    if($userlevel=="admin"){
        header ("Location: searchadmin.php");
    }else if ($userlevel=="pelajar"){
        header ("Location: infopelajar.php");
    }//end userlevel
}else{//not match
    header ("Location: login.php?msg=Nama pengguna dan katalaluan takpadan");
    //echo "Tiada pengguna dijumpai";
}
?>
