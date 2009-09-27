<?php

$topics = array(
	'test-idea' => array(
		'title' => 'Test Idea',
		'votes' => 0
	)
);
?>
<!doctype html>
<html>
<head>
	<style>
	.topic {
		background: #eee;
		margin-bottom: 2em;
		clear: both;
		overflow: auto;
	}
	.title {
		float: left;
	}
	.votes {
		font-size: 20px;
		float: right;
	}
	</style>
</head>
<body>
<?php
foreach($topics as $topic) {
?>
<div class="topic">
	<h2 class="title"><?php echo $topic['title'] ?></h2>
	<p class="votes"><?php echo $topic['votes'] ?></p>
</div>
<?php
}
?>
</body>
</html>