<?php
for ($i=1; $i<=100 ; $i++) {
	if($i%3==0 && $i%5==0){
		$nilai[$i] = "foobar";
	} elseif ($i%3==0) {
		$nilai[$i] = "foo";
	} elseif ($i%5==0) {
		$nilai[$i] = "bar";
	} else{
		$nilai[$i] = $i;
	}
}

print_r($nilai);


