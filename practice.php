<?php

	function make_generator()
	{
		for($i = 1; $i <= 10; $i++) {
			if($i % 2 == 0) yield $i;
		}
	}

	$generator = make_generator();
	foreach($generator as $k => $v) {
		echo $k." => ".$v.PHP_EOL;
	}

?>
