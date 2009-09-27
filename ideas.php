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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
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
	<script>
		$(document).ready(function () {
			$(".votes").css("cursor", "pointer").click(function () {
				old = $(this).text();
				$(this).text(++old);
				return false;
			});
		});
	</script>
</body>
</html>