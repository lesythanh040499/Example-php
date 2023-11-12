<?php
    $img = $_POST['img'];
    $mhs = $_POST['mhs'];
    $hangsua = $_POST['hangsua'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $rate = $_POST['rate'];
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
   

    $query = "INSERT INTO thongtinhangsua values ('','$img','$mhs','$hangsua','$diachi','$sdt','$email','$rate')";
    if($conn->query($query)){
        echo 1;
    }else echo -1;
?>