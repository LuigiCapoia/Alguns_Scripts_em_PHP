<?php
$a = 1;

// while ($a <= 10) {
//     echo "$a". PHP_EOL;
//  $a = $a +1;
// }

// do {
//     echo "$a". PHP_EOL;
//     $a = $a +1;
// } while ($a <= 10);

// for ($i=0; $i <=10 ; $i++) { 
//     echo "$i". PHP_EOL;
// }


for ($i = 0; $i <= 10; $i++) {
    if ($i == 6) {
        continue;  // break para
    }

    echo "$i" . PHP_EOL;
}
