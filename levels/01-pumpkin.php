<?php
    include('../header.php');
    $battle_wins = 1;

    $emoji_name = 'Pumpkin Emoji';
    $emoji_avatar_src = '../images/emojis/pumpkin.png';
    $emoji_attacks = array
    (
        array("Scare",10),
        array("Trick or Treat",20),
        array("Nightmare",12),
        array("Tackle",35)
    );

    $next_battle = '02-' . 'dolphin';

    // Load battle arena
    include('index.php');
?>
