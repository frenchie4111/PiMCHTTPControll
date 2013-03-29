<?php
    $fifo = fopen("cmd", 'w'); 

    fwrite($fifo, "p"); 
?>