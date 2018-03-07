<?php 

// function testing

function sobiranje($a, $b) {

	if(is_int($a) && is_int($b)) {
		
	return $a + $b;
	}

	return null;

}

// echo sobiranje('2', '4');

function test_sobiranje(){
	$test_data = [
		['a' => 2, 'b' => 4, 'expected' => 6],
		['a' => 5, 'b' => 6, 'expected' => 11],
		['a' => -2, 'b' => 4, 'expected' => 1],
		['a' => 2, 'b' => -4, 'expected' => -2],
		['a' => '2', 'b' => -4, 'expected' => null],
		['a' => '2', 'b' => 4, 'expected' => null],
		['a' => '2', 'b' => '4', 'expected' => null],
		['a' => 2, 'b' => '*4', 'expected' => null]
	];


foreach ($test_data as $data) {
	if(sobiranje($data['a'], $data['b']) === $data['expected']) {
		echo '<b style="color: green">Passed!</b>'; }
		else {
		echo '<b style="color: red">Failed!</b>';
		}

		echo '(Input: '.$data['a'].', '.$data['b'].') ';
		echo '(Output: '.sobiranje($data['a'], $data['b']).') ';
		echo '(Expected: '.$data['expected'].') ';
		echo '<br/>';
	}
}


test_sobiranje();


echo '<br/>';

// 888888888888888888888888888888888

// GENERIC TESTING FUNCTION

function ftest($fn, $data){
	foreach ($data as $d) {

		$res = call_user_func_array($fn, $d['input']);

		if ($res === $d['expected']) {
			echo '<b style="color: green">Passed!</b>';
		} else {
			echo '<b style="color: red">Failed!</b>';
		}

		echo '(Input: '.implode(', ', $d['input']).') ';
		echo '(Output: '.$res.') ';
		echo '(Expected: '.$d['expected'].') ';
		echo '<br/>';
	}
}

$test_data = [
		['input' => [2, 4], 'expected' => 1],
		['input' => [5, 6], 'expected' => 11],
		['input' => [-2, 4], 'expected' => 2],
		['input' => [2, -4], 'expected' => -2],
		['input' => ['2', -4], 'expected' => null],
		['input' => ['2', 4], 'expected' => null],
		['input' => ['2', '4'], 'expected' => null],
		['input' => [2, '*4'], 'expected' => null]
	];


ftest('sobiranje', $test_data);



function concatenate($a, $b, $c){
	return $a.$b.$c;
}

$test_data_cnc = [
['input' => ['as', 'df', 'gh'], 'expected' => 'asdfgh'],
['input' => ['we', 'rt', 'yu'], 'expected' => 'wertyu'],
['input' => ['as', 'df', 'gh'], 'expected' => 'as11gh'],
['input' => ['as', 'df', 'gh'], 'expected' => 'as2h']
];

echo '<br/>';

ftest('concatenate', $test_data_cnc);



 ?>
