<?php

for($i = 1; $i <=10; $i++) {
    //echo $i;
    echo PHP_EOL;
    for($j=0;$j<$i;$j++) {
        echo "*";
    }
}
echo PHP_EOL;

//--multiple steping or multiple assignment----
for($i=10, $j=1; $i>0; $i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}

 // while loop

$i= 0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;

// do -----while ---------loop

$i=0;
do{
    $i++;
    echo "&".PHP_EOL;
}while($i<=10);
echo PHP_EOL;

// ---------- Go to ------------
$i=0;
a:$i++;
echo $i.PHP_EOL;
if($i<10) goto a;

// ------factorial ---------
$n=8;
for($j = $n, $fact=1; $j>0; $j--){
     $fact *=$j;
}
printf("Factorial of %d is %d.\n",$n,$fact);