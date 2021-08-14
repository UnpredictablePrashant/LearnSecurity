<?php
  if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
  echo $thelist;
  echo file_get_contents("index.php");
  readfile("fr_lang.php");
  readfile("index.php");
?>
