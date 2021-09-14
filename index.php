<?php
// Guessing Game Demo Project

echo "Welcome From Guessing Game \n";

$correctNumber = rand(1, 6);

do {
  $guessingNumber = readline("Enter your guessing number between 1 to 6 : ");

  // validate the number
  if (!is_numeric($guessingNumber)) {
    echo "Your input must be number only!";
    exit();
  }

  $guessingNumber = (int)$guessingNumber;
  if ($guessingNumber > $correctNumber) {
    echo "Your guessing number is too high\n";
  } else if ($guessingNumber < $correctNumber) {
    echo "Your guessing number is too low\n";
  } else {
    echo "Congrat! You win >< \n";
  }

}while ($guessingNumber !== $correctNumber);