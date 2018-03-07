<?php
  if(isset($_GET['name'])) {
    echo $_GET['name'];
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Practice</title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <div class="">
        <label for="Name">Name</label>
        <input type="text" name="Name" value="">
      </div>
      <div class="">
        <label for="email">Email</label>
        <input type="text" name="email" value="">
      </div>
    </form>
  </body>
</html>
