<?php
// Move the cupboard
  
function moveCupboard(){
    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard;

	// Write your code here:

  if (!$is_hungry AND $wearing_contacts AND !$wearing_glasses AND !$needs_to_pee) {
    $ready_to_work = TRUE;
  } else {
    $ready_to_work = FALSE;
  }


  if ($location !== "kitchen") {
    echo "You can't find the cupboard here! Look somewhere else. Tipp: You can find cold beers there!\n";
  } else {
    if ($moved_cupboard) {
      echo "You have already moved the cupboard! Go and check what you can find there!";
    } elseif (!$ready_to_work) {
        echo "You're not ready to move the cupboard! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";
    } else {
      echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
      $moved_cupboard = TRUE;
    }
  }
}
