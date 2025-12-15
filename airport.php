<?php
function defilement($chaines, $time) {
   echo "choix couleur :\n";
   echo "1 : rouge\n";
   echo "2 bleu\n";
   $choix = trim(fgets(STDIN));


    $long = strlen($chaines);
    if($choix == 1){
    for ($j = 0; $j <= $time ; $j++) {

        for ($i = 0; $i < $long; $i++) {
            echo "\033[31m" . "\r" . substr($chaines, $i) . substr($chaines, 0, $i) ."\033[0m" ;
            usleep(100000);

            };
            
        };
    }
     elseif($choix == 2) {
        for ($j = 0; $j <= $time ; $j++) {

        for ($i = 0; $i < $long; $i++) {
            echo "\033[34m" . "\r" . substr($chaines, $i) . substr($chaines, 0, $i) ."\033[0m" ;
            usleep(100000);

            };
            
        };
     } 
}

$time = $argv[2];
$chaines = $argv[1];
defilement($chaines, $time);

