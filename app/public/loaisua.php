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
        $index = 1;
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
                    <li class = "mn-ls active"><i class="fa fa-commenting" aria-hidden="true"></i><a href="loaisua.php">Loại sữa</a></li>
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
            <div class="conten-ls">
                <div class="loaisua"></div>
                <div class="about">
                </div>
                <h2>Thông tin Sữa</h2>
                <div class="ttls">
                    <?php
                        $query = "SELECT * from thongtinloaisua limit 0,5";
                        $rs = $conn->query($query);
                        $tbname = "loaisua";
                        while($emp = mysqli_fetch_array($rs)){
                    ?>
                        <table>
                                <tr class = 'rows'>
                                    <td id = 'row-l' rowspan='3'><img onclick = 'funcAbout(`<?php echo $emp[0]; ?>`)' src= <?php echo "../image/".$emp[1]; ?> ></td>
                                    <td class = "khac"><strong>Hãng Sữa</strong> : <?php echo $emp[2]; ?></td>
                                    <td ><button class = 'bt' onclick = 'funcSuals(<?php echo $emp[0]; ?>)'>Sửa</button></td>
                                </tr>
                                <tr class ='rows'>
                                    <td class = "khac"><strong>Tên Sữa</strong> : <?php echo $emp[3]; ?></td>
                                    <td><button class = 'bt'  onclick = 'funcXoa(`<?php echo $tbname; ?>`,`<?php echo $emp[0]; ?>`)'>Xóa</button></td>
                                </tr>
                                <tr class ='rows'>
                                    <td class = "khac"><?php echo $emp[6]; ?> - <?php echo $emp[4]; ?> g - <strong>Giá</strong> : <?php echo $emp[5]; ?> VND</td>
                                    <td><button class = 'bt'  onclick = 'funcThemls()'>Thêm</button></td>
                                </tr>
                                
                            </table>
                    <?php
                        }
                    ?>

                </div>
                <div class = "page-ls">
                <ul>
                    <li onclick = "loadPagels(1)"  id = "fist"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> </li>
                    <li onclick = "loadPrevls()" id = "prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </li>
                    <?php
                        $query = "SELECT * FROM thongtinloaisua";
                        $count = mysqli_num_rows($conn->query($query));
                        $len = ceil($count/5);
                        $size = $len;
                        while($len-- > 0){
                    ?>
                        <li onclick ="loadPagels(<?php echo $index; ?>)"   >
                            <?php echo $index++; ?>
                        </li>
                    <?php
                        }
                        
                    ?>
                     <li onclick = "loadNextls(<?php echo $size; ?>)" id = "next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </li>
                     <li onclick = "loadPagels(<?php echo $size; ?>)" id="end"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                    </ul>
                </div>
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