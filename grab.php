<?php
  header("Content-Type:plain/text");

  $url = $_GET['u'];
  $content = file_get_contents($url);
  $data = json_decode($content);

  echo $content;

?>
