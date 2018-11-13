<?php

$gen = (function() {
    yield 1;
    yield 2;
    // 3 is only returned after the generator has finished
    return 3;

})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;

// Outputs 1 2 3

