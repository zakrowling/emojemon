<!DOCTYPE html>
<html>
<head>
	<title>Emojemon</title>
	 <meta name="viewport" content="width=1080px">

	<link href="../app.css" rel="stylesheet" type="text/css" />

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="../app.js" type="text/javascript"></script>

</head>

<?php
    $final_battle = FALSE;
    $player_name = 'Charizard';
    $player_avatar_src = '../images/charizard.png';
    $player_attacks = array
    (
        array("Rock Slide",50),
        array("Wing Attack",40),
        array("Flamethrower",30),
        array("Scratch",20)
    );

    $emoji_size = 220;
?>

<body>

	<audio id="select-hover-sound"><source src="../sounds/select-hover.mp3"></source></audio>
	<audio id="select-sound"><source src="../sounds/select.mp3"></source></audio>
	<audio id="three-hit-sound"><source src="../sounds/three-hit-attack.mp3"></source></audio>
	<audio id="faint-sound"><source src="../sounds/fainted.mp3"></source></audio>