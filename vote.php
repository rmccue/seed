<?php
$rand = rand(0, 1);
if($rand === 0) {
	header('HTTP', true, 403);
	die();
}

echo json_encode(array(
	'success' => true,
	'votes' => ($_POST['votes'] + 1)
));
?>