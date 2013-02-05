		<?php 
		$myFile = "$hm/logFile.txt";
		$fh = fopen($myFile, 'a') or die("can't open file");
		$stringData = "\n===================================\nNew Session: ".date('Y-m-d H:i:s')."\n";
		fwrite($fh, $stringData);
		fclose($fh);
		?>