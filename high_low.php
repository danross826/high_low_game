<?php


$guessCounter=0;
$gameStarter=0;


do {
    $random=rand(1, 100);

	fwrite(STDOUT, 'I\'m thinking of a number between 1 and 100. What is it?');
	$userNumber = fgets(STDIN);
	$guessCounter++;
	echo "Number of Guesses: $guessCounter" . PHP_EOL;

	while ($userNumber!=$random) {

		if($userNumber<$random){
			$guessCounter++;
			fwrite(STDOUT, 'Higher.' . PHP_EOL);
			$userNumber = fgets(STDIN);
			echo "Number of Guesses: $guessCounter" . PHP_EOL;
		}else if($userNumber>$random){
			$guessCounter++;
			fwrite(STDOUT, 'Lower.' . PHP_EOL);
			$userNumber = fgets(STDIN);
			echo "Number of Guesses: $guessCounter" . PHP_EOL;
		}else if (!is_numeric ($userNumber)) {
			$guessCounter++;
			fwrite(STDOUT, 'That\'s not a number!' . PHP_EOL);
			$userNumber = fgets(STDIN);
			echo "Number of Guesses: $guessCounter" . PHP_EOL;
		};
	};
		if ($userNumber==$random) {
			$guessCounter=0;
			fwrite(STDOUT, 'Good Guess!!' . PHP_EOL);
			fwrite(STDOUT, 'Do you want to play again? yes or no?' . PHP_EOL);
			$userChoice=trim(fgets(STDIN));
			var_dump($userChoice);
			if ($userChoice=='yes') {
				$gameStarter=1;
			}else{
				$gameStarter=0;
			}
	};

} while ($gameStarter==1);











?>