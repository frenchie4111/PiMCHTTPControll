<?php
echo posix_getpwuid(posix_getuid())['name'];
?>
