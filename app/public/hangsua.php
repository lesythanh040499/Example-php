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
        $sql = "select * from thongtinhangsua";
        $sql1 = "select * from thongtinsua";
        $result = mysqli_query($conn,$sql);
        $result1 = mysqli_query($conn,$sql1);
        
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
                    <li class ="mn-hs active" ><i class="fa fa-commenting" aria-hidden="true"></i><a href="hangsua.php">Hãng sửa</a></li>
                    <li class = "mn-ls"><i class="fa fa-commenting" aria-hidden="true"></i><a href="loaisua.php">Loại sữa</a></li>
                    <li class = "mn-kh"><i class="fa fa-user" aria-hidden="true"></i><a href="khachhang.php">Thông tin khách hàng</a></li>
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
            <div class="conten-hs">
                <div class="themhangsua"></div>
             <h2>Thông tin hãng sữa</h2>
             
                <div class="tths">
                    <?php
                    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
                    $index = 1;
                    $tbname = "thongtinhangsua";
                    $empSQL = "SELECT * FROM thongtinhangsua LIMIT 0,3";
                    $empResult = mysqli_query($conn, $empSQL);
                    while($emp = mysqli_fetch_array($empResult)){
                    ?>
                        <table>
                            <tr class = 'rows'>
                                <td id = 'row-l' rowspan='6'><img src= <?php echo "../image/".$emp[1]; ?> ></td>
                                <td><strong>Mã Hãng Sữa</strong> : <?php echo $emp[2]; ?></td>
                                <td rowspan='2'><button class = 'bt' onclick = 'funcSuahs(<?php echo $emp[0]; ?>)'>Sửa</button></td>
                            </tr>
                            <tr class ='rows'>
                                <td><strong>Tên Hãng Sữa</strong> : <?php echo $emp[3]; ?></td>
                            </tr>
                            <tr class ='rows'>
                                <td><strong>Địa Chỉ</strong> :  <?php echo $emp[4]; ?></td>
                                <td rowspan='2'><button class = 'bt'  onclick = 'funcXoa(`<?php echo $tbname; ?>`,`<?php echo $emp[0]; ?>`)'>Xóa</button></td>
                            </tr>
                            <tr class ='rows'>
                                <td><strong>Số Điện Thoại</strong> : <?php echo $emp[5]; ?></td>
                            </tr>
                            <tr class ='rows'>
                                <td><strong>Email</strong> :<a href = <?php echo $emp[6]; ?>><?php echo $emp[6]; ?></a></td>
                                <td rowspan='2'><button class = 'bt' onclick = 'funcThem()' >Thêm</button></td>
                            </tr >
                            <tr class ='rows'>
                                <td><strong>Đánh giá </strong>: <?php echo $emp[7];  ?> <i class="fa fa-star" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                     <?php
                     }
                     ?>  
                </div>
                <div class = "page">
                <ul>
                    <li onclick = "loadPagehs(1)"  id = "fist"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> </li>
                    <li onclick = "loadPrevhs()" id = "prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </li>
                   
                    <?php
                        $query = "SELECT * FROM thongtinhangsua";
                        $count = mysqli_num_rows($conn->query($query));
                        $len = ceil($count/3);
                        $size = $len;
                        while($len-- > 0){
                    ?>
                        <li onclick ="loadPagehs(<?php echo $index; ?>)"   >
                            <?php echo $index++; ?>
                        </li>
                    <?php
                        }
                        
                    ?>
                        <li onclick = "loadNexths(<?php echo $size; ?>)" id = "next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </li>
                        <li onclick = "loadPagehs(<?php echo $size; ?>)" id="end"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                    </ul>
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