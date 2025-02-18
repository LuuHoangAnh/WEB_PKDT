<?php 
require_once('../utils/utility.php');

if (!empty($_POST)){
	$action = getPost('action');
	$id = getPost('id');
	$num = getPost('num');

	$cart = [];
	if (isset($_COOKIE['cart'])){
		$json = $_COOKIE['cart'];
		$cart = json_decode($json, true);
	}

	switch ($action) {
		case 'add':
			$isFind = false;

			for ($i=0; $i < count($cart); $i++) { 	//neu da ton tai san pham
				if ($cart[$i]['id'] == $id)
				{
					$cart[$i]['num'] += $num;
					$isFind = true;
					break;
				}
			}

			if (!$isFind){		//neu san pham chua co
				$cart[] = [
					'id' => $id,
					'num' => $num
				];
			}
			setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');		//thoi gian ton tai
			break;
		case 'delete':
			for ($i=0; $i < count($cart); $i++) { 	//neu da ton tai san pham
				if ($cart[$i]['id'] == $id)
				{
					array_splice($cart, $i, 1);	//xoa mang cart tai vi tri i di 1 phan tu
					break;
				}
			}
			setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');		//thoi gian ton tai
			break;
	}
}
?>