<?php
function numberGuessing(){
  global $play_count, $correct_guess, $guess_low, $guess_high;
  $round_number = $play_count + 1;
  print("Round $round_number: Enter your guess from 1 through 10!\n");
  $guess = 0;
  $random_number = rand(1,10);
  // print("Enter your guess!\n")
  while($guess < 1 || 10 < $guess){
    $guess = readline("> ");
    $guess = intval($guess);
    if(1 <= $guess && $guess <= 10){}
    else{
      print("Invalid input! Guess again.\n");
      $guess = 0;
    }
  }
  print("In round $round_number with a random number $random_number, ");
  if($guess !== 0){
    if($guess === $random_number){
      $correct_guess += 1;
      print("your guess, $guess, is correct!\n");
    }
    elseif($guess < $random_number){
      $guess_low += 1;
      print("your guess, $guess, is low!\n");
    }
    else{
      $guess_high += 1;
      print("your guess, $guess, is high!\n");
    }
  }
}

$play_count = 0;
$correct_guess = 0;
$guess_high = 0;
$guess_low = 0;
print("Welcome to number guessing!\n");
while($play_count < 10){
  numberGuessing();
  $play_count += 1;
}
$correct_perc = $correct_guess / $play_count * 100;
$low_perc = $guess_low / $play_count * 100;
$high_perc = $guess_high / $play_count * 100;
print("Result Summary\nCorrect guess $correct_perc%\nLow guess $low_perc%\nHigh guess $high_perc%\n\n");
if($guess_low < $guess_high){
  print("When you guessed wrong, you tended to guess high.\n");
}