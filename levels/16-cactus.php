<?php
    include('../header.php');
    $battle_wins = 16;

    $emoji_name = 'Cactus Emoji';
    $emoji_avatar_src = '../images/emojis/cactus.png';
    $emoji_attacks = array
    (
        array("Pin Missile",30),
        array("Desert Wind",40),
        array("Needle Spray",20),
        array("Heatwave",30)
    );

    $next_battle = '17-' . 'screamingface';

    // Load battle arena
    include('index.php');
?>
