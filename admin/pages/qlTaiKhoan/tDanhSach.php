<tr>
    <td  class="text-center"><?php echo $maNhanVien; ?></td>
    <td><?php echo $tenDangNhap; ?></td>
    <td><?php echo $hoTen; ?></td>
    <td><?php echo $soDienThoai; ?></td>
    <td><?php echo $email; ?></td>
    <td align="center">
        <?php 
            $hinhBiXoa = ($biXoa == 0) ? "active.png" : "lock.png";
            echo "<img src='img/$hinhBiXoa' />";
        ?>
    </td>
    <td align="center">
        <a href="index.php?c=2&a=101&id=<?php echo $maNhanVien; $hinhBiXoa = ($biXoa == 0) ? "lock.png" : "locked.png";?>">
            <img src="img/<?=$hinhBiXoa; ?>" />
        </a>
        <a href="index.php?c=2&a=102&id=<?php echo $maNhanVien; ?>">
            <img src="img/edit.png" />
        </a>
    </td>
</tr>