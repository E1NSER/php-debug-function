function debugVar($var, $exit = false) {
	echo '<pre style="font-size:11px;">';
 
	if (is_array($var) || is_object($var)) {
		echo htmlentities(print_r($var, true));
	} elseif (is_string($var)) {
		echo "string(" . strlen($var) . ") \"" . htmlentities($var) . "\"\n";
	} else {
		var_dump($var);
	}
 
	echo "\n</pre>";
 
	if ($exit) {
		exit;
	}
}