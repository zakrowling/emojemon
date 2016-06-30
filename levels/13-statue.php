<?php
    include('../header.php');
    $battle_wins = 13;

    $emoji_name = 'Statue Emoji';
    $emoji_avatar_src = '../images/emojis/moyaistatue.png';
    $emoji_attacks = array
    (
        array("Tribal Dance",40),
        array("Drum Ceremony",60),
        array("Headbutt",20),
        array("Amazon Arrow",10)
    );

    $next_battle = '14-' . 'crocodile';

    // Load battle arena
    include('index.php');
?>
