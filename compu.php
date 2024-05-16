<?php  
session_start();
if(isset($_GET['calc'])) {
	$rice = 10;
	$rpares = 70;
	$cpares = 100;
  	$order = $_GET['hm'];
	$money = $_GET['cash'];

	switch ($_GET['order']) {
		case 'kanin':
			$item_price = $rice;
			break;
		case 'Regular_Pares':
			$item_price = $rpares;
			break;
		case 'Combo_Pares':
			$item_price = $cpares;
			break;
		default:
			break;
	}
	// Create a variable to store the sum.
	$total_price = $item_price * $order;

	// Calculate change.
	$change = $money - $total_price;

	// Print the result
	echo "Total : " . $total_price . "php <br>";
	echo "Change : " . $change . "php <br>";
	echo "Thank You For Ordering. <br>";
	echo "Have A Good Day " . $_SESSION['username'] . "!";
}
?>
