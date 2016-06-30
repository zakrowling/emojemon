<div class="gameover" style="display:none">
    <h3><a class="rematch" href="javascript:window.location.reload();">Rematch?</a>
<?php if ($final_battle == FALSE) { ?>
    <a href="<?php echo $next_battle ?>.php" class="next">Next Battle ></a></h3>
<?php } else { ?>
    <a class="next" href="http://www.weakling.com.au/emojemon/game.html">Start Again?</a></h3>
<?php } ?>
 </div>