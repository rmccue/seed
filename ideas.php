<?php

$topics = array(
	'test-idea' => array(
		'title' => 'Test Idea',
		'votes' => 1
	),
	'test-idea2' => array(
		'title' => 'Test Idea 2',
		'votes' => 2
	),
	'test-idea3' => array(
		'title' => 'Test Idea 3',
		'votes' => 3
	),
);
?>
<!doctype html>
<html>
<head>
	<title>Ideas</title>
	<style>
	@import url("reset.css");
	
	.topic {
		background: #eee;
		padding: 20px;
		margin-bottom: 2em;
		clear: both;
		overflow: auto;
	}
	.title {
		float: left;
		font-size: 30px;
		margin: 10px 0;
	}
	.votes {
		font-size: 40px;
		float: right;
		margin: 5px 20px 0;
	}
	</style>
</head>
<body>
<?php
foreach($topics as $id =>$topic) {
?>
	<div class="topic" id="topic-<?php echo $id ?>">
		<h2 class="title"><?php echo $topic['title'] ?></h2>
		<p class="votes"><?php echo $topic['votes'] ?></p>
	</div>
<?php
}
?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script src="seed.js"></script>
</body>
</html>