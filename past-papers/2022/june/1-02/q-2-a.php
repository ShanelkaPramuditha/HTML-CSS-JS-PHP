<?php
// store marks in array
$marks = array(
   "Uthpala" => 80,
   "Meena" => 92,
   "Abdhul" => 85,
   "Sahan" => 50,
   "Teena" => 65);

   foreach ($marks as $name => $mark) {
      if ($mark < 60) {
         echo "Try harder " . $name . ", You got " . $mark . " marks and you Fail the module.<br>";
      }
      else if ($mark < 70) {
         echo "Congratulations " . $name . ", You got " . $mark . " marks and your grade is D.<br>";
      }
      else if ($mark < 80) {
         echo "Congratulations " . $name . ", You got " . $mark . " marks and your grade is C.<br>";
      }
      else if ($mark < 90) {
         echo "Congratulations " . $name . ", You got " . $mark . " marks and your grade is B.<br>";
      }
      else if ($mark < 100) {
         echo "Congratulations " . $name . ", You got " . $mark . " marks and your grade is A.<br>";
      }
   }
?>