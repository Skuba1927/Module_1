<?php

//Lab Work 1.2.2.2
$string = "Hello";
$array = [1, 3, 3, 54];
$integer = 1;
$float = 2.3;
class className {

}
$object = new className;
$null = null;
$bool = false;
var_dump($string);
var_dump($array);
var_dump($integer);
var_dump($float);
var_dump($object);
var_dump($null);
var_dump($bool);

//Lab Work 1.2.2.2
$bool = true;
$int = intval($bool);
var_dump($int);
echo "<br />";

$int = 1;
$bool = boolval($int);
var_dump($bool);
echo "<br />";
$int = 0;
$bool = boolval($int);
var_dump($bool);
echo "<br />";
$int = -1;
$bool = boolval($int);
var_dump($bool);
echo "<br />";

$int = 3;
$float = floatval($int);
var_dump($float);
echo "<br />";
$float = 3.4;
$int = intval($float);
var_dump($int);
echo "<br />";

$string = "hello";
$int = intval($string);
var_dump($int);
echo "<br />";
$int = 23;
$string = strval($int);
var_dump($string);
echo "<br />";

$array = [1, 3, 4,45];
$string = strval($array);
var_dump($string);
echo "<br />";
$string = "hello";
$arr = array($string);
var_dump($arr);
echo "<br />";

class foo {};
$obj = new foo;
$arr = array($obj);
var_dump($arr);
echo "<br />";

$arr = [1, 3, 4];
$obj = (object)$arr;
var_dump($obj);
echo "<br />";echo "<br />";echo "<br />";echo "<br />";


//Lab Work 1.2.2.3

$str = "12";
$int = 11;
$result = $str + $int;
var_dump($result);
echo "<br />";

$str = "hello";
$int = 11;
$result = $str + $int;
var_dump($result);
echo "<br />";

$str = "hello";
$int = "hi";
$result = $str + $int;
var_dump($result);
echo "<br />";

$str = 4.5;
$int = 5;
$result = $str + $int;
var_dump($result);
echo "<br />";



//Lab Work 1.2.2.4

$var = "Some variable";

echo 'variable = $var';
echo "<br />";
echo 'character escaping = \n';
echo "<br />";
echo "variable = $var";
echo "<br />";
echo "character escaping = \n";
echo "<br />";
echo <<<HEREDOC
hello 
HEREDOC;
echo "<br />";
echo <<<'HEREDOC'
hello 
HEREDOC;
echo "<br />";
echo "<br />";
echo "<br />";


//Lab Work 1.2.3

print_r($_SERVER);
echo "<br />";
print_r($_GET);
echo "<br />";
echo "<br />";
echo "<br />";



//Lab Work 1.2.4


echo "Rout to the scripts - ".__FILE__;
echo "<br />";
echo "имя файла - ".$_SERVER['PHP_SELF'];
//я так понимаю тут задание на константы, но написано вывести имя файла, и наверно в перовм нужно __DIR__,
//а сдесь __FILE__ но он выводит весь путь что лучше в первом, а сдесь через массив можно вывести само имя.
//это почему так решил сделать=)$_SERVER['PHP_SELF']
echo "<br />";
echo "number of string - ".__LINE__;
echo "<br />";
define('MY_CONST', 'It is value of my constant');
echo MY_CONST;










