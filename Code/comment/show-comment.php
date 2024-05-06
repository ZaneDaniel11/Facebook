<?php
session_start();

include('../Connection.php');

if (isset($_POST['show_comment_btn'])) {
    $comment = mysqli_real_escape_string($conn, $_POST['show_comment']);

    $show_comment_query = "SELECT *FROM comment_tb WHERE content_id = '$comment' ";

    $connection = mysqli_query($conn, $show_comment_query);

    $array_comment_result = [];

    if (mysqli_num_rows($connection) > 0) {
        foreach ($connection as $row) {
            $user = $row['user_id'];
            $view_reply = "SELECT *FROM users_tb WHERE user_id = '$user' LIMIT 1";

            $view_user = mysqli_query($conn, $view_reply);

            array_push($array_comment_result, ['comments' => $row, 'user' => $view_user]);
        }
        header('Content-Type: application/json');
        echo json_encode($array_comment_result);
    }
}
