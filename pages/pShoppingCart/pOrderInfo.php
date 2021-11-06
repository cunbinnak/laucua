<div class="orderInfo container">
    <h1 class="text-center">Thông tin giao hàng</h1><br>
    <form class="form-horizontal" name="frmTaoThongTinKhachHang" action="index.php?c=103" method="post">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="txtHoTen">Họ và Tên</label>  
        <div class="col-md-4">
        <input id="txtHoTen" name="txtHoTen" type="text" placeholder="Họ và Tên" class="form-control input-md" required>
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="txtSoDienThoai">Số điện thoại</label>  
        <div class="col-md-4">
        <input id="txtSoDienThoai" name="txtSoDienThoai" type="number" placeholder="Số điện thoại" class="form-control input-md" required>
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="txtDiaChi">Địa chỉ</label>  
        <div class="col-md-4">
        <input id="txtDiaChi" name="txtDiaChi" type="text" placeholder="Địa chỉ" class="form-control input-md" required>
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Tạo thông tin và Đặt hàng</button>
        </div>
        </div>

        </fieldset>
    </form>
    <hr style="border-top: 1px solid #ccc;" /><br>
    <form class="form-horizontal" name="frmDatHangQuaMaKhachHang" action="index.php?c=104" method="post">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nhập mã khách hàng</label>  
        <div class="col-md-4">
        <input id="textinput" name="txtMaKhachHang" type="text" placeholder="Mã khách hàng" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Đặt hàng</button>
        </div>
        </div>

        </fieldset>
        </form>
</div>