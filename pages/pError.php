<?php
    $err_id = 1;
    if(isset($_GET["err_id"])){
        $err_id = $_GET["err_id"];
    }

    switch ($err_id){
        case 1:
            echo "<h2>Trang không tồn tại !!!</h2>";
            break;
        case 2:
            echo "<h2>Mã khách hàng không tồn tại. Vui lòng nhập lại hoặc tạo thông tin khách hàng mới.</h2>";
            break;
    }
?>