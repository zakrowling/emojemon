<?php
    include('../header.php');
    $battle_wins = 18;

    $emoji_name = 'Scorpion Emoji';
    $emoji_avatar_src = '../images/emojis/scorpion.png';
    $emoji_attacks = array
    (
        array("Poison Sting",40),
        array("Stab",30),
        array("Desert Wind",20),
        array("Creepy Crawly",10)
    );

    $next_battle = '19-' . 'octopus';

    // Load battle arena
    include('index.php');
?>
