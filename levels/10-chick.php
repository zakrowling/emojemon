<?php
    include('../header.php');
    $battle_wins = 10;

    $emoji_name = 'Chick Emoji';
    $emoji_avatar_src = '../images/emojis/chick.png';
    $emoji_attacks = array
    (
        array("Cluck",30),
        array("Wing Attack",30),
        array("Sing",0),
        array("Quick Bite",20)
    );

    $next_battle = '11-' . 'whale';

    // Load battle arena
    include('index.php');
?>
