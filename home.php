<?php
$roll = $_GET["roll"];
if (((int)(($roll)/1000))%100 == 21) {
	header('Location: http://first.loadbalance.local');
	exit;
} elseif (((int)(($roll)/1000))%100 == 20) {
	header('Location: http://second.loadbalance.local');
	exit;
} elseif (((int)(($roll)/1000))%100 == 19) {
	header('Location: http://third.loadbalance.local');
	exit;
} elseif (((int)(($roll)/1000))%100 == 18) {
	header('Location: http://fourth.loadbalance.local');
	exit;
}
?>
