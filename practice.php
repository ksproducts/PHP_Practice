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
<?php

function createCombination($n, $r)
{
	if ($n < $r) {
		return array();
	}
	if (!$r) {
		return array(array());
	}
	if ($n == $r) {
		return array(range(0, $n - 1));
	}
	
	$return = array();
	$n2 = $n - 1;
	//(n-1)Crはほしい組み合わせの一部
	foreach (createCombination($n2, $r) as $row) {
		$return[] = $row;
	}
	//(n-1)C(r-1)にn-1を追加する。
	foreach (createCombination($n2, $r - 1) as $row) {
		$row[] = $n2;
		$return[] = $row;
	}
	return $return;
}

$start = microtime(true);
$ret = createCombination(6,3);

$replace_from = array(0, 1, 2, 3, 4, 5);
$replace_to = array("A","B","C","D","E","F");

printf("%f sec.\n", microtime(true) - $start);
printf("%d row.\n", count($ret));
sort($ret);
foreach ($ret as $value) {
	echo '[', implode(',', $value), ']', "\n";
	print_r(str_replace($replace_from, $replace_to, $value));
}

?>
<?

function myFact($fact)
{
    $f = 1;
    while($fact >= 1) {
        $f = $f * $fact;
        $fact--;
    }
    return $f;
}

$n = 6;
$r = 3;

echo myFact($n).PHP_EOL;
echo myFact($r).PHP_EOL;

echo myFact($n) / myFact($r) / $r;
echo PHP_EOL;

?>
