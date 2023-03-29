<?php
function magic8ball(){
  echo "Enter your question!\n";
  $ans = readline("> ");
  echo "$ans!!!\nThe balls of fortune are rolling!\n";
  $random_number = rand(0,19);
  // echo "Number of fortune is $random_number\n";
  $fortune = "blank";
  switch($random_number){
    case 0:
      $fortune = "It is certain.\n";
      break;
    case 1:
      $fortune = "It is decidedly so.\n";
      break;
    case 2:
      $fortune = "Without a doubt.\n";
      break;
    case 3:
      $fortune = "Yes - definitely.\n";
      break;
    case 4:
      $fortune = "You may rely on it.\n";
      break;
    case 5:
      $fortune = "As I see it, yes.\n";
      break;
    case 6:
      $fortune = "Most likely.\n";
      break;
    case 7:
      $fortune = "Outlook good.\n";
      break;
    case 8:
      $fortune = "Yes.\n";
      break;
    case 9:
      $fortune = "Signs point to yes.\n";
      break;
    case 10:
      $fortune = "Reply hazy, try again.\n";
      break;
    case 11:
      $fortune = "Ask again later.\n";
      break;
    case 12:
      $fortune = "Better not tell you now.\n";
      break;
    case 13:
      $fortune = "Cannot predict now.\n";
      break;
    case 14:
      $fortune = "Concentrate and ask again.\n";
      break;
    case 15:
      $fortune = "Don't count on it.\n";
      break;
    case 16:
      $fortune = "My reply is no.\n";
      break;
    case 17:
      $fortune = "My sources say no.\n";
      break;
    case 18:
      $fortune = "Outlook not so good.\n";
      break;
    case 19:
      $fortune = "Very doubtful.\n";
      break;
    default:
      $fortune = "Invalid number\n";
      break;
  }
  print($fortune);
}
magic8ball();
// magic8ball();
// magic8ball();
