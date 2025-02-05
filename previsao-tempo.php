<?php 

$temperatura = 20;
$chuva = true;

if($temperatura > 25){
    print 'O dia esta ensolarado';
}
    else if ( $temperatura < 25 && $chuva == true){
    print 'O dia esta chuvoso';
} 

    else if ($temperatura < 25){
    print 'O dia esta nublado';
}

