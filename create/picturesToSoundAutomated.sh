#!/bin/bash
for f in *.png;do
	php imageToBin.php $f;
	python createAudio.py $f.erg;
done;
