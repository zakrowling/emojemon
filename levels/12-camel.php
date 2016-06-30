<?php
    include('../header.php');
    $battle_wins = 12;

    $emoji_name = 'Camel Emoji';
    $emoji_avatar_src = '../images/emojis/camel.png';
    $emoji_attacks = array
    (
        array("Hump Attack",40),
        array("Desert Heat",40),
        array("Headbutt",20),
        array("Tickle",30)
    );

    $next_battle = '13-' . 'statue';

    // Load battle arena
    include('index.php');
?>
