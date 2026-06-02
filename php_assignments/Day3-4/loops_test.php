<?php
echo "<h3>For Loop</h3>";

for ($i = 1; $i <= 5; $i++)
{
   echo $i . "<br>";
}

echo "<h3>While Loop</h3>";

$a = 5;

while ($a >= 10) 
{
    echo $a . "<br>";
    $a++;
}

echo "<h3>Do While Loop</h3>";

$b = 1;
do 
{
    echo $b . "<br>";
    $b++;
} while ($b <= 5);

echo "<h3>Foreach Loop</h3>";

$days = ["monday", "tuesday", "wednesday", "sunday"];
foreach ($days as $day)
{
    echo $day . "<br>";
}
?>
