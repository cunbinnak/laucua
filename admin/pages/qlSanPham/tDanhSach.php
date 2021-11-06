<tr>
    <td class="text-center"><?php echo $maSanPham; ?></td>
    <td><?php echo $tenSanPham; ?></td>
    <td align="center"><img src="../images/sanpham/<?php echo $hinhURL; ?>" class="img-responsive" width="100" /></td>
    <td><?php echo $tenLoaiSanPham; ?></td>
    <td><?php echo $gia; ?></td>
    <td><?php echo $soLuongTon; ?></td>
    <td><?php echo $soLuongBan; ?></td>
    <td><?php echo $soLuotXem; ?></td>
    <td style="max-width:400px;"><?php echo $gioiThieu; ?></td>

    <td align="center">
        <?php 
            if($biXoa == 0){
                echo "<img src='img/active.png' />";    
            } else {
                echo "<a href='index.php?c=4&a=402&id=$maSanPham'><img src='img/locked.png' /></a>";
            }
        ?>
    </td>
    <td align="center">
        <a href="index.php?c=4&a=3&id=<?php echo $maSanPham; ?>">
            <img src="img/edit.png" />
        </a>
        <a href="index.php?c=4&a=401&id=<?php echo $maSanPham; ?>">
            <img src="img/delete.png" />
        </a>
    </td>
</tr>