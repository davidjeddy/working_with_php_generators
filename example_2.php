<?php

function  counter($num) {
    for ($i = 1; $i < $num; $i++) {
        yield $i;
    }
}

foreach (counter(PHP_INT_MAX) as $count) {
	    echo "Yield: " . $count . PHP_EOL;
}
