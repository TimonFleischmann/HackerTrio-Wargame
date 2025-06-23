<?php
print_r($argv);
$resource=imagecreatefrompng($argv[1]);
$text1="";
$width = imagesx($resource);
$height =imagesy($resource);
for($y = 0; $y < $height; $y++) {
    for($x = 0; $x < $width; $x++) {
    $color=imagecolorat($resource,$x,$y);
    if($color==0){
        $text1.= "0\n";
        continue;
}else{
        $text1.= "1\n";
        continue;
}
    }
}
file_put_contents($argv[1].".erg", $text1);

?>
