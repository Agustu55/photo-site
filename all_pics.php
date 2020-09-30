<?php
  echo "<p> running php </p>"
  $files = scandir('images/');
  echo "<P> $files</p>"
  foreach($files as $file) {
  if($file !== "." && $file !== "..") {
      echo "<p> adding image $file </p>"
      echo "<img src='$file' />";
  }
}
?>
