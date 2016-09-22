

<div style="text-align: center;">

  <h2>Arrays</h2>
<?php

// Types of Arrays: Indexed arrays - Arrays with a numeric index; 
// Associative arrays - Arrays with named keys; 
// Multidimensional arrays - Arrays containing one or more arrays

  //to make an array, you have to declare a variable and then say that this is an array. Instead of [] the array has (). This is an Index or Numeric Array. Numeric array − An array with a numeric index. Values are stored and accessed in linear fashion.
   
    $colors = array("Red", "Orange", "Yellow", "Green", "Blue", "Violet");
    echo "My favorite color is $colors[4]!<br>";

    //Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.

    $age = array("Josh" => 34, "Katy" => 38, "Amber" => 23);
    echo "Josh is " . $age['Josh'] . " years old today!<br>";

    //Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices

      $cars = array
        (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
        
      echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
      echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
      echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
      echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


?>



</div>