<?php
    if(isset($_GET['id']) == null){
        // header("location:index.php?c=404");
        DataProvider::ChangeURL("index.php?c=404");
    } else {
        $id = $_GET["id"];
        
        $gioHang = unserialize($_SESSION["SCart"]);
        $gioHang->Them($id);
        $_SESSION["SCart"] = serialize($gioHang);
        
        DataProvider::ChangeURL("index.php?c=4");
    }
?>