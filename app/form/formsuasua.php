<?php
    $conn = mysqli_connect("localhost","root","","qlsua") or die("connect fail");
    $id = $_POST['id'];
    $query = "SELECT * from thongtinloaisua where id = '$id'";
    $row = mysqli_fetch_array($conn->query($query));
     echo "
     <table>
         <tr>
            <th colspan = 2>Sửa TT Sữa</th>
         </tr>
         <tr>
             <td>LinkIMG </td>
             <td><input type='file' id='img' value = '$row[1]'></td>
         </tr>
         <tr>
             <td>Hãng sữa </td>
             <td><input type='text' id='hs' value = '$row[2]'></td>
         </tr>
         <tr>
             <td>Tên sữa </td>
             <td><input type='text' id='tensua' value = '$row[3]'></td>
         </tr>
         <tr>
             <td>Loại sữa </td>
             <td><input type='text' id='loaisua' value = '$row[6]'></td>
         </tr>
         <tr>
             <td>Khối lượng </td>
             <td><input type='text' id='kl' value = '$row[4]'></td>
         </tr>
         <tr>
             <td>Giá</td>
             <td><input type='email' id='gia' value = '$row[5]'></td>
         </tr>
         <tr>
         <td>Dinh dưỡng</td>
            <td><textarea name='dinhduong' id='dinhduong' cols='30' rows='10'>$row[7]</textarea></td>
        </tr>
        <tr>
            <td>Lợi ích</td>
            <td><textarea name='loiich' id='loiich' cols='30' rows='10'>$row[8]</textarea></td>
        </tr>
     </tr>
         <tr>
             <td colspan = 2 class = 'actionn'>
                 <button onclick = 'funcSualsdata(`$row[0]`)'>Sửa</button>
                 <button onclick = 'funcExit(`loaisua`)'>Thoát</button>
             </td>
         </tr>
     </table>
     ";
?>