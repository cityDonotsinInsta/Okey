<?php

$array1 = ["Alex", "Jacob", "Mark"];
$array2 = ["Alex", "Jacob", "Mark", "Max"];
$array3 = ["Alex",  "Max"];
$array4 = ["Alex", "Jacob", "Mark", "Max", "Alex", "Jacob", "Mark", "Max"];
$array5 = ["Alex"];
$array6 = [];

likes($array1);
likes($array2);
likes($array3);
likes($array4);
likes($array5);
likes($array6);
likes([]);


function likes( $name ) {
// Your code here...

if ($name === [])
{
    echo count($name);

}

if (empty($name))
  {
    return "no one likes this";
  }
  else if (count($name) === 1)
    {
      echo "$name[0] likes this";
    }
  else if (count($name) === 2)
    {
      echo "$name[0] and $name[1] like this";
    }
  else if (count($name) === 3)
    {
      echo "$name[0], $name[1] and $name[2] like this";
    }
  else if (count($name) === 4)
    {
      $counti = count($name) - 2;
      echo "$name[0], $name[1] and $counti others like this";
    }
    
    
    else if (count($name) > 4)
    {
      $counti = count($name) - 2;
      echo "$name[0], $name[1] and $counti others like this";
    }
    
  
    echo "\n code last part \n";
}

?>