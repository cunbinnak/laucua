<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logoap.jpg" alt=""/></a>
			</div>
			<ul class="shopping_grid">
			      
			    <a href="index.php?c=4"><li>
				  	<span class="m_1">Giỏ Hàng</span>&nbsp;&nbsp;(<?php
								$gioHang = unserialize($_SESSION["SCart"]);
								echo count($gioHang->arrSanPham);
								?>) &nbsp;<img src="images/bag.png" alt=""/>
				</li></a>
			      <div class="clearfix"> </div>
			</ul>
		    <div class="clearfix"> </div>
		</div>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
		<div class="container">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li><a href="index.php" data-hover="Home">Trang chủ</a></li>
					<li><a href="index.php?c=7" data-hover="About Us">Shop</a></li>
					<li><a href="index.php?c=8" data-hover="Careers">Liên hệ</a></li>
					<li><a href="index.php?c=8" data-hover="Careers">Mục Khác</a></li>							
				 </ul>
				 <script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->
     </div>
</div>