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
      /* text-align: center */
    }
  </style>
</head>
<body>
  <header>
   <ul>
      <li><strong>Name: </strong><?= $task['title']; ?></li>
      <li><strong>Due Date: </strong><?= $task['due']; ?></li>
      <li><strong>Person Responsible: </strong><?= $task['assigned_to']; ?></li>
      <li><strong>Name: </strong><?= $task['completed'] ? 'Completed' : 'Incompleted'; ?></li>
   </ul>
  </header>
   
</body>
</html>