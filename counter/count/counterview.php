<?php
    $count = implode('', file('count/log.txt'));
    $count++;
    $file = file_put_contents('count/log.txt', $count);






