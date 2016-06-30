<?php
    include('../header.php');
    $battle_wins = 9;

    $emoji_name = 'Alien Emoji';
    $emoji_avatar_src = '../images/emojis/alien.png';
    $emoji_attacks = array
    (
        array("Anal Probe",50),
        array("Ray Gun",30),
        array("Shrink Ray",20),
        array("Space Beam",40)
    );

    $next_battle = '10-' . 'chick';

    // Load battle arena
    include('index.php');
?>
