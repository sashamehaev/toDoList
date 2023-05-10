<?php

function deleteTask($connect, $id) {
    mysqli_query($connect, "DELETE FROM `tasks` WHERE `tasks`.`id` = $id");

    $res = [
        "message" => "Post has been deleted"
    ];

    echo json_encode($res);
}