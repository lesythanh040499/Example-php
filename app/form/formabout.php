<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $id = $_POST['id'];
    $query = "SELECT * from thongtinloaisua where id = '$id'";
    $row = mysqli_fetch_array($conn->query($query));
    echo "
    <table>
        <tr>
            <th colspan = 2>$row[3]</th>
        </tr>
        <tr>
            <td rowspan = 5><img src='../image/$row[1]' alt=''> </td>
            <td><i><strong>Thành phần dinh dưỡng : </strong></i></td>
        </tr>
        <tr>
            <td><textarea name='' id='' cols='100' rows='5'>$row[7]</textarea></td>
        </tr>
        <tr>
            <td><i><strong>Lợi ích : </strong></i></td>
        </tr>
        <tr>
            <td>
                <textarea name='' id='' cols='100' rows='5'>$row[8]</textarea>
            </td>
        </tr>
        <tr class = 'mg-r'>
            <td><strong><i>Trọng lượng : </i></strong> $row[4] gr - <strong><i>Đơn giá : </i></strong> $row[5] VND </td>
        </tr>
        <tr class = 'mg-m'>
            <td><button onclick = 'funcExit(`about`)'>Quay lại</button></td>
        </tr>
    </table>
    
    ";

?>