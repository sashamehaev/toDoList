<?php

require 'getTasks.php';
require 'addTask.php';

header('Content-type: json/application');
$connect = mysqli_connect('localhost', 'root', '', 'toDoList');

$route = $_GET['q'];

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'GET') {
  if($route === 'tasks') {
    getTasks($connect);
  }
} elseif($requestMethod === 'POST') {
  if($route === 'tasks') {
    addTask($connect, $_POST);
  }
  
}

?>