<?php
    include('../header.php');
    $battle_wins = 4;

    $emoji_name = 'Mask Emoji';
    $emoji_avatar_src = '../images/emojis/redmask.png';
    $emoji_attacks = array
    (
        array("Fly",30),
        array("Scare",30),
        array("Psychosis",20),
        array("Body Slam",60)
    );

    $player_attacks = array
    (
        array("Rock Slide",10),
        array("Wing Attack",45),
        array("Flamethrower",10),
        array("Scratch",45)
    );


    $next_battle = '05-' . 'poo';

    // Load battle arena
    include('index.php');
?>
