<!-- output -->

<?php
// space ship operator--------- <=>

$a =5;
$b = 8;

$result = $a <=> $b;

if($result == 1){
    echo "{$a} is greater than {$b}.";
}
elseif($result == 0 ){
    echo "{$a} is equal to {$b}.";
}
elseif($result == -1){
    echo "{$a} is small than {$b}.";
}

// null collase --------

// if show the first value if present eaither the second valure

// in ternary 
$default_lat = 23.5;
$default_lon = 555.4;

$uset_lat=55;

$lat = isset($uset_lat) ? $uset_lat : $default_lat;
echo "\n".$lat.PHP_EOL;

// in null-collase

$late = $uset_lat ?? $default_lon;
echo $late;