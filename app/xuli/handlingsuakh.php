<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $id = $_POST['id'];
    $oid = $_POST['oid'];
    $ten = $_POST['ten'];
    $gt = $_POST['gt'];
    $dc = $_POST['dc'];
    $sdt = $_POST['sdt'];
    $em = $_POST['em'];
    $sql = "UPDATE khachhang set id = '$id', tenkh = '$ten', gioitinh = '$gt', diachi ='$dc', sdt = '$sdt', email = '$em' where id ='$oid'";
    if($conn->query($sql)){
        echo 1;
    }else echo -1;
?>