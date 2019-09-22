<?php

function dd($data, $die=true) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  if ($die) die();
}


function fetchAllTasks ($pdo) {
  $statement = $pdo->prepare('select * from todos');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}