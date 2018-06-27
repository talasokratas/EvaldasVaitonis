<?php
$x = 53.49;
$y = 50;
var_dump((int)$x + $y);


$a = [3,5,8,3,12,9,13,4,5];
$count = count($a);
$max = $a[0];
for ($i = 1; $i < $count; $i++) {
    if ($a[$i] > $max) {
        $max =  $a[$i];
    }
}
echo $max;

$suma = 0;
for ($i = 0; $i < $count; $i++) {
    if ($i % 2 == 0) {
        $suma = $suma + $a[$i] ;
    }
}

echo "lyginiu indeksu masyvo elementu suma yra $suma";

$sum = 0;
for ($i = 0; $i < $count; $i = $i + 2) {
        $sum = $sum + $a[$i] ;
    }


echo " suma kitaip: $sum";
echo " nerikiuotas masyvas: ";
var_dump($a);

for ($n = 1, $k = $count; $k > $n; $k--) {
    for ($i = 0; $i < ($count - 1); $i++) {
    if ($a[$i] > $a[$i + 1] ) {
        $pagalbinis = $a[$i];
        $a[$i] = $a[$i + 1];
        $a[$i + 1] = $pagalbinis;
    } 
} 
}

echo " isrikiuotas masyvas: ";
var_dump($a); 

$daugiamatis = [[130,4,7,9],[35,34,29],[12,17,11]];
$count = count($daugiamatis);

for ($i = 0; $i < $count; $i++) {
    $daugmax = $daugiamatis[$i][0];
    $vidiniscount = count($daugiamatis[$i]);
    for ($j = 0; $j < $vidiniscount; $j++) {
        if ($daugiamatis[$i][$j] > $daugmax) {
         $daugmax = $daugiamatis[$i][$j];
        } 
        
    }   echo " eilutes max: ";
    var_dump($daugmax); 
}

$masyvas = [
    [3,4,6,4],
    [5,6,2,1],
    [1,4,2,1,]
];

echo "daugiamatis masyvas: ";
var_dump($masyvas); 

$ilgiausia_eilute = count($masyvas[0]);
for ($i = 0; $i < count($masyvas); $i++) {
    if ($ilgiausia_eilute < count($masyvas[$i])) {
        $ilgiausia_eilute = count($masyvas[$i]);
    }
}

for ($m = 0; $m < $ilgiausia_eilute; $m++) {
    $suma = 0;   
        for ($n = 0; $n < count($masyvas); $n++) {
        $suma = $suma + $masyvas[$n][$m];  
        }
    echo " stulpeliu suma: ";
    var_dump($suma); 
} 

$max_suma = 0; 
for ($m = 0; $m < $ilgiausia_eilute; $m++) {
    $suma = 0;  
        for ($n = 0; $n < count($masyvas); $n++) {
        $suma = $suma + $masyvas[$n][$m];  
        }
    if ($suma > $max_suma) {
        $max_suma = $suma;
    }
}
echo " didziausia stulpeliu suma: ";
var_dump($max_suma); 



$mas = [
    [2,4,6],
    [0,4,1],
    [8,5,9]
    ];
    $istrizaines_suma = 0;
    for ($m = 0; $m < count($mas); $m++){   
    $istrizaines_suma = $istrizaines_suma + $mas[$m][$m];  
    } 
echo "pagrindines istrizaines suma: ";
var_dump($istrizaines_suma); 
echo " paskutinis redagavimas";

 
