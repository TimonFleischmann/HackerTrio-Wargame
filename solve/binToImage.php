<?php
$width=$argv[2];
$height=$argv[3];
$image = imagecreate($width,$height);
$background_color = imagecolorallocate($image,  255, 255, 255);

$color=imagecolorallocate($image, 0, 0, 0);
$wCounter=0;
$hCounter=0;
$fh = fopen('tmpSound.kurz','r');
while ($line = fgets($fh)) {
    if($wCounter==$width){
        $wCounter=0;
        $hCounter+=1;
    }

  if (strpos($line, "1")!== false)
  {imagesetpixel($image,$wCounter,$hCounter,$color);
  }
  $wCounter += 1;
}
imagepng($image, "1-".$argv[1].".png");

$width=$argv[3];
$height=$argv[2];
$image = imagecreate($width,$height);
$background_color = imagecolorallocate($image,  255, 255, 255);

$color=imagecolorallocate($image, 0, 0, 0);
$wCounter=0;
$hCounter=0;
$fh = fopen('tmpSound.kurz','r');
while ($line = fgets($fh)) {
    if($wCounter==$width){
        $wCounter=0;
        $hCounter+=1;
    }

  if (strpos($line, "1")!== false)
  {imagesetpixel($image,$wCounter,$hCounter,$color);
  }
  $wCounter += 1;
}
imagepng($image, "2-".$argv[1].".png");
?>