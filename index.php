<?php

require 'getTasks.php';
require 'addTask.php';
require 'deleteTask.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');

$connect = mysqli_connect('localhost', 'root', '', 'toDoList');

$url = $_GET['q'];
$params = explode('/', $url);
$route = $params[0];
$id = $params[1];

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'GET') {
  if($route === 'tasks') {
    getTasks($connect);
  }
} elseif($requestMethod === 'POST') {
  if($route === 'tasks') {
    addTask($connect, $_POST);
  }
  
} elseif($requestMethod === 'DELETE') {
  if($route === 'tasks') {
    deleteTask($connect, $id);
  }
}

?>