<?php
// $string = 'myString<br>';
// echo $string;
// echo gettype( $string ),"<br>";
// $float = 123.324;
// echo $float,' ';
// echo gettype( $float ),"<br>";

// $int = 5;
// echo $int, " ";
// echo gettype( $int ),"<br>";

// $bigint = PHP_INT_MAX;
// echo number_format($bigint)," ";
// echo gettype( $bigint ),"<br>";

// $bool = true;
// echo $bool, " ";
// echo gettype( $bool ),"<br>";

// $elems = ["first elem", "second elem"];
// echo "<br>";
// print_r($elems). "<br>";
// echo gettype( $elems ),"<br>";
// echo $elems[1],"<br>";

// echo"<br><b>foreach</b><br>";
// foreach ($elems as $elem) {
//    echo $elem,"<br>";
// }
// echo"<br><b>for</b><br>";
// for($i=0;$i<count($elems);$i++){
//   echo $elems[$i],"<br>";
// }
// echo "<br><b>while</b><br>";
// $j=0;
// while($j<count($elems)){
//   echo $elems[$j],"<br>";
//   $j++;
// }
// echo"<br>";
// class Car
// {
//     public function __construct($make, $color)
//     {
//         $this->make = $make;
//         $this->color = $color;

//     }
//     public $make;
//     public $color;
// }
// ;

// $obj = new Car("bmw", "black");
// print_r($obj). " ";
// echo gettype($obj),"<br>";
// // echo $obj->make;
// echo "<b>for loop</b><br>";
// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j <= $i; $j++) {
//     echo "*";
//   }
//   echo "<br>";
// }

// // echo "<br>";
// // $x = "";
// // for($b=0;$b<5; $b++) {
// //   $x = $x . "*";
// //   echo"$x<br>";

// // }

// // echo "<br>";
// echo "<br><b>foreach</b><br>";
// $hobbies = ["gamen", "gym", "hardlopen", "uitleg geven"];
// foreach ($hobbies as $hobby) {
//   echo "$hobby<br>";
// }

// function tableOfN($tableOf)
// {
//   echo "<br><b>table of $tableOf</b><br>";
//   for ($i = 1; $i <= 10; $i++) {
//     echo "$tableOf x  $i  = " . ($i * $tableOf) . "<br>";
//   }
// }
// tableOfN(5);

// echo "<br><b>fruitschaal</b><br>";
// $fruits = [
//   'apple' => 0.56,
//   'pineapple' => 1.29,
//   'strawberry' => 0.28
// ];

// $fruits["mango"] = 2.11;
// $fruits += ['kiwi' => .50];
// foreach ($fruits as $fruit => $value) {
//   echo "$fruit: price is $value<br>";
// };


// // $test = 0;
// // //if        true      false
// // $test==1 ? $test=2 : $test=3;
// // echo $test;

// /*
//  * Opdracht 1.
//  * Maak een array van getallen(bijv. [2, 4, 6, 8, 10]).
//  * Gebruik een foreach loop om de waarden van de array
//  * te verdubbelen en de resultaten in een nieuwe array
//  * op te slaan. Laat beide arrays zien.
//  *
//  * Opdracht 2.
//  * Maak een array met 5 verschillende namen.
//  * Gebruik een for loop om deze namen in omgekeerde
//  * volgorde af te drukken.
//  *
//  * Opdracht 3.
//  * Schrijf een array met willekeurige getallen.
//  * Gebruik een foreach loop om de som van alle even
//  * getallen in de array te berekenen en weer te geven.
//  * 
//  * 
//  */

// echo "<br><b>Foreach exercise 1</b><br>";
// $arr = [2, 4, 6, 8, 10];
// $arr2 = [];
// foreach ($arr as $elem) {
//   array_push($arr2, $elem * 2);
// };
// print_r($arr2);
// echo "<br>";
// //---------------------------------------
// echo "<br><b>For exercise 2</b><br>";
// $names = ["mischa", "damien", "lucas", "wim", "ruben"];
// for ($i = count($names) - 1; $i >= 0; $i--) {
//   echo $names[$i] . "<br>";
// }
// //---------------------------------------
// echo "<br><b>Sum of array exercise 3</b><br>";
// $randomNumbers = [2, 6, 23, 9, 1, 5, 6, 14];
// $result = 0;
// for ($i = 0; $i < count($randomNumbers); $i++) {
//   $result += $randomNumbers[$i];
// };
// echo $result;


//-------------------------------------------------------------------------------------------------------
