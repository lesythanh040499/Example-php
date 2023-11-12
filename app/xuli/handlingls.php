<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $start = $_POST['index']*5 - 5;
    $end = 5;
    $tbname = "thongtinloaisua";
    $empSQL = "SELECT * FROM thongtinloaisua LIMIT $start,$end";
    $empResult = mysqli_query($conn, $empSQL);
    while($emp = mysqli_fetch_array($empResult)){
        echo "
        <table>
            <tr class = 'rows'>
                <td id = 'row-l' rowspan='3'><img onclick = 'funcAbout(`$emp[0]`)' src= '../image/$emp[1] '></td>
                <td class = 'khac'><strong>Hãng Sữa</strong> : $emp[2]</td>
                <td ><button class = 'bt' onclick = 'funcSuals(`$emp[0]`)'>Sửa</button></td>
            </tr>
            <tr class ='rows'>
                <td class = 'khac'><strong>Tên Sữa</strong> : $emp[3]</td>
                <td><button class = 'bt'  onclick = 'funcXoa(`$tbname`,`$emp[0]`)'>Xóa</button></td>
            </tr>
            <tr class ='rows'>
                <td class = 'khac'>$emp[6] - $emp[4] g - <strong>Giá</strong> : $emp[5] VND</td>
                <td><button class = 'bt'  onclick = 'funcThemls()'>Thêm</button></td>
            </tr>
            
        </table>
        ";
    }
?>