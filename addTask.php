<?php

function addTask($connect, $data) {
    $data = file_get_contents('php://input');
    $data = json_decode($data);
    $task = $data->task;

    mysqli_query($connect, "INSERT INTO `tasks` (`id`, `task`) VALUES (NULL, '$task')");
    

    $id = mysqli_insert_id($connect);

    $res = [
        "id" => $id,
        "task" => $task
    ];

    echo json_encode($res);
}
