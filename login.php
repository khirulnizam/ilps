<!-- login.php -->
<?php
    include "header.sbadmin.php";
    //notification
    if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
        echo "
            <div class='alert alert-danger' 
            role='alert'>
                $msg
            </div>
        ";//end echo
    }
?>
<h3>Login pengguna</h3>
<form method="POST" action="verify.php">
    Nama pengguna
    <input type="text" name="namapengguna"
    class="form-control"
    >
    <br>
    Kata laluan
    <input type="password" name="katalaluan"
    class="form-control"
    >
    <br>
    <input type="submit" value="Login"
    class="btn btn-info">
</form>
<?php
    include "footer.sbadmin.php";
?>