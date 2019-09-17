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
   <ul>
      <?php foreach ($names as $name):  ?>
        <li><?= $name; ?></li>
      <?php endforeach; ?>
   </ul>
  </header>
   
</body>
</html>