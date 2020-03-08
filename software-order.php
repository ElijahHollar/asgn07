<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>
	<h1>Software Order</h1>
<?php

	// your code here

	include_once("inc-order-object.php");

	$cost = $_POST["cost"];
	$items = $_POST["items"];

	$order = new Order();
	
	$order->setItemCost($cost);
	$order->setNumItems($items);

	$subTotal = $order->getSubTotal();
	$tax = $order->getSalesTax();
	$shippingHandling = $order->getShippingHandling();
	$total = $order->getTotal();

	// you can change the variables in the table if you need to use different names

	// right justify values
	print("	<table>
			<tr><td>Sub-Total:</td><td>$".number_format($subTotal, 2)."</td></tr>
			<tr><td>Tax:</td><td>$".number_format($tax, 2)."</td></tr>
			<tr><td>Shipping and Handling:</td><td>$".number_format($shippingHandling, 2)."</td></tr>
			<tr><td>TOTAL:</td><td>$".number_format($total, 2)."</td></tr>
			</table>");
?>
</body>
</html>