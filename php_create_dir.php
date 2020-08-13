<?php
 $dir = 'js/archive';

 // create new directory with 755 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
 if (!file_exists($dir)) {
  mkdir ($dir, 0755);
 }

 file_put_contents($dir.'/test.txt', 'Hello File');

?>