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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
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
	<script>
		$(document).ready(function () {
			$(".votes").css("cursor", "pointer").live("click", function () {
				e = this;
				votes = $(e).text();
				$.post(
					"vote.php",
					{
						"id": $(e).parent().attr("id"),
						"votes": votes
					},
					function () { afterVote(e); },
					"json"
				);
			});
		});
		
		afterVote = function (e) {
				$(e).text(++votes);
				parent = $(e).parent();
				prev = parent.prev();
				if(!prev.length)
					return false;
				
				while(prev.children(".votes").text() < votes) {
					parent = parent.remove().insertBefore(prev);
					prev = parent.prev();
					
					if(!prev.length)
						break;
				}
				return false;
		};
	</script>
</body>
</html>