<?php
    include('../header.php');
    $battle_wins = 3;

    $emoji_name = 'Plant Emoji';
    $emoji_avatar_src = '../images/emojis/eggplant.png';
    $emoji_attacks = array
    (
        array("Harden",0),
        array("Erection",20),
        array("Squirt",12),
        array("Tackle",35)
    );

    $next_battle = '04-' . 'redmask';

    // Load battle arena
    include('index.php');
?>
