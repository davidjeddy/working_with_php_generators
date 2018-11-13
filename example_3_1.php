<?php

function printer() {
    
	echo "I'm printer!". PHP_EOL;
    
	while (true) {
        	echo yield . PHP_EOL;
	}
}

$printer = printer();

$printer->send('Hello world!');
$printer->send('Bye world!');


// Outputs I’m a printer, Hello world!, Bye world!

