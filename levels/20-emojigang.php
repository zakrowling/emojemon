<?php
    include('../header.php');
    $battle_wins = 20;

    $emoji_name = 'Emoji Gang';
    $emoji_avatar_src = '../images/emojis/weakling.png';
    $emoji_attacks = array
    (
        array("Body Slam",50),
        array("Takedown",10),
        array("Mirror Move",50),
        array("Friendship",10)
    );

    $player_attacks = array
    (
        array("Rock Slide",50),
        array("Wing Attack",10),
        array("Flamethrower",50),
        array("Scratch",10)
    );

    $emoji_size = 510;

    $final_battle = TRUE;
    $next_battle = '';

    // Load battle arena
    include('index.php');
?>
