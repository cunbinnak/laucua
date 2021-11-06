<div class="col-md-3 sidebar_box">
    <div class="sidebar">
        <div class="menu_box">
            <h3 class="menu_head">Danh mục</h3>
            <ul class="menu">
            <?php           
                $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham FROM loaisanpham WHERE BiXoa = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while($row = mysqli_fetch_array($result)){
                    ?>
                        <li class="item">
                            <a href="index.php?c=2&id=<?php echo $row['MaLoaiSanPham']; ?>">
                                <img class="arrow-img" src="images/f_menu.png" alt=""/><?php echo $row["TenLoaiSanPham"]; ?>
                            </a>
                        </li>
                    <?php
                }
            ?>
            </ul>
        </div>
    </div>    
</div>