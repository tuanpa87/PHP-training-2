<?php 

require 'functions.php';
require 'Task.php';

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
