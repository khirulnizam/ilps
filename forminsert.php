<?php
    include "checksession.php";
    include "header.sbadmin.php";
?>
<!-- forminsert.php -->
<h3>Masuk rekod pelajar baru</h3>
<form method="POST" action="">
ID Pelajar <input type="text" 
    name="IDPelajar"
    class="form-control">
Nama Pelajar <input type="text"
    name="NamaPelajar"
    class="form-control">
Alamat <input type="text"
    name="alamat"
    class="form-control"><br>
Namapengguna pelajar <input type="text"
    name="namapengguna"
    class="form-control">
Katalaluan <input type="password"
    name="katalaluan"
    class="form-control"><br>
<button type="submit" class="btn btn-info">
    Simpan rekod pelajar
</button><br>

</form>
<?php
//semak isset
if(isset($_POST['IDPelajar']) && 
    isset($_POST['NamaPel']) && 
    isset($_POST['namapengguna']) &&
    isset($_POST['katalaluan']))
    {
        //capture all data
        $IDPelajar = $_POST['IDPelajar'];
        $NamaPel = $_POST['NamaPel'];
        $Alamat = $_POST['Alamat'];
        $namapengguna = $_POST['namapengguna'];
        $katalaluan = $_POST['katalaluan'];
        $userlevel = "pelajar";
        //connection
        include "connection.php";
        //sql
        $sqlpelajar="INSERT INTO pelajar
            VALUES('$IDPelajar','$NamaPel',
            '$Alamat')";
        $rspelajar=mysqli_query($db, $sqlpelajar);

        $sqlpengguna = "INSERT INTO pengguna
            (namapengguna, katalaluan, userlevel, 
            namapenuh, IDPelajar)
            VALUES('$namapengguna','$katalaluan',
            '$userlevel','$namapenuh','$IDPelajar')";
        $rspengguna=mysqli_query($db, $sqlpengguna);

        //mesej alert
        if($rspelajar==true && $rspengguna==true){
            //berjaya simpan
            echo "
                <div class='alert-success' 
                role='alert'> Rekod berjaya disimpan
                 </div>
            ";
        }else{//tidak berjaya
            echo "
                <div class='alert-warning' 
                role='alert'> Rekod TIDAK berjaya 
                disimpan.
                Ralat: $sqlpelajar $sqlpengguna
                </div>
            ";

        }
    }//isset

?>
<?php
    include "footer.sbadmin.php";
?>