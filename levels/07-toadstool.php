<?php
    include('../header.php');
    $battle_wins = 7;

    $emoji_name = 'Stool Emoji';
    $emoji_avatar_src = '../images/emojis/toadstool.png';
    $emoji_attacks = array
    (
        array("Spore",30),
        array("Dank Wind",30),
        array("Bad Trip",70),
        array("Harden",0)
    );

    $next_battle = '08-' . 'crab';

    // Load battle arena
    include('index.php');
?>
