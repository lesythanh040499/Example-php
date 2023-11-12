<?php
    $id = $_POST['id'];
    $img = $_POST['img'];
    $mhs = $_POST['mhs'];
    $hangsua = $_POST['hangsua'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $rate = $_POST['rate'];
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    if($img === ""){
        $query = "UPDATE thongtinhangsua set mahs = '$mhs', tenhs = '$hangsua', diachi = '$diachi', dienthoai = '$sdt', email = '$email', danhgia = '$rate' where id = '$id'";
    }else $query = "UPDATE thongtinhangsua set icon = '$img', mahs = '$mhs', tenhs = '$hangsua', diachi = '$diachi', dienthoai = '$sdt', email = '$email', danhgia = '$rate' where id = '$id'";
     if($conn->query($query)){
        echo 1;
    }else echo -1;
?>