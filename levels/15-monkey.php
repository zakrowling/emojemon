<?php
    include('../header.php');
    $battle_wins = 15;

    $emoji_name = 'Monkey Emoji';
    $emoji_avatar_src = '../images/emojis/monkey.png';
    $emoji_attacks = array
    (
        array("Poo Throw",30),
        array("Poo Smear",40),
        array("Poop",20),
        array("Butt Slam",30)
    );

    $next_battle = '16-' . 'cactus';

    // Load battle arena
    include('index.php');
?>
