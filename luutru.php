<!-- Luu tru index.php bên admin  -->
<!-- <?php
        while($row = mysqli_fetch_array($querry1 , MYSQLI_ASSOC)){
            $id = $row['id'];
            $hinhanh = $row['hinhanh'];
            $mota = $row['mota'];
            $gia = $row['gia'];
        ?>
        <tr>
            <td><?php echo $id ?></td>
            <td>
                <img src="<?php echo $hinhanh ?>" alt="<?php echo $mota ?>" class="ImgTd"></td>
            <td class="firsttdintable2"><?php echo $mota ?></td>
            <td class="secondtdintable2"><?php echo $gia , "đ"?></td>
            <td class="btn-primary2"><a href="SP/sua.php?id=<?php echo $id ;?>" class="btn-primary">Sua</a></td>
            <td><a href="SP/xoa.php?id=<?php echo $id ;?>" class="btn-secondary">Xoa</a></td>
        </tr> 
        <?php }
        mysqli_close($con);
        ?>

    </table>
    <button type="sumbit" onclick="hienthiSP();" id="btn" name="btn" class="ThemMoiButton1"> Thêm Mới</button>
    <script>
        function hienthiAdmin(){
            location.replace("admin/them.php");
        }
        function hienthiSP(){
            location.replace("SP/them.php");
        }
        if (self == top) {
        // Everything checks out, show the page.
       document.documentElement.style.display = 'block';
       } else {
       // Break out of the frame.
       top.location = self.location;
       }
    </script> -->
