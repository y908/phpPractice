
<div style="text-align: center;">
  <h3>Practice with PHP</h3>

    <h2>While Loop</h2>
<!-- ===============================WHILE LOOP============================================ -->
<?php 
  // a while loop will only run if the condition is true. 'while' is used when you have an idea about the range of values on which to iterate, but don't know the exact number of iterations taking place vs 'for' loop -- for generally used when you know the number of iterations beforehand.
  $myText = 0;

  while($myText < 5){  
  echo "This text was repeated 5 times.<br>";
  $myText++;
  }

?>
<!-- =============================== DO/ WHILE LOOP=========================================== -->

    <h2 style="margin-top: 30px;">Do/While Loop</h2>

<?php

  // a do/while loop will always write what's within the do{} once, even if the condition is not true. then it will check to see if the while() is true. if it's true, the action will be made


    $myText=0;

    do {
      echo "This text was repeated 5 times.<br>";
      $myText++;
    }while($myText < 5);
?>
<!-- ==================================== For LOOP=========================================== -->

    <h2 style="margin-top: 30px;">For Loop</h2>

<?php
    
    //this is very similar if not the same to the javascript for loop. The main difference is the syntax. 

    for ($myText = 0; $myText < 5; $myText++){
      echo "This text was repeated 5 times.<br>";
    }
?>
<!-- ==================================== ForeachLOOP=========================================== -->

    <h2 style="margin-top: 30px;">Foreach Loop</h2>


<?php
  
  // a foreach loops through a block of code for each element in an array

  $myAnimals = array("Bird", "Dog", "Cat");

  // $animals is a new variable created inside the foreach loop. The variable is then used to display the names. 
    foreach ($myAnimals as $animals){
      echo "This animal is called a $animals.<br>";
    }
  //Selecting the element in the array is the same as in javascript. 
    echo "I like the $myAnimals[1] the best!";
?>


</div>  <!-- end of container div -->



