<?php
if(!isset($_POST['votes'])) {
	header('HTTP', true, 400);
	die();
}

//Check authentication
$authed = 1;
if($authed === 0) {
	header('HTTP', true, 403);
	die();
}

echo json_encode(array(
	'success' => true,
	'votes' => ($_POST['votes'] + 1)
));
?>