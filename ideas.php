<?php
include('config.php');

require_once('./system/anti-framework/AF.php');

$default_config = array(
	'log' => array(
		'type' => 'AF_Log_Array',
		'params' => array(
			'register_shutdown' => true,
		),
	),
	'db' => array(
		'master' => array(
			'dsn' => 'mysql:dbname=wordpress;host=127.0.0.1',
			'username' => 'root',
			'password' => 'password',
			'identifier' => 'test',
		)
	),
);

$config = array_merge($default_config, $config);

AF::setConfig($config);
AF::bootstrap(AF::PAGE_GEN);

$table = new AF_Table('wp_options', 'option_name');

//echo '<pre>';
//var_dump();
$results = $table->get('siteurl', AF::DELAY_SAFE);


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
	<div class="topic" id="<?php echo $id ?>">
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