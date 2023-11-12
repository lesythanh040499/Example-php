<?php
    session_start();
    $conn = mysqli_connect("mysql","tutorial","secret","tutorial") or die("connect fail");
    // $conn = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    // $query = $pdo->query('SHOW VARIABLES like "version"');

    // $row = $query->fetch();

    // echo 'MySQL version:' . $row['Value'];
    
    $user = $_POST["user"];
    $password = $_POST["password"];
    $sql = "Select * from login where user = '$user' and password = '$password'";
    $rs = $conn->query($sql);
    // //$row = mysqli_fetch_assoc($rs);

    // //if(mysqli_num_rows($rs) != 0){
    //     $row = mysqli_fetch_array($rs);
    //     $_SESSION['name'] = $row[1];
    //     $_SESSION['user'] = $row[0];
    //     if($row[0] == $user && $row[2] == $password){
    //         header("Location: ../public/hangsua.php");
    //     }else
    //         header("Location: ../public/login.php");
  
?>