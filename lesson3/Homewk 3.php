
<?php

echo "Задание 1";
echo "__________________________________________<br>";

$a=0;
while($a++ < 100) {
	if($a%3==0) {
echo $a . '<br>';
	}
}

echo "<br>";
echo "<br>";




echo "Задание 2";
echo "__________________________________________<br>";

    $n = 10;
    $i = 0;

    function number($i)
    {
        if ($i == 0) {
        echo $i . " - это ноль <br />" ;
}
        elseif ($i % 2 != 0) {
        echo $i . " - нечетное число <br />";
}
        elseif ($i % 2 == 0) {
        echo $i . " - четное число <br />";
}
    }
    
    do 
    {
        number ($i);
        $i++;
    } while ($i <= $n);


echo "<br>";
echo "<br>";



echo "Задание 3";
echo "__________________________________________<br>";

$dist =  [
    'Московская область' => ['Королев', 'Тушино', 'Жуковский'], 
    'Ленинградская область' => ['Санкт-Петербург', 'Пушкин', 'Красное село']];
foreach ($dist as $key => $value) {
    echo $key . ": <br>";
 foreach ($value as $key => $value) {
    echo $value . "<br>";
 }
}

echo "<br>";
echo "<br>";




echo "Задание 4";
echo "__________________________________________<br>";

function RusToEng($str){
$let = array(
"а" => "a", 
"б" => "b", 
"в" => "v", 
"г" => "g", 
"д" => "d", 
"е" => "e", 
"ё" => "yo",
"ж" => "zh", 
"з" => "z", 
"и" => "i", 
"й" => "y", 
"к" => "k", 
"л" => "l", 
"м" => "m",
"н" => "n", 
"о" => "o", 
"п" => "p", 
"р" => "r", 
"с" => "s", 
"т" => "t", 
"у" => "u",
"ф" => "f", 
"х" => "h", 
"ц" => "ts", 
"ч" => "ch", 
"ш" => "sh", 
"щ" => "s'h", 
"ъ" => "",
"ы" => "i", 
"ь" => "'", 
"э" => "e", 
"ю" => "yu", 
"я" => "ya", 
" " => " "
);
 
$word = strtr($str, $let);
echo "$word \r\n"; 
};
 
RusToEng("мантра");

echo "<br>";
echo "<br>";




echo "Задание 5";
echo "__________________________________________<br>";

function replace ($str) {
    return strtr($str," ", "_");
  }
  
   echo replace("master of puppets");

echo "<br>";
echo "<br>";




echo "Задание 6";
echo "__________________________________________<br>";

$menu = [
    
    'header' => ['CompanyName', 'Search', 'Label'],
    'main' => ['Article', 'Wayne', 'Section'],
    'footer' => ['About us', 'Nav', 'Year']
];

echo '<ul>';
foreach ($menu as $key => $val){ ?>
   <li>
       <?php echo $key; ?>
           <ul>
               
               <?php 
               
               foreach ($val as $item) { ?>
               <li><?=$item; ?></li>
               <?php } ?>
           </ul>
       
   </li>
    <?php }
    echo '<ul>';



?>




