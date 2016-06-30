<?php
    include('../header.php');
    $battle_wins = 14;

    $emoji_name = 'Gator Emoji';
    $emoji_avatar_src = '../images/emojis/crocodile.png';
    $emoji_attacks = array
    (
        array("Crocodile Roll",60),
        array("Gator Snap",40),
        array("Razer Leaf",20),
        array("Scratch",10)
    );

    $player_attacks = array
    (
        array("Rock Slide",10),
        array("Wing Attack",45),
        array("Flamethrower",10),
        array("Scratch",45)
    );

    $next_battle = '15-' . 'monkey';

    // Load battle arena
    include('index.php');
?>
