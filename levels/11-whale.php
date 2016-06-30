<?php
    include('../header.php');
    $battle_wins = 11;

    $emoji_name = 'Whale Emoji';
    $emoji_avatar_src = '../images/emojis/whale.png';
    $emoji_attacks = array
    (
        array("Body Slam",90),
        array("Tailfin Slap",10),
        array("Sing",10),
        array("Blowhole",10)
    );

    $player_attacks = array
    (
        array("Rock Slide",30),
        array("Wing Attack",20),
        array("Flamethrower",80),
        array("Scratch",10)
    );

    $next_battle = '12-' . 'camel';

    // Load battle arena
    include('index.php');
?>
