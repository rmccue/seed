<?php

$topics = array(
	'test-idea' => array(
		'title' => 'Test Idea',
		'votes' => 0
	)
);

foreach($topics as $topic) {
?>
<div class="topic">
	<h2 class="title"><?php echo $topic['title'] ?></h2>
	<p class="votes"><?php echo $topic['votes'] ?></p>
</div>
<?php
}