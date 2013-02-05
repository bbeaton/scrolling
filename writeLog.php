<?php
	$text = $_POST['text'];
	//write to log file
	$myFile = "$hm/logFile.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = date('H:i:s')." - CLICKED - ".$text."\n";
	fwrite($fh, $stringData);
	fclose($fh);
?>