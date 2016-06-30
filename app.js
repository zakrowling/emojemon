$(document).ready(function() {
    
    // Initialize
    checkMobile();
    intro();
    ready();

});

function checkMobile() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('body').addClass('mobile');
	}
}

function intro() {

	setTimeout(function(){
		$('#intro').addClass('animate');
		$('#intro h2').hide();
		setTimeout(function(){
			$('#intro').hide();
		}, 2000);
	}, 2500);
}

function ready() {

	// Set values of attack
	attackHalfLife = 80; // 70/100 to calculate percent
	playerName = $('#game .playerone .health-title').text();
	playerWins = $('#game .playerone .wins span').text();
	opponentName = $('#game .opponent .health-title').text();

	$('.player-attack-list .action').hover(function(){
	 	$('#select-hover-sound')[0].play();
	}); 

	 $('.player-attack-list .action').click(function(){

		attackValue = $(this).attr('data-attack');
		attackValue = Math.round(attackValue * (attackHalfLife / 100));
		attackName = $(this).text();
		$(this).attr('data-attack', attackValue);

		$('#game').removeClass();

		// Hit animation
		$('#three-hit-sound')[0].play();
		$('#game .playerone .avatar').removeClass('hit');
		$('#game .opponent .avatar').addClass('hit');

		// Check if flame attack
		if ($(this).hasClass('flame')) {
			$('#game .opponent .avatar').addClass('flamed');
			setTimeout(function(){
				$('#game .opponent .avatar').removeClass('flamed');
			}, 2000);
		}

		// Check if water attack
		if ($(this).hasClass('water')) {
			$('#game .opponent .avatar').addClass('watered');
			setTimeout(function(){
				$('#game .opponent .avatar').removeClass('watered');
			}, 2000);
		}
		
		// Refresh health bar
		opponentHealthBar();

		// Narrate 
		battleNarration();

		// Opponent responds with attack
		opponentAttack();


		setTimeout(function(){
			// Reset game
			$('#game').addClass('player-attack');

			// Reset narration
			$('.narrator h3').text('');

		}, 8000);

    });
}

function opponentAttack() {
	opponentSelectAttack = Math.floor((Math.random() * $('.opponent .action').length) + 1 );
	opponentAttackValue = $('.opponent .action:nth-child(' + opponentSelectAttack + ')').attr('data-attack');
	opponentAttackValue = Math.round(opponentAttackValue * (attackHalfLife / 100));
	opponentAttackName = $('.opponent .action:nth-child(' + opponentSelectAttack + ')').text();
	$('.opponent .action:nth-child(' + opponentSelectAttack + ')').attr('data-attack', attackValue);
}


function opponentHealthBar() {
	playertwo = $('.opponent .healthbar');
	opponentHealth = playertwo.text() - attackValue;

	// Update health bar styling
	playertwo.css('width', opponentHealth +'%');

	// Make healthbar orange
	if (opponentHealth < 50) {
		playertwo.addClass('orange');
	}

	// Make healthbar red
	if (opponentHealth < 20) {
		playertwo.removeClass('orange');
		playertwo.addClass('red');
	}

	if (opponentHealth >= 0) {
		playertwo.text(Math.abs(opponentHealth));
	} else {
		// end
	}
}


function playerHealthBar() {

	// Hit animation
	$('#game .opponent .avatar').removeClass('hit');
	$('#game .playerone .avatar').addClass('hit');

	playerone = $('.playerone .healthbar');
	playerHealth = playerone.text() - opponentAttackValue;

	// Update health bar styling
	playerone.css('width', playerHealth +'%');

	// Make healthbar orange
	if (playerHealth < 50) {
		playerone.addClass('orange');
	}

	// Make healthbar red
	if (playerHealth < 20) {
		playerone.removeClass('orange');
		playerone.addClass('red');
	}

	playerone.text(Math.abs(playerHealth));

	if (playerHealth < 0) {
		setTimeout(function(){
			playerone.text('0'); // Player is dead
			playerAttackValue = 0; // Opponent can't attack
			$('#faint-sound')[0].play();
			$('#game .playerone .avatar').addClass('fainted');
			$('.narrator h3').text(playerName.toUpperCase() + ' fainted! ' + opponentName.toUpperCase() + ' wins!');
			$('.gameover a.next').hide();
			gameover();
		}, 4000);
	}
}


function playerNarration() {

	narration = playerName.toUpperCase() + ' used ' + attackName.toUpperCase() + '!';
	
	// Check how strong player 1 attack is
	if (attackValue > 15) {
		narratorComment = 'It is super effective!'
	} else {
		narratorComment = 'It is not very effective...'
	}

	// Create narration
	$('.narrator h3').text(narration + ' ' + narratorComment);

	// Check status of opponent (if living or fainted)
	if (opponentHealth < 0) {
		setTimeout(function(){
			playertwo.text('0'); // Opponent is dead
			opponentAttackValue = 0; // Opponent can't attack
			$('#faint-sound')[0].play();
			$('#game .opponent .avatar').addClass('fainted');
			$('.narrator h3').text(opponentName.toUpperCase() + ' fainted! ' + playerName.toUpperCase() + ' wins!');
			playerWins++;
			$('#game .playerone .wins span').text(playerWins);
			gameover();
		}, 4000);
	}
}


function battleNarration() {

	playerNarration();

	if (opponentHealth > 0) {
		setTimeout(function(){
			opponentNarration();
			$('#three-hit-sound')[0].play();
		}, 4000);
	}

}


function opponentNarration() {

	opponentNarrate = 'Enemy ' + opponentName.toUpperCase() + ' used ' + opponentAttackName.toUpperCase() + '!';
	$('.narrator h3').text(opponentNarrate);

	// Update Player Health Bar
	playerHealthBar();
	
}


function gameover() {
	$('.player-attack-list').hide();
	setTimeout(function(){
		$('#select-sound')[0].play();
		$('.narrator h3').text('');
		$('.gameover').fadeIn('500');
		$('#game').addClass('finished');
	}, 4200);
}


