<?php

header('Content-type: json/application');
$connect = mysqli_connect('localhost', 'root', '', 'toDoList');

$tasks = mysqli_query($connect, 'SELECT * FROM `tasks`');

$taskList = [];

while($task = mysqli_fetch_assoc($tasks)) {
  $taskList[] = $task;
}

echo json_encode($taskList);

?>