<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $start = $_POST['index']*3 - 3;
    $end = 3;
    $tbname = "thongtinhangsua";
    $empSQL = "SELECT * FROM thongtinhangsua LIMIT $start,$end";
    $empResult = mysqli_query($conn, $empSQL);
    while($emp = mysqli_fetch_array($empResult)){
        echo "
        <table>
        <tr class = 'rows'>
            <td id = 'row-l' rowspan='6'><img src='../image/".$emp[1]."' ></td>
            <td><strong>Mã Hãng Sữa</strong> : $emp[2]</td>
            <td rowspan='2'><button class = 'bt' onclick = 'funcSuahs($emp[0])'>Sửa</button></td>
        </tr>
        <tr class ='rows'>
            <td><strong>Tên Hãng Sữa</strong> : $emp[3]</td>
        </tr>
        <tr class ='rows'>
            <td><strong>Địa Chỉ</strong> :  $emp[4]</td>
            <td rowspan='2'><button class = 'bt'  onclick = 'funcXoa(`".$tbname."`, ".$emp[0].")' >Xóa</button></td>
        </tr>
        <tr class ='rows'>
            <td><strong>Số Điện Thoại</strong> :  $emp[5]</td>
        </tr>
        <tr class ='rows'>
            <td><strong>Email</strong> :<a href =  $emp[6]>$emp[6]</a></td>
            <td rowspan='2'><button class = 'bt' onclick = 'funcThem()' >Thêm</button></td>
        </tr >
        <tr class ='rows'>
            <td><strong>Đánh giá </strong>: $emp[7] sao</td>
        </tr>
    </table>";
    }
?>