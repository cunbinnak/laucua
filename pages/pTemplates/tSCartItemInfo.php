<form name="frmGioHang" action="index.php?c=102" method="post">
    <tr>
        <td><?php echo $STT; ?></td>
        <td class="text-left"><?php echo $tenSanPham; ?></td>
        <td align="center">
            <img class="img-responsive" src="images/sanpham/<?php echo $hinhURL; ?>" width="60">
        </td>
        <td><?php echo number_format($gia,0,",","."); ?> đ </td>
        <td>
            <input type="number" min="0" max="20" size="15" require name="txtSoLuong" value="<?php echo $soLuong; ?>" width="45" size="5" />
            <input type="hidden" name="hdMaSanPham" value="<?php echo $id; ?>" />
        </td>
        <td>
            <input type="submit" value="Cập nhật số lượng" />
        </td>
    </tr>
</form>