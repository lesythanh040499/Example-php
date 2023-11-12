<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $id = $_POST['id'];
    $empSQL = "SELECT * FROM thongtinhangsua where id = '$id'";
    $res = $conn -> query($empSQL);
    $row = mysqli_fetch_array($res);
        echo "
        <table>
            <tr>
                <th colspan = 2 >Sửa hãng sữa</th>
                
            </tr>
            <tr>
                <td>LinkIMG</td>
                <td><input type='file' id='img'></td>
            </tr>
            <tr>
                <td>Mã HS</td>
                <td><input type='text' id='mhs' value = '$row[2]'></td>
            </tr>
            <tr>
                <td>Tên hãng sữa</td>
                <td><input type='text' id='hangsua' value = '$row[3]'></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type='text' id='diachi' value = '$row[4]'></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type='text' id='sdt' value = '$row[5]'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type='email' id='email' value = '$row[6]'></td>
            </tr>
            <tr>
                <td>Đánh giá</td>
                <td><input type='text' id='rate' value = '$row[7]'></td>
            </tr>
            <tr>
                <td colspan = 2 class = 'actionn'>
                    <button onclick = 'funcSuahsdata(`$row[0]`)'>Sửa</button>
                    <button onclick = 'funcExit(`themhangsua`)'>Thoát</button>
                </td>
            </tr>
        </table>
   
        ";
?>