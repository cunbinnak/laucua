<div class="col-md-9 content_right">
<div class="container-fluid">
	<br>
	<?php
			$c = 1;

			if(isset($_GET['c'])){
					$c = $_GET['c'];
			}

			switch($c){
					case 1:
							include("pages/pHome.php");
							break;
					case 2:
							include("pages/pTypeProducts.php");
							break;
					case 3: 
							include("pages/pProductFullDetail.php");
							break;
					case 4:
						include("pages/pShoppingCart/pCartManage.php");
						break;
					case 5: 
						include("pages/pShoppingCart/pOrderInfo.php");
						break;
					case 6:
						//Thông báo đã tạo thành công đơn đặt hàng
						include("pages/pShoppingCart/pOrderSuccess.php");
						break;
					case 7:
						//Trang gioi thieu
						include("pages/pIntro.php");
						break;
					case 8:
						//Trang lien lac
						include("pages/pContact.php");
						break;
					case 101:
						//Xử lý thêm sản phẩm vào giỏ hàng
						include("pages/pShoppingCart/exAddProduct2Cart.php");
						break;
					case 102:
						//Xử lý cập nhật số lượng sản phẩm trong giỏ hàng
						include("pages/pShoppingCart/exUpdateProductQuantity.php");
						break;
					case 103: 
						//Xử lý tạo thông tin khách hàng và đặt hàng
						include("pages/pShoppingCart/exCreateBuyerInfo.php");
						break;
					case 104:
						//Xử lý đặt hàng cho Mã khách hàng đã tạo
						include("pages/pShoppingCart/exOrder.php");
						break;					
					case 105:
						//Xử lý thêm sản phẩm vào giỏ hàng
						include("pages/pShoppingCart/exAddProduct2CartInShortInfo.php");
						break;
					default:
							include("pages/pError.php");
			}
	?>
</div>
</div>