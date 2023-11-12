<?php
    $img = $_POST['img'];
    $hs = $_POST['hs'];
    $loaisua = $_POST['loaisua'];
    $kl = $_POST['kl'];
    $gia = $_POST['gia'];
    $tensua = $_POST['tensua'];
    $id = $_POST['id'];
    $dinhduong = $_POST['dinhduong'];
    $loiich = $_POST['loiich'];
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    if($img === ""){
        $query = "UPDATE thongtinloaisua SET hangls = '$hs', tenls = '$tensua', trongluong = '$kl' , gia = '$gia', loaisua = '$loaisua', dinhduong = '$dinhduong', loiich = '$loiich' where id = '$id'";
    }else $query = "UPDATE thongtinloaisua SET img = '$img', hangls = '$hs', tenls = '$tensua', trongluong = '$kl' , gia = '$gia', loaisua = '$loaisua', dinhduong = '$dinhduong', loiich = '$loiich' where id = '$id'";
    if($conn->query($query)){
        echo 1;
    }else echo -1;
?>