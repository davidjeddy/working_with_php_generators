<?php

function gen_one_to_three() {
	    for ( $i = 1; $i <= 3; $i++ ) {
		            yield $i;
			            yield 'abc';
			        }
}

$generator = gen_one_to_three();

foreach ( $generator as $value ) {
	    echo "$value ";
}


echo "\nAbove will output '1 abc 2 abc 3 abc'. \n";

