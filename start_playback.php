<?php
    $fifo = fopen("/tmp/cmd", 'w'); 

    fwrite($fifo, "."); 
?>