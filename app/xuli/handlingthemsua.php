<?php
    $img = $_POST['img'];
    $hs = $_POST['hs'];
    $loaisua = $_POST['loaisua'];
    $kl = $_POST['kl'];
    $gia = $_POST['gia'];
    $tensua = $_POST['tensua'];
    $dinhduong = $_POST['dinhduong'];
    $loiich = $_POST['loiich'];
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $query = "INSERT INTO thongtinloaisua values ('','$img','$hs','$tensua','$kl','$gia','$loaisua','$dinhduong','$loiich')";
    if($conn->query($query)){
        echo 1;
    }else echo -1;
?>