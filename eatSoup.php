<?php
function eatSoup(){
	// Write your code here:
  global $has_soup, $is_hungry;

  if ($has_soup === false) {
    echo "You don't have any cooked food to eat! Check the woods, find some stuff what looks good and see if you can cook something\n";
  } else {
    echo "You have eaten the soup! I hope you enjoyed it!.. YUMMY";
    $has_soup = false;
    $is_hungry = false; 
  }
}
