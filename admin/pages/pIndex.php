<?php
    $sql = "SELECT COUNT(MaNhanVien) FROM nhanvien WHERE BiXoa = 0";
    $result = DataProvider::ExecuteQuery($sql);
    $row  = mysqli_fetch_array($result);
    $soNhanVien = $row[0];
    $sql = "SELECT COUNT(MaDonDatHang) FROM dondathang WHERE MaTinhTrangDonDatHang = 1";
    $result = DataProvider::ExecuteQuery($sql);
    $row  = mysqli_fetch_array($result);
    $soDonHangMoi = $row[0];
    $sql = "SELECT COUNT(MaDonDatHang) FROM dondathang WHERE MaTinhTrangDonDatHang = 2";
    $result = DataProvider::ExecuteQuery($sql);
    $row  = mysqli_fetch_array($result);
    $soDonHangDangXuLy = $row[0];
?>
<h1 class="text-center">Hệ thống quản lý Hải sản Tươi sống</h1>
<h2  class="text-center">Tổng kết Chung</h2>
<div class="container">
    <div style="width:300px; margin: auto;">
        <p>Số nhân viên đang làm: <?=$soNhanVien;?></p>
        <p>Số đơn hàng mới: <?=$soDonHangMoi;?></p>
        <p>Số đơn hàng đang xử lý: <?=$soDonHangDangXuLy;?></p>
    </div>
</div>
