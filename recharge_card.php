<?php
$card = array();
$items = [0,1,2,3,4,5,6,7,8,9,3,1,2,5,3,6,5];
$count = 0;

echo '<h3>MTN card generator</h3>';
while ($count < 210) {
	$k = '';
	$k = array_rand($items, 12);
	shuffle($k);
	$k = implode('', $k);
	$k = substr($k, 0, 12);

	if (!in_array($k, $card)) {
		$card[++$count] = $k;
		$k = str_split($k, 4);
		$k = implode('-', $k);
		echo $count . ' => '.$k . '<br><br>';
	}
}
?>