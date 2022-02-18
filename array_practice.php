<?php

// Input section
// $a = 10
// $a = (int)readline('Enter an integer: ');
//  for($i=0; $i<$a; $i++)
//  {
//  	$x = (int)readline();
//  }


$a = array(0, 1, 2 , 3, 4);
echo $a[3];
$b = array(
    'one' => 'Mamun',
    'two' => 'Abdullah',
    'thee' => 'php',
    'four' => 'Mamun_cse',
);
echo "<pre>";
print_r($b['one']);

$arrayName = [
          array(10 , 11),
          array(12, array(13)),
];
         


echo "<pre>";
print_r($arrayName[1][1][0]);

$arrayName = [
          'a' => array(
	          	'a' => 10 , 
	          	'a1' => 11
          ),
          'b' => array(
	          	'b' => 12,
	          	'b1' => array('b1' => 13)),
];
echo "<pre>";
print_r($arrayName['b']['b1']['b1']);
echo "<br>";

$a = 'a,b,c,d,e,f';
$ab = explode(",", $a);
foreach ($ab as $value) {
	echo $value;
}
echo "<br>";

$ar = array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
);
$new_array = array();
foreach( $ar as $element ) {
    $new_array[ $element ] = 0;
}
$test = array_combine($ar, $ar); // using array_combine
print_r($new_array);

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// $keysAndValues = array_combine( array_values( $keys ), array_values( $values ) );
// $com = array_combine($keys, $values);
$keysAndValues = array();
$keysAndValues[ $keys[ "field1" ] ] = $values[ "field1value" ];
$keysAndValues[ $keys[ "field2" ] ] = $values[ "field2value" ];
$keysAndValues[ $keys[ "field3" ] ] = $values[ "field3value" ];

print_r($keysAndValues);


/*
2. $color = array('white', 'green', 'red'') 
Write a PHP script which will display the colors in the following way : 
Output : 
white, green, red,

green
red
white
*/
$colors = array('blue','white','black','red');
foreach ($colors as $color) {
	print($color.' ');
}
sort($colors);
echo "<br>";
foreach ($colors as $color) {
	print($color." ");
}

/*
Create a PHP script which display the capital and country name from the above array $ceu. Sort the list by the name of the country. 

Sample Output :
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 
*/
echo "<br>";
echo "<br>";
$ceu = [
	    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
	    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
	    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
	    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
	    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
	    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
	    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", 
	    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"
]; 
asort($ceu);
foreach($ceu as $co => $ca) {
	echo "The capital of $co is $ca <br>";
}
echo "<br>";


/*
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. 
*/
$a = array(10, 20, 30, 40, 50, 60);
print_r($a);
unset($a[3]);
// $a = array_values($a);
print_r($a);

echo "<br>";
/*
5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array. 
Expected result : white
*/
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo $color[11];


$json = '{
    "title": "PHP IS !DEAD", 
    "writer_name": "Nahid bin azhar", 
    "page_toal": "118", 
    "version": "1.0",
    "price": "20 USD"
}';
function data($value, $key){
       echo "$key: $value <br>";
}
$data = json_decode($json, true);
print_r($data);
array_walk_recursive($data, "data");


/*
Write a PHP script that insert a new item in an array on any position. 
Expected Output :
Original array : 
1 2 3 4 5 6
After inserting 'Mamun' the array is :
1 2 3 M 4 5
*/
echo "<br>";
$a = array(1, 2, 3, 4, 5, 6);
echo "Original array: ";
foreach ($a as $value) {
	echo $value." ";
}
echo "<br>";
$insert = "Zidni";
echo "After inserting '$insert' the array is: <br>";
array_splice($a, 3, 0, $insert);
foreach ($a as $newData) {
	echo $newData." ";
}
echo "<br>";

/*
Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. 
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of five lowest temperatures : 60, 62, 63, 63, 64, 
List of five highest temperatures : 76, 78, 79, 81, 85,
*/
$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$new_array = explode(",", $temp);
$sum = 0;
$len = count($new_array);
echo "Array Length is ".$len;
echo "<br>";
for($i=0; $i<$len; $i++)
{
     $sum = $sum + $new_array[$i];
     echo "index[$i]"." value = ".$new_array[$i]."<br>";
}
$avg = $sum/$len;
echo "Average temperature is: ".$avg."<br>";
echo "After sorting...<br>";
sort($new_array);
echo "List of five lowest temperature is ";
for($i=0; $i<10; $i++)
{

      if($new_array[$i] == $new_array[$i+1]){
        continue;
      }
      echo $new_array[$i]." ";
}
echo "<br>";
echo "List of five highest temperature is ";
for($i=$len-1; $i>22; $i--)
{

      if($new_array[$i] == $new_array[$i-1]){
        continue;
      }
      echo $new_array[$i]." ";
}
/*
Write a PHP script to sort the following associative array : 
array("Dada bhai"=>"38","Foyez"=>"33","Imtiaz"=>"30","Kaium"=>"30", "Nayan"=>"27", "Khairul"=>"27", "Mamun"=>"25", "Laburi"=>"21", "Reduan"=>"16") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/
echo "<br>";
$arr = array("Dada bhai"=>"38","Foyez"=>"33","Imtiaz"=>"30","Kaium"=>"30", "Nayan"=>"27", "Khairul"=>"27", "Mamun"=>"25", "Laburi"=>"21", "Reduan"=>"16");
foreach ($arr as $key => $value) {
      echo $key."=>".$value."<br>";
}
asort($arr);
echo "<br>ascending order sort by <b>Value</b><br>";
foreach ($arr as $key => $value) {
      echo $key."=>".$value."<br>";
}
ksort($arr);
echo "<br>ascending order sort by <b>Key</b><br>";
foreach ($arr as $key => $value) {
      echo $key."=>".$value."<br>";
}
arsort($arr);
echo "<br><b>Decending</b> order sort by <b>Value</b><br>";
foreach ($arr as $key => $value) {
      echo $key."=>".$value."<br>";
}
krsort($arr);
echo "<br><b>Decending</b> order sort by <b>Key</b><br>";
foreach ($arr as $key => $value) {
      echo $key."=>".$value."<br>";
}
/*
Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 ) 
Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )
*/
$input =  array (5,4,8,3,2,7,1,6);
$max = $input[0];
for ($i=0; $i <count($input) ; $i++) { 
   if ($max<$input[$i]) {
      $max = $input[$i];
   }
 } 
 echo "Max is ".$max;

/*
Write a PHP program to merge (by index) the following two arrays. 
Sample arrays : 
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 
*/
$array1 = array(
  array(77, 87), 
  array(23, 45)
);
$array2 = array("w3resource", "com"); 
$result = array();
print_r(array_merge_recursive($array1, $array2));
echo "<br>";
function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
$data = array_map("myfunction",$a);
foreach ($data as $key => $value) {
  echo $value."<br>";
}
$m = array(2,5,6,4,10);
echo "Is it array ".is_array($m)."<br>";
echo "Is it in array ".in_array(10,$m);
echo "<br>";
function checkEven($num)
{
  if($num%2==0)
  {
     return $num;
  }  
}

$a=array(1,2,3,4,5,6,7,8,9,10);
$even = array_map("checkEven",$a);
for($i=0; $i<count($even); $i++)
{
  echo $even[$i]." ";
}

?>


array_push()    => push array value in the end of the array
array_pop()     =>  pops and returns the value of the last element of array
array_splice()  => Remove elements from an array and replace it with new elements:
array_values()  => returns all the values from the array and indexes the array numerically
unset()         => If you want to delete just one array element you can use unset(),Note that when you use unset() the array keys won’t change. 
                   If you want to reindex the keys you can use \array_values() after unset(), which will convert all keys to numerically enumerated keys starting from 0.
array_diff()    => Compare the values of two arrays, and return the differences:
array_diff_key()=> If you know the keys of the elements which you want to delete, then you want to use
array_merge()  => The array_merge() function merges one or more arrays into one array.
array_merge_recursive()
array_map() => The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the 
               user-made function. <?php
                                        function myfunction($v)
                                        {
                                          return($v*$v);
                                        }

                                        $a=array(1,2,3,4,5);
                                        print_r(array_map("myfunction",$a));
                                    ?>
array_combine() => The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
                                    <?php
                                        $fname=array("Peter","Ben","Joe");
                                        $age=array("35","37","43");

                                        $c=array_combine($fname,$age);
                                        print_r($c);
                                    ?>
explode() => The explode() function breaks a string into an array.
implode() function returns a string from the elements of an array.
max()
min()
count()
sort()
rsort()
asort()
ksort()
arsort()
krsort()
is_array()
in_array()
strlen()
str_replace()
strpos => Find the position of the first occurrence of a substring in a string
file_exists => Checks whether a file or directory exists(path)



























মিতা 01861143837
rupjit 01305 213639
redu 01318 475111
khairul 01701 016078
01865 768826


       Covid-19 treatment
  Dr. Atikur Rahman
  tab. lvera 12mg 1 0 1 => 3 days
  tab. Zimax 500mg 0 0 1 => 7 days
  tab. monas 10mg 0 0 1 => 1 month
  tab. fexo 120mg 0 0 1 => 1 month
  tab. xinc 20mg  0 0 1 => 10 days
  tab  ceevit 250mg 1 0 1 => 10 days
  cap. D rise 40000 IU per week 1 => 1 month


1. করোনা ভাইরাস মানবদেহে প্রবেশ করে চোখ, নাক ও মুখ দিয়ে, যেহেতু সবাই পজিটিভ আপনি আর রেদুয়ান 
অনেকটা রিকভার হয়ছেন তায়, আপনাদের উচিত, সাবান অথবা হেন্ডওয়াশ দিয়ে ১মিনিট ধরে হাত ধোয়া খাওয়ার আগে 
এবং আব্বা আম্মার সাথে কোন কাজ করলে। আর আপনারা ২ জন (আপনি আর রেদুয়ান) এক রুম এ থাকেন এবং 
এক ওয়াশরুম ব্যবহার করেন। 

2. আব্বা আম্মার জন্য ও একই রোল মেনে চলতে হবে। *** very important

3. ar basar vitore o mask use koren, jodi use na koren tahole recover hoye kono luv nai. jotokkhon na abba amma recover hoyche.
4. ar protidin sokale poriman moto pani khete hobe ar saradin e minimum 10-12 glass pani khaben, sobai.
5. ar baranda utane hatahati korben
6 ar pet vore khete hobe jeta apnar energy dibe ebong immune system strong hobe ja.
7. saradin kajer moddhe thaken, use kora kapor golo gorom pani diye dhoya suru kore den.


