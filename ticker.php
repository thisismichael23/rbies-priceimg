<?php
    $input = file_get_contents('https://c-cex.com/t/rbies-btc.json');
    $rbies = json_decode($input);
    $width = 150;
    $height = 25;
    $text = $rbies->ticker->lastprice." BTC";
    $fontsize = 5;

    $img = imagecreate($width, $height);

    // Transparent background
    $black = imagecolorallocate($img, 0, 0, 0);
    imagecolortransparent($img, $black);

    // Red text
    $red = imagecolorallocate($img, 255, 0, 0);
    imagestring($img, $fontsize, 0, 0, $text, $red);

    header('Content-type: image/png');
    imagepng($img);
    imagedestroy($img);
?>
