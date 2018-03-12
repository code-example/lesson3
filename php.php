<?php
	function strings_gen(string $str) : array {
		$text = explode("\n", $str);

		foreach($text as $val) { 
			$strings[] = $val;
			$arr = explode(' ', $val);
			shuffle($arr);
			$strings[] = implode(' ', $arr);
		}
		shuffle($strings);
		return $strings;
	}
	function main_function(string $str) { 
		foreach($arr = strings_gen($str) as $val)
			echo $val.'<br>';

		usort($arr, function($a, $b) { 
			return explode(' ', $a)[1]<=>explode(' ', $b)[1]; });
		echo "<br><br>";
		foreach($arr as $val)
			echo $val.'<br>';
	}
	if(isset($_POST['_area']))
		main_function($_POST['_area']);
	else include("index.html");
?>
