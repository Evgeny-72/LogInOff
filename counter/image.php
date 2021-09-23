<?php
    $i = imageCreate(300, 300);
    $color = imageColorAllocate($i, 255, 255, 0);
    imageFilledRectangle($i, 0, 0, imageSX($i), imageSY($i), $color);
    Header("Content-type: image/jpeg");
    imageJpeg($i);
    imageDestroy($i);