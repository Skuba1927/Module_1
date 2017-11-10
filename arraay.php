<?php
//1.4.3.2
$randArray = [];
$i = 0;
while ($i <= 10) {
    $randArray[] = rand(0,1);
    if ($randArray = [$i]) {
        echo "jump";
    } else {
        echo "drowned";
    }
    $i++;
}

//1.4.3.3

$array = [];
for ($i =1; $i<6; $i++) {
    $array[$i] = md5(rand(100, 110));
}
$value = 100;
$i = md5($value);
do {
    if (isset($array[$i])) {
        echo "key exic";
    } else {
        echo $i;
    }
    $i = md5($value++);
} while($value<110);
