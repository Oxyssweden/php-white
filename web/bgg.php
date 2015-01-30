<?php
if(isset($_POST['bgg_id'])):
	$id = $_POST['bgg_id'];
	$url = 'https://boardgamegeek.com/xmlapi/boardgame/' . $id . '?stats=1';
	$xml = simplexml_load_file($url);
	$boardgame = $xml->boardgame;
	echo intval($boardgame->statistics->ratings->average);
endif;
?>