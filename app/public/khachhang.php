<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: ./login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    ?>
    <div class="container">
        <div class="left">
            <div class="admin">
            <i class="fa fa-user-circle" aria-hidden="true"></i> <a href=""><?php echo $_SESSION['name']?></a><a href="../xuli/out.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
            <div class="menu">
                <h2></h2>
                <ul>
                    <li><i class="fa fa-university" aria-hidden="true"></i><a href="./hangsua.php">Trang chủ</a></li>
                    <li class ="mn-hs" ><i class="fa fa-commenting" aria-hidden="true"></i><a href="hangsua.php">Hãng sửa</a></li>
                    <li class = "mn-ls"><i class="fa fa-commenting" aria-hidden="true"></i><a href="loaisua.php">Loại sữa</a></li>
                    <li class = "mn-kh active"><i class="fa fa-user" aria-hidden="true"></i><a href="khachhang.php">Thông tin khách hàng</a></li>
                    <li><i class="fa fa-cogs" aria-hidden="true"></i><a href="">Setting</a></li>
                </ul>
            </div>
            <div class="footerleft">
                <div class="icon">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="header">
                <div class="trai">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <input type="text" placeholder = "Search"><i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="phai">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </div>
            </div>
            <div class="conten-kh">
                <h2>Thông tin khách hàng</h2>
                <div class="khachhang">
                    
                </div>
                <div class="ttkh">
                    <table border = 1>
                        <tr>
                            <th>Mã KH</th>
                            <th>Tên KH</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th colspan = 2>Chức năng</th>
                        </tr>   
                    <?php
                        $query = "SELECT * from khachhang";
                        $rs = $conn -> query($query);
                        $tbname = "khachhang";
                        while($row = mysqli_fetch_array($rs)){
                    ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><i onclick = "funcXoa(`<?php echo $tbname; ?>`,`<?php echo $row[0]; ?>`)" class="fa fa-trash" aria-hidden="true"></i></td>
                            <td><i onclick = "funcSuakh(`<?php echo $row[0]; ?>`)" class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </table>
                </div>

            </div>
            <div class="footerright">
                
            </div>
        </div>
        <div style = "clear: both;"></div>
        <div class="footer">

        </div>
    </div>
</body>
<script src = "../js/handling.js">

</script>
</html>