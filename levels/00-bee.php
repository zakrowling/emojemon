<?php
    include('../header.php');
    $battle_wins = 0;

    $emoji_name = 'Bee Emoji';
    $emoji_avatar_src = '../images/emojis/bee.png';
    $emoji_attacks = array
    (
        array("Poison Jab",10),
        array("Bug Bite",20),
        array("Pin Missile",15),
        array("Fluffy Butt",35)
    );

    $next_battle = '01-' . 'pumpkin';

    // Load battle arena
    include('index.php');
?>
