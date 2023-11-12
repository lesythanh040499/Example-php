<?php
    $nametb = $_POST['nametb'];
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $query = "DELETE FROM $nametb WHERE id = '$id' ";
    if($conn->query($query)){
        echo "1";
    }else echo "0";

?>