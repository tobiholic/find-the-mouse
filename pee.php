<?php
  
function pee(){
	// Write your code here:
  global $location, $needs_to_pee;
  
  if ($location === "bathroom" || $location === "woods") {
    echo "You relieved yourself! Hope you had a good pee!";
    $needs_to_pee = FALSE;
  } else {
    echo "Are you crazy! You can't pee here!!";
  }
}

