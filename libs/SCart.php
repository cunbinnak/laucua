<?php
    class SanPham {
        var $MaSanPham;
        var $SoLuong;
    }

    class SCart{
        var $arrSanPham;

        public function __construct(){
            $this->arrSanPham = [];
        }

        public function Them($id){
            //Kiểm tra giỏ hàng có sản phẩm chưa?
            if(count($this->arrSanPham) == 0){
                //Trường hợp 1: giỏ hàng đang rỗng
                $sanPham = new SanPham();
                $sanPham->MaSanPham = $id;
                $sanPham->SoLuong = 1;

                $this->arrSanPham[] = $sanPham;
            } else {
                //Trường họp 2: giỏ hàng đang có sản phẩm
                for($i = 0; $i < count($this->arrSanPham); $i++){
                    if($this->arrSanPham[$i]->MaSanPham === $id){
                        //Sản phẩm thêm vào đã có trong giỏ hàng --> Xử tăng số lượng
                        $this->arrSanPham[$i]->SoLuong++;
                        break;
                    }
                }
                
                //Trường hợp giỏ hàng chưa có sản phẩm nào có cùng mã ID của sản phẩm đưa vào
                if($i >= count($this->arrSanPham)){
                    $sanPham = new SanPham();
                    $sanPham->MaSanPham = $id;
                    $sanPham->SoLuong = 1;

                    $this->arrSanPham[] = $sanPham;
                }
            }
        }

        public function CapNhat($id, $soLuong){
            $SoSanPham = count($this->arrSanPham);
            for($i = 0; $i < $SoSanPham; $i++){
                if($this->arrSanPham[$i]->MaSanPham == $id){
                    if($soLuong == 0){
                        $this->Xoa($id);
                    } else {
                        $this->arrSanPham[$i]->SoLuong = $soLuong;
                    }
                    break;
                }
            }
        }

        public function Xoa($id){
            $SoSanPham = count($this->arrSanPham);
            for($i = 0; $i < $SoSanPham; $i++){
                if($this->arrSanPham[$i]->MaSanPham == $id){
                    array_splice($this->arrSanPham, $i, 1);
                    break;
                }
            }
        }
    }
?>