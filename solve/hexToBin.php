<?php
$output=fopen("tmpSound.kurz","w");
$fh = fopen("tmpSound.txt",'r');
$lines="";
while ($line = fgets($fh)) {
	  $line=substr($line,-19);
	    $line=str_replace(" ","",$line);
	    $line=str_replace('|channel/UCQdVTXX|', '2', $line) ;
	      $line=str_replace('|https://www.yout|', '1', $line) ;

	      if ($line == 1 || $line == 2)
		      	$lines.=$line;
}
fwrite($output, $lines);

fclose($fh);
fclose($output);

?>


