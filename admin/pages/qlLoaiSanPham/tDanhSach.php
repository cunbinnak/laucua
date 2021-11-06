<tr>
    <td class="text-center"><?php echo $maLoaiSanPham; ?></td>
    <td><?php echo $tenLoaiSanPham; ?></td>
    <td align="center">
        <?php 
            if($biXoa == 0){
                echo "<img src='img/active.png' />";    
            } else {
                echo "<a href='index.php?c=3&a=402&id=$maLoaiSanPham'><img src='img/lock.png' /></a>";
            }
        ?>
    </td>
    <td class="text-center">
        <a href="index.php?c=3&a=3&id=<?php echo $maLoaiSanPham; ?>">
            <img src="img/edit.png" />
        </a>
        <a href="index.php?c=3&a=401&id=<?php echo $maLoaiSanPham; ?>">
            <img src="img/delete.png" />
        </a>
    </td>
</tr>