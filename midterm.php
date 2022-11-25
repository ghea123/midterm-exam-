<?php


//data types
echo "these are data types";
echo "<br>";
$ghea = "ghea";  // strings 
$grade = 99;
$beautyrate = 99.9;      //data types 
$questions = true;


echo  $ghea. "<br>" . $grade. "<br>". $beautyrate. "<br>". $questions; //echo


echo "<br>";
echo "<br>";

echo "these are operators";
// arithmetic operator
echo "<br>"; 
echo  5 + 5; 
echo "<br>"; 
echo  5 - 5;  // numbers 
echo "<br>"; 
echo  5 * 5; 
echo "<br>"; 
echo  5 / 5; 

echo "<br>";
echo "<br>";

echo "this is loop";
echo "<br>"; //loop
for ($i=1; $i<=10; $i++){
    echo $i;
}


echo "<br>";
echo "<br>";
echo "this is if else";
echo "<br>";
// if else 
$subject = "math";
$prof = "dom";
if ($subject == "math" && $prof == "dom") {
    echo "you got it right";
}else {
    echo " invalid input";
}



// if else if  if 
echo "<br>";
echo "<br>";
echo "this is if else if";
echo "<br>";
if ($subject != "math"){
    echo "invalid subject";
} else if ( $prof != "dom"){
    echo "invalid prof"; 
} else {
    echo " all valid ";
}


// switch
echo "<br>";
echo "<br>";
echo "this is switch";
echo "<br>";
$initial = "k";
switch ($initial) {
    case ('a'):
    echo " Azurin";
    break;

    case ('b'):
    echo " Bibat";
    break;

    
    case ('k');
    echo " Kionisala";
    break;

    default: 
    echo " invalid";
    break; 

}

// functions 

echo "<br>";
echo "<br>";
echo "this is function";
echo "<br>";
function goodbye($bye){
    echo $bye * 20;
}

goodbye (2);

// array
echo "<br>";
echo "<br>";
echo "this is array";
echo "<br>";

$array = Array ("pen", "ballpen", "ball") ;
  echo $array [2];
?>

