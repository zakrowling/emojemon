<?php
    include('../header.php');
    $battle_wins = 17;

    $emoji_name = 'Scream Emoji';
    $emoji_avatar_src = '../images/emojis/screamingface.png';
    $emoji_attacks = array
    (
        array("Screech",10),
        array("Psychosis",40),
        array("Mind Game",20),
        array("Headbutt",30)
    );

    $next_battle = '18-' . 'scorpion';

    // Load battle arena
    include('index.php');
?>
