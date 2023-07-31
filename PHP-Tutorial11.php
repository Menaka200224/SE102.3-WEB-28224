<html>
<body>
<?php
//1.
$x=6;
$y=4;

echo("Sum: ".$x+$y."<br>");
echo("Difference: ".$x-$y."<br>");
echo("Product: ".$x*$y."<br>");
echo("Division: ".$x/$y."<br>");

echo("<br>");

//2.
for($i=5;$i<16;$i++)
{
echo($i."<br>");
}
echo("<br>");
echo("<br>");

//3.
$unit=33;
if($unit<=50)
{ 
echo("Electricity bill amount=Rs.".$unit*(3.50));
}
else if($unit<=100)
{ 
echo("Electricity bill amount=Rs.".$unit*(4.00));
}
else if($unit<=150)
{ 
echo("Electricity bill amount=Rs.".$unit*(5.20));
}
else
{ 
echo("Electricity bill amount=Rs.".$unit*(6.50));
}
echo("<br>");
echo("<br>");

//4.
$number=1;

switch($number)
{
case 1:echo("Monday");break;
case 2:echo("Tuesday");break;
case 3:echo("Wendesday");break;
case 4:echo("Thursday");break;
case 5:echo("Friday");break;
case 6:echo("Saturday");break;
case 7:echo("Sunday");break;
}
echo("<br>");
echo("<br>");

//5.
$fruits=array("Mango","Apple","Orange","Avacado","Pineapple");

foreach($fruits as $s)
{
echo($s."<br>");
}

?>
</body>
</html>