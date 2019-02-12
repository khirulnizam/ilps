<?php
include "checksession.php";
//infopelajar.php
include "connection.php";
//capture all from table pelajar
$idpelajar=$_SESSION['idpelajar'];
$sql="SELECT * FROM pelajar 
    WHERE IDPelajar='$idpelajar' ";
$rs=mysqli_query($db, $rs);
$rekod=mysqli_fetch_array($rs);
$NamaPel=$rekod['NamaPel'];
$Alamat=$rekod['Alamat'];
?>
<form>
    IDPelajar
    <input type="text" name="IDPelajar"
    value="<?php echo $idpelajar ?>"
    enable=false
    class="form-control">
    Nama pelajar
    <input type="text" name="NamaPel"
    value="<?php echo $NamaPel ?>"
    class="form-control">
    Alamat
    <input type="text" name="Alamat"
    value="<?php echo $Alamat ?>"
    class="form-control">
    <input type="submit" 
    value="Simpan kemaskini">
</form>