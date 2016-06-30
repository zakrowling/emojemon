<?php
    include('../header.php');
    $battle_wins = 6;

    $emoji_name = 'Ghost Emoji';
    $emoji_avatar_src = '../images/emojis/ghost.png';
    $emoji_attacks = array
    (
        array("Scare",30),
        array("2Spooky",30),
        array("Grave Dance",20),
        array("Spirit Gust",60)
    );

    $next_battle = '07-' . 'toadstool';

    // Load battle arena
    include('index.php');
?>
