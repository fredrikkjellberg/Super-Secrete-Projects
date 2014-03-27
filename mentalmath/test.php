<?php
  // Set up the values for the game...
  $names = array('Rock', 'Paper', 'Scissors');
  $human = -1;
  if ( isset($_POST["human"]) ) $human = intval($_POST["human"]);
  $computer = rand(0,2);

// This function takes as its input the computer and human play
// and returns "Tie", "You Lose", "You Win" depending on play
// where "You" is the human being addressed by the computer
function check($computer, $human) {
    if ($human == 0)     // user played rock
    { 
      if ($computer == 0){ $ans = "Tie";} // user played rock and computer played rock = tie
      else if ($computer == 1) {$ans = "You Lose";} // user played rock and computer played paper = You lost, Computer won
      else if ($computer == 2) { $ans = "You Win";} // user played rock and computer played Scissor = You won, Computer lost
    }
    else if ($human == 1) // user played paper
    {
      if ($computer == 1){ $ans = "Tie"; } // user played paper and computer played paper = tie 
      else if ($computer == 0) {$ans = "You Win";}  // user played paper and computer played rock = You won, Computer lost
      else if ($computer == 2) { $ans = "You Lose";}  // user played paper and computer played Scissor = You lost, Computer won

    }
    else  if ($human == 2) // user played Scissors
    {
      if ($computer == 2) { $ans = "Tie"; } // user played scissor and computer played scissor  = tie
      else if ($computer == 0) {$ans = "You Lose";}  // user played scissor and computer played rock = You lost, Computer won
      else if ($computer == 1) { $ans = "You Win";}  // user played scissor and computer played paper = You won, Computer lost
    }
  return $ans;
}

// This function tests all possible combinations of human / computer play
function tester() {
    global $names;
    echo("<b>Testing all combinations...</b><br/>\n");
    for ( $i=0; $i<3; $i++) {
      for ( $j=0; $j<3; $j++) {
         echo("Your play=".$names[$j]." Computer Play=".$names[$i]." Result=".check($i,$j)."<br/>\n");
      }
    }
}


?>
<html>
<head>
<title>Consulting Math game</title>
</head>
<body>
<h1>Welcome to Rock Paper and Scissors</h1>
<form method="post">
<select name="human">
<option value="-1">Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">Scissors</option>
<option value="3">Test</option>
</select>
<input type="submit" value="Play">
</form>
<p>

<?php
  if ( $human == -1 ) {
    echo("Please select a strategy and press Play.");
  } else if ( $human == 3 ) {
    tester();
  } else {
    echo("Your Play=".$names[$human]." Computer Play=".$names[$computer]." Result=".check($computer,$human)."<br/>\n");
  }
?>



</p>
</body>
</html>