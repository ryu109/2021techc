<?php
  $exif = exif_read_data('./image/oshiro.jpeg');
?>

<img src="./image/oshiro.jpeg" style="width: 200px"><br>
この画像のexifは
<?= nl2br(print_r($exif, true)); ?>
