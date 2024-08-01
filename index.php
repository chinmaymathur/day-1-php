<?php
echo "hello\n";
echo 5+9 ;
echo "College\n";
?>

<?php
$name = "harry";
$income = "200";
echo "This guy is $name and his income is Rs. $income<br><br> ";
echo "$name is a good boy<br><br> ";
echo "he is the gangstar <br>";

$friends = array("apurv","shubham","abhay","kunal","atuly");
echo var_dump($friends);
echo "<br>";
echo$friends[0];
echo "<br>";
echo$friends[1];
echo "<br>";
echo$friends[2];
echo "<br>";
echo$friends[3];

echo "<br>";

echo str_repeat($name,7000);

?>


<?php
/* for joining 2 string we use of dot operator*/ 
$name = "i am a developer";
echo $name;
echo "<br>";
echo "The length of "."my string is " .strlen($name);
echo strrev($name);
echo"<br>";

$a = 45;
$c = 100;
if ($a > $c){
    echo "hello bachcho";
}
else{
    echo "hello sir ";
}
$age = 5;
if($age>18){
    echo "you can drink alcohol";
}
else if ($age>13){
    echo "you can drink only tea";
}
else{
    echo "you can drink both ";
}

function processMarks($marksArr){
    $sum =  0;
    foreach($marksArr as  $value){
    $sum += $value;
    }
    return $sum;

}

$harry = [45,65,85,89,8,74];
$sumMarks = processMarks($harry);


$chinmay = [45,65,85,89,8,70];
$sumMarkschinmay = processMarks($chinmay);

echo "Total marks scored by harry is $sumMarks<br>";
echo " Total marks scored by chinmay is $sumMarks<br>";


?>



