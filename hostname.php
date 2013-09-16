<?php
//preamble: use this handy trick in your scripts when you get
//notifications from various places and need to track them down
//to a source machine. :D

$host = php_uname('n');
?>

<html>
  <head>
     <title>PHP Test</title>
  </head>
  <body>
     <?php echo "<p>Hello World, from $host</p>"; ?>
  </body>
</html>