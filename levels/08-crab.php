<?php
    include('../header.php');
    $battle_wins = 8;

    $emoji_name = 'Crab Emoji';
    $emoji_avatar_src = '../images/emojis/crab.png';
    $emoji_attacks = array
    (
        array("Pinch",70),
        array("Water Gun",30),
        array("Bite",20),
        array("Harden",0)
    );

    $next_battle = '09-' . 'alien';

    // Load battle arena
    include('index.php');
?>
