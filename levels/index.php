	<div id="intro">
		<h2>Enemy <strong><?php echo $emoji_name ?></strong> wants to battle!</h2>
		<div class="top-panel"></div>
		<div class="bottom-panel"></div>
	</div>

	<div class="container">

		<div id="game" class="player-attack">

			<div class="playerone">
				<h3 class="health-title"><?php echo $player_name ?></h3>
				<h4 class="wins">Wins: <span><?php echo $battle_wins ?></span></h4>
				<div class="health">
					<div class="healthbar" style="transition: 2.5s 1s; width:100%">100</div>
				</div>
				<div class="avatar"><img src="<?php echo $player_avatar_src ?>" width="310" alt="" /></div>
			</div>

			<div class="opponent">
				<h3 class="health-title"><?php echo $emoji_name ?></h3>
				<div class="health">
					<div class="healthbar" style="transition: 2.5s 1s; width:100%">100</div>
				</div>
				<div class="avatar"><img src="<?php echo $emoji_avatar_src ?>" alt="" width="<?php echo $emoji_size ?>" /></div>

				<div class="opponent-attacks" style="display:none">
					<div class="action" data-attack="<?php echo $emoji_attacks[0][1] ?>"><?php echo $emoji_attacks[0][0] ?></div><!-- Each action to deplete by percentage of value -->
					<div class="action" data-attack="<?php echo $emoji_attacks[1][1] ?>"><?php echo $emoji_attacks[1][0] ?></div>
					<div class="action" data-attack="<?php echo $emoji_attacks[2][1] ?>"><?php echo $emoji_attacks[2][0] ?></div>
					<div class="action" data-attack="<?php echo $emoji_attacks[3][1] ?>"><?php echo $emoji_attacks[3][0] ?></div>
				</div>
			</div>

			<div class="narrator">
				<h3></h3>
				<div class="player-attack-list clearfix">
					<a href="javascript:;" class="action water" data-attack="<?php echo $player_attacks[0][1] ?>"><?php echo $player_attacks[0][0] ?></a><!-- Each action to deplete by percentage of value -->
					<a href="javascript:;" class="action" data-attack="<?php echo $player_attacks[1][1] ?>"><?php echo $player_attacks[1][0] ?></a>
					<a href="javascript:;" class="action flame" data-attack="<?php echo $player_attacks[2][1] ?>"><?php echo $player_attacks[2][0] ?></a>
					<a href="javascript:;" class="action" data-attack="<?php echo $player_attacks[3][1] ?>"><?php echo $player_attacks[3][0] ?></a>
				</div>
			</div>

		</div><!--game-->

		<?php include('../gameover.php'); ?>

	</div>
	
</body>
</html>