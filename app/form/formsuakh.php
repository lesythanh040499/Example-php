<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $id = $_POST['id'];
    $sql = "SELECT * from khachhang where id = '$id'";
    $rs = $conn->query($sql);
    $row = mysqli_fetch_array($rs);
    echo "
    <table>
        <tr>
            <th colspan = 2>Sửa TT Khách hàng</th>
        </tr>
        <tr>
            <td><label for=''>Mã KH </label></td>
            <td><input id = 'id' type='text' value = '$row[0]'></td>
        </tr>
        <tr>
            <td><label for=''>Tên KH </label></td>
            <td><input id = 'ten' type='text' value = '$row[1]'></td>
        </tr>
        <tr>
            <td><label for=''>Giới tính </label></td>
            <td><input id = 'gt' type='text' value = '$row[2]'></td>
        </tr>
        <tr>
            <td><label for=''>Địa chỉ</label></td>
            <td><input id = 'dc' type='text' value = '$row[3]'></td>
        </tr>
        <tr>
            <td><label for=''>SĐT </label></td>
            <td><input id = 'sdt' type='text' value = '$row[4]'></td>
        </tr>
        <tr>
            <td><label for=''>Email </label></td>
            <td><input id = 'em' type='text' value = '$row[5]'></td>
        </tr>
        <tr>
            <td colspan = 2><button onclick = 'funcSuakhdata(`$row[0]`)'>OK</button><button onclick = 'funcExit(`khachhang`)'>Exit</button></td>
        </tr>
    </table>

    
    ";
?>