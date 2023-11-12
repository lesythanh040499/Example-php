<?php
     echo "
     <table>
         <tr>
            <th colspan = 2>Thêm Hãng Sữa</th>
         </tr>
         <tr>
             <td>LinkIMG</td>
             <td><input type='file' id='img' ></td>
         </tr>
         <tr>
             <td>Mã HS</td>
             <td><input type='text' id='mhs' ></td>
         </tr>
         <tr>
             <td>Tên hãng sữa</td>
             <td><input type='text' id='hangsua'></td>
         </tr>
         <tr>
             <td>Địa chỉ</td>
             <td><input type='text' id='diachi'></td>
         </tr>
         <tr>
             <td>Số điện thoại</td>
             <td><input type='text' id='sdt'></td>
         </tr>
         <tr>
             <td>Email</td>
             <td><input type='email' id='email'></td>
         </tr>
         <tr>
         <td>Đánh giá</td>
         <td><input type='text' id='rate'></td>
     </tr>
         <tr>
             <td colspan = 2 class = 'actionn'>
                 <button onclick = 'funcThemdatahs()'>Thêm</button>
                 <button onclick = 'funcExit(`themhangsua`)'>Thoát</button>
             </td>
         </tr>
     </table>
     ";
?>