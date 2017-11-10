<?php

//Lab 1.4.2.2

$array100 = range(1, 100);
shuffle($array100);
//var_dump($array100);
function filterNumbers($var) {
    return ($var > 25 && $var < 32);
}
$arrayRes = array_filter($array100, "filterNumbers");
echo "<pre>";
print_r($arrayRes);
echo "</pre>";
function arrayDegree($var) {
    return $var * $var;
}
$arrayRes = array_map("arrayDegree", $arrayRes);
echo "<pre>";
print_r($arrayRes);
echo "</pre>";

//Lab 1.4.3.1
//первое я посмотрел, я вообще не вижу связи между решением и задание, та и решене безсмысленное
$min = isset($argv[1]) ? (int)$argv[1] : 0;
$max = isset($argv[2]) ? (int)$argv[2] : 0;

$evenNumbers = [];
for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 === 0) {
       array_push($evenNumbers, $i);
    }
}

echo implode(',', $evenNumbers);


//Lab 1.4.3.4

$arrayExample = [23, 56, -3, 65, 256, 666, 234, 32];
$arrayRes4 = array_chunk($arrayExample, 2);
echo "<pre>";
print_r($arrayRes4);
echo "</pre>";
$asocArray = [];
foreach ($arrayRes4 as $val ) {

    $firstCheck = "--" == substr($val[0],0, 2 );
    $secondCheck = "-" == substr($val[0],0, 1 ) && strlen($val[0]) == 2;
    if ($firstCheck || $secondCheck) {
        $key = $val[0];
        $asocArray[$key] = array_pop($val);
    }
}
echo "<pre>";
print_r($asocArray);
echo "</pre>";

//Lab 1.4.4

$employees = [
    [
        'name' => 'Clark Kent',
        'age' => 22,
        'skills' => ['PHP', 'Java', 'C#']
    ],
    [
        'name' => 'Steve Stifler',
        'age' => 21,
        'skills' => ['PHP', 'JS', 'CSS', 'HTML']
    ],
    [
        'name' => 'Bruce Wayne',
        'age' => 35,
        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
    ],
    [
        'name' => 'Peter Parker',
        'age' => 18,
        'skills' => ['PHP', 'C', 'Pascal']
    ]
];

function compareSkills(array $array, array $skills) {
    for ($i=0; $i < count($skills); $i++) {
        if (false === in_array( $skills[$i], $array)){
            return false;

        }
    }
    return true;
}

function searchSkills($array, $skills) {
    foreach ($array as $value) {
        if (compareSkills($value['skills'], $skills)) {
            echo "Name: ".$value['name'].". Age = ".$value['age']. ". Skills: ".implode( ", ", $value['skills']);
        }
    }
}
$skillsSearch = ["C", "PHP", "Pascal"];
searchSkills($employees, $skillsSearch);
echo "<br/>";













