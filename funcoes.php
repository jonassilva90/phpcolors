<?php


function darkenColor($color, $ratio = 0.8)
{
    $red = substr($color, 1, 2);
    $green = substr($color, 3, 2);
    $blue = substr($color, 5, 2);

    $red = intval(hexdec($red) * $ratio);
    $green = intval(hexdec($green) * $ratio);
    $blue = intval(hexdec($blue) * $ratio);

    if ($red > 255) {
        $red = 255;
    }
    if ($green > 255) {
        $green = 255;
    }
    if ($blue > 255) {
        $blue = 255;
    }
    if ($red < 0) {
        $red = 0;
    }
    if ($green < 0) {
        $green = 0;
    }
    if ($blue < 0) {
        $blue = 0;
    }

    $color = '#' . str_pad(dechex($red), 2, "0", STR_PAD_LEFT);
    $color .= str_pad(dechex($green), 2, "0", STR_PAD_LEFT);
    $color .= str_pad(dechex($blue), 2, "0", STR_PAD_LEFT);
    return $color;
}

function lightColor($color, $ratio = 0.8)
{
    return darkenColor($color, $ratio + 1);
}

function invertColor($color)
{
    $red = substr($color, 1, 2);
    $green = substr($color, 3, 2);
    $blue = substr($color, 5, 2);

    $x = (hexdec($red) + hexdec($green) + hexdec($blue)) / 3;
    $x = intval($x) > 170 ? 0 : 255;


    $color = '#' . str_pad(dechex($x), 2, "0", STR_PAD_LEFT);
    $color .= str_pad(dechex($x), 2, "0", STR_PAD_LEFT);
    $color .= str_pad(dechex($x), 2, "0", STR_PAD_LEFT);
    return $color;
}
