<div class="col-md-6 top_grid1-box1">
    <div class="grid_1 text-center">
        <a href="index.php?c=3&id=<?= $MaSanPham; ?>">
            <div class="b-link-stroke b-animate-go  thickbox">
            <img src="images/sanpham/<?php echo $HinhURL; ?>" class="img-responsive" alt=""/> </div>
            <div class="grid_2">
            <p class="top_grid1-box1-pdName"><?php echo $TenSanPham; ?></p>
            <p><?php echo $GioiThieu; ?></p>
        </a>
        <ul class="grid_2-bottom">
            <a href="index.php?c=3&id=<?= $MaSanPham; ?>">
                <li class="grid_2-left">                
                    Giá: <?php echo number_format($Gia,0,",","."); ?> đ/Kg</p>
                </li>
            </a>
            <li class="grid_2-right">
                <a href="index.php?c=105&id=<?= $MaSanPham; ?>">
                    <div class="btn btn-success btn-normal btn-inline " target="_self" title="Get It">Mua</div>
                </a>
            </li>
            <div class="clearfix"> </div>
        </ul>
        </div>
    </div>
</div>