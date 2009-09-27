<?php
include('config.php');

if(!isset($_POST['id'])) {
	header('HTTP', true, 400);
	die();
}

//Check authentication
$authed = 1;
if($authed === 0) {
	header('HTTP', true, 403);
	die();
}

if(!isset($topics[$_POST['id']])) {
	header('HTTP', true, 404);
	die();
}

$topic = $topics[$_POST['id']];

echo json_encode(array(
	'success' => true,
	'votes' => ($topic['votes'] + 1)
));
?>