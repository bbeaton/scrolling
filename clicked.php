<?
	//write to log file
	$myFile = "$hm/testFile.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = microtime(true)." - Link Clicked\n";
	fwrite($fh, $stringData);
	fclose($fh);
?>