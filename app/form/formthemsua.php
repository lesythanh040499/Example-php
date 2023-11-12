<?php
     echo "
     <table>
         <tr>
            <th colspan = 2>Thêm Sữa</th>
         </tr>
         <tr>
             <td>LinkIMG </td>
             <td><input type='file' id='img'></td>
         </tr>
         <tr>
             <td>Hãng sữa </td>
             <td><input type='text' id='hs'></td>
         </tr>
         <tr>
             <td>Tên sữa </td>
             <td><input type='text' id='tensua'></td>
         </tr>
         <tr>
             <td>Loại sữa </td>
             <td><input type='text' id='loaisua'></td>
         </tr>
         <tr>
             <td>Khối lượng </td>
             <td><input type='text' id='kl'></td>
         </tr>
         <tr>
             <td>Giá</td>
             <td><input type='email' id='gia'></td>
         </tr>
         <tr>
             <td>Dinh dưỡng</td>
             <td><textarea name='dinhduong' id='dinhduong' cols='30' rows='10'></textarea></td>
         </tr>
         <tr>
             <td>Lợi ích</td>
             <td><textarea name='loiich' id='loiich' cols='30' rows='10'></textarea></td>
         </tr>
     </tr>
         <tr>
             <td colspan = 2 class = 'actionn'>
                 <button onclick = 'funcThemdatals()'>Thêm</button>
                 <button onclick = 'funcExit(`loaisua`)'>Thoát</button>
             </td>
         </tr>
     </table>
     ";
?>