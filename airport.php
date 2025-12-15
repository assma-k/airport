<?php
function defilement($chaines){
    $long = strlen($chaines);
    for($j = 0; $j <= 30 ; $j++){
    for($i = 0; $i < $long; $i++){
        echo substr($chaines, $i) . substr($chaines, 0, $i) . " \n";
        usleep(500000);

    };
};
}
    $chaines = $argv[1];
    defilement($chaines);
