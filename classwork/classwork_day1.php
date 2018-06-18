<!DOCTYPE html>
<html>
<head>
<title>Day 1 | Classwork</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div class="center">



<h2>Exercise 1:</h2><br>
<h1 class="center">
<?php
    $name = "Schahnaz-Isabel Westenberger";
    echo "My name is: <br>" . $name;
?>
</h1>



<hr>
<h2>Exercise 2:</h2><br>
<?php
$d=date("D");
if ($d=="Mon")
echo "Have a nice Monday!";
else
echo "Have a nice day!";
?>



<hr>
<h2>Exercise 3:</h2><br>
<?php
$d=date("D");
if ($d=="Mon")
echo "Today is Monday";
if ($d=="Tue")
echo "Today is Tuesday";
if ($d=="Wed")
echo "Today is Wednesday";
if ($d=="Thu")
echo "Today is Thursday";
if ($d=="Fri")
echo "Today is Friday";
if ($d=="Sat")
echo "Today is Saturday";
if ($d=="Sun")
echo "Today is Sunday";
?>



<hr>
<h2>Exercise 4:</h2><br>
<?php  
    echo "<h4>For loop</h4>";
    $name="Schahnaz-Isabel Westenberger<br>";
    for ($x = 0; $x <= 50; $x++) {
        echo "$name";
    }

    echo "<h4>While loop</h4>";
    $i=0;
    while($i<=50) {
        echo "$name";
        $i++;
    }

    echo "<h4>Do while loop</h4>";
    $k=0;
    do {
        echo "$name";
        $k++;
    } while ($k <= 50);
?>

<h2>Exercise 5</h2>
<?php
/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach( $numbers as $value )
{
echo "$value <br />";
}
?>

<h2>Exercise 6 - associative array</h2>
<?php
$characters = array(
"mickeymouse" => "Walt Disney",
"pokemon" => "Satoshi Tajiri",
"supermario" => "Shigeru Miyamoto"
);
echo "Creator of Mickey Mouse is ". $characters['mickeymouse'] . "<br />";
echo "Creator of Pokemon is ". $characters['pokemon']. "<br />";
echo "Creator of Super Mario is ". $characters['supermario']. "<br />";
?>

<h2>Exercise 6 - multidimensional array</h2>
<?php
$characters = array(
"mickeymouse" => array
(
"firstRelease" => 1929,
"publisher" => "Disney",
"developer" => "Les Clark"
),
"pokemon" => array
(
"firstRelease" => 1996,
"publisher" => "Nintendo",
"developer" => "Ken Sugimori"
),
"supermario" => array
(
"firstRelease" => 1985,
"publisher" => "Nintendo",
"developer" => "Nintendo EAD"
)
);

echo "First release of Mickey Mouse: " ;
echo $characters['mickeymouse']['firstRelease'] . "<br />";
echo "First release of Pokemon: " ;
echo $characters['pokemon']['firstRelease'] . "<br />";
echo "First release of Super Mario: " ;
echo $characters['supermario']['firstRelease'] . "<br />";

echo "Publisher of Mickey Mouse : ";
echo $characters['mickeymouse']['publisher'] . "<br />";
echo "Publisher of Pokemon : ";
echo $characters['pokemon']['publisher'] . "<br />";
echo "Publisher of Super Mario : ";
echo $characters['supermario']['publisher'] . "<br />";

echo "Developers of Mickey Mouse : " ;
echo $characters['mickeymouse']['developer'] . "<br />";
echo "Developers of Pokemon : " ;
echo $characters['pokemon']['developer'] . "<br />";
echo "Developers of Super Mario : " ;
echo $characters['supermario']['developer'] . "<br />";
?>

</div>



</body>
</html>

