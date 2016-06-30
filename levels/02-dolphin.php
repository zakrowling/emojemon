<?php
    include('../header.php');
    $battle_wins = 2;

    $emoji_name = 'Dolphin Emoji';
    $emoji_avatar_src = '../images/emojis/dolphin.png';
    $emoji_attacks = array
    (
        array("Sing",0),
        array("Swim",20),
        array("Flap",12),
        array("Tackle",35)
    );

    $player_attacks = array
    (
        array("Rock Slide",10),
        array("Wing Attack",45),
        array("Flamethrower",10),
        array("Scratch",45)
    );

    $next_battle = '03-' . 'eggplant';

    // Load battle arena
    include('index.php');
?>
