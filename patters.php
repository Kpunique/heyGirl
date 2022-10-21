
  <?php
$k = 1;
for ($i=0; $i<5; $i++){
    for($j=1; $j<=$i; $j++){
        echo $k." ";
        $k++;
    }
    echo "<br>";
}


function starPattern($num){
    for ($i=0; $i < $num; $i++){
        for ($j = 0; $j<= $i; $j++){
            echo "* ";
        }
        echo "<br>";
    }
}

$num = 5;
starPattern($num);

//THE ANSWER
$cars=array("Volvo","BMW","Toyota"); 

$carsCount = count($cars);

if ($carsCount == 1) {
    $sentence = $cars[0] . '.';
} else {
    $partial = array_slice($cars, 0, $carsCount-1);
    $sentence = implode(', ', $partial) . ' and ' . $cars[$carsCount-1];
}

print_r($partial);
echo '</br>';
echo $sentence;



//array: Key(location) => [capacity,attendees] 
$venues = array(
    'Cantina' =>[100,20],
    'Dorisa' => [74,74],
    'The Max' => [98,100],
    'Maclauren\'s' => [53,127],
    'The bananna stand' =>[2,0]

);

foreach($venues as $name => $numbers){
    echo $name.'-'.check_capacity($numbers[0],$numbers[1])."</br>";
}

function check_Capacity($capacity, $attendees = 0){
if ($attendees < $capacity){
    return "you can buy more tickets.";
    
}
return "no more tickets available";
}

/* 
$a = array("Lions", "Tigers", "Bears");


for ($x = 0; $x <= count($a) - 1; $x++) {
    
    $arrayString = implode(",",$a);


    
    echo $arrayString; 

    $last = array_pop($a);

    echo $a.",";
    $array_string = implode(", ", $a);
}

echo "and" . $last;  */

//WHEN YOU FAIL YOU TRY TRY AGAIN
 echo "the tech interview question that started it all";
$newArray = array("Bitches","Money","Code","Fun");

$count = count($newArray);

$part1 = array_slice($newArray,0,$count-1);
$sentence = implode(",",$part1) . ' and ' . $newArray[$count-1];

echo $sentence;
  ?>