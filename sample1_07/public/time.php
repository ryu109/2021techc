<?php

$now = new \DateTime("now");
?>
<!DOCTYPE html>
<head>
</head>
<body>
  現在の日時は<br>
  <?php echo($now->format('Y-m-d H:i:s')); ?>
</body>
