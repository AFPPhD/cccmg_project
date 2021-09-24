<?php

function getAllFiles($directory, $recursive = true) {
     $result = array();
     $handle =  opendir($directory);
     while (false !== ($datei = readdir($handle))) // To guard against file called "0", which would result in readdir() returning false (as well as for no more 
     {                                             // files to read), explicitly test return value not equal to false
          if (($datei != '.') && ($datei != '..')) // Ignore current and one level up directories for finding files to compare
          {
               $file = $directory.$datei;
               if (is_dir($file)) {
                    if ($recursive) {
                         $result = array_merge($result, getAllFiles($file.'/'));
                    }
               } else {
                    $result[] = $file;
               }
          }
     }
     closedir($handle);
     return $result;
}

function getHighestFileTimestamp($directory, $recursive = true) {
     $allFiles = getAllFiles($directory, $recursive);
     $highestKnown = 0;
     foreach ($allFiles as $val) {
          $currentValue = filemtime($val);
          if ($currentValue > $highestKnown) $highestKnown = $currentValue;
     }
     return $highestKnown;
}

?>