<?php
    include('../header.php');
    $battle_wins = 5;

    $emoji_name = 'Poo Emoji';
    $emoji_avatar_src = '../images/emojis/poo.png';
    $emoji_attacks = array
    (
        array("Nut Attack",30),
        array("Face Smear",30),
        array("Stench",20),
        array("Poo Punch",60)
    );

    $player_attacks = array
    (
        array("Rock Slide",80),
        array("Wing Attack",10),
        array("Flamethrower",80),
        array("Scratch",10)
    );

    $next_battle = '06-' . 'ghost';

    // Load battle arena
    include('index.php');
?>
