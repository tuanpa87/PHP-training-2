<?php //echo "hello world"; ?>
<?php 
// $name = "John Doe";
// echo "Hello, $name";
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    header {
      padding: 2rem;
      background-color: #e3e3e3;
      text-align: center
    }
  </style>
</head>
<body>
  <header>
    <h1>
      <?php
        $name = $_GET['name'];
        echo "Hello, $name"
      ?>
    </h1>
  </header>
   
</body>
</html>