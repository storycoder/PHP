<?php
	$bank_balance = 10000;
	if ($bank_balance < 100) {
		$money = 1000;
		$bank_balance += $money;
		echo "Your balance is $ {$bank_balance}.";
	}

	else {
		$savings =+ 50;
		$bank_balance -= 50;
		echo "Your balance is $ {$bank_balance}.";
	}
?>