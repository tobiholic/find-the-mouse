<?php
  // Change player location
function changeLocation(){	
  // Write your code here:

  // access global variable location: 
  global $location;

  // player input next location, strtolow input.
  echo "Where you want to go?\n";
  $next_location = readline("location to go>> ");
  strtolower($next_location);
  
  // change of location
  if ($location === "kitchen" && $next_location === "bathroom"){
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  } elseif ($location === "kitchen" && $next_location === "woods"){
    echo "You follow the winding path, shivering as you make your way deep into the TerrorWoods.\n";
    $location = "woods";
  } elseif ($location === "bathroom" && $next_location === "kitchen"){
    echo "You go to: kitchen";
    $location = "kitchen";
  } elseif ($location === "woods" && $next_location === "kitchen"){
      echo "You go to: kitchen";
      $location = "kitchen";
    } elseif (($location === "bathroom" && $next_location === "woods") || ($location === "woods" && $next_location === "bathroom")){
      echo "You can't go directly to there from your currenct location. Try going to somewhere else first\n";
    } else {
      echo "That doesn't fit with the places you can go. Are you confused? Try to 'look around'\n";
    }   
}