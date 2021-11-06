<?php
    $a = 1;
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include("modules/mDangNhap/mLogin.php");
            break;
        case 2:
            include("modules/mDangNhap/exLogin.php");
            break;
        case 3:
            include("modules/mDangNhap/exLogout.php");
            break;
        default:
            DataProvider::ChangeURL("index.php?c=404");
    }
?>