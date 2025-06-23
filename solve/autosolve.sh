#!/bin/sh
for f in *.wav;do
	hexdump -C $f > tmpSound.txt;
	php hexToBin.php $f;
	lines="$(cat tmpSound.kurz | wc -l )";
	echo $lines;
	factors="$(php primefactors.php $lines)";
	echo "$factors";
	php binToImage.php $f $factors;
done;
