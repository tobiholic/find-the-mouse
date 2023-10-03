<?php
  
function cookSoup(){
	// Write your code here:
  global $location, $has_mushrooms, $has_soup;

  if ($location !== "kitchen" && $has_mushrooms !== true) {
    echo "You can't cook like this! You nees something to cook and you need to be in the kitchen!\n";
  } else {
    echo "You made some mushroom soup. Mushroom is the queen of all soups!\n";
    $has_mushrooms = false;
    $has_soup = true;
  }
}

