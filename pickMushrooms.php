<?php
  
function pickMushrooms(){
	// Write your code here:
  global $location, $has_mushrooms;

  if ($location !== "woods") {
    echo "There aren't any mushrooms to pick!\n";
   } else {
    echo "You have picked some mushrooms! There fresh and good, see what you can create with them! :)";
    $has_mushrooms = true;
   }
  }

  
  
  
  
    