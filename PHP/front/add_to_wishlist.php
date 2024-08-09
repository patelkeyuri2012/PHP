<?php
class wishlist{
	function addProduct($pid,$qty){
		$_SESSION['wishlist'][$pid]['qty']=$qty;
	}
	
	function updateProduct($pid,$qty){
		if(isset($_SESSION['wishlist'][$pid])){
			$_SESSION['wishlist'][$pid]['qty']=$qty;
		}
	}
	
	function removeProduct($pid){
		if(isset($_SESSION['wishlist'][$pid])){
			unset($_SESSION['wishlist'][$pid]);
		}
	}
	
	function emptyProduct(){
		unset($_SESSION['wishlist']);
	}
	

}
?>

