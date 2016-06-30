<?php
    include('../header.php');
    $battle_wins = 19;

    $emoji_name = 'Octopus Emoji';
    $emoji_avatar_src = '../images/emojis/octopus.png';
    $emoji_attacks = array
    (
        array("Poison Sting",50),
        array("Tentacle Squeeze",60),
        array("Water Gun",40),
        array("Sludge",10)
    );

    $player_attacks = array
    (
        array("Rock Slide",50),
        array("Wing Attack",10),
        array("Flamethrower",50),
        array("Scratch",10)
    );

    $next_battle = '20-' . 'emojigang';

    // Load battle arena
    include('index.php');
?>
