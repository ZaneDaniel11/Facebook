<?php

session_start();
include('../Connection.php');

if (isset($_POST['delete_comment'])) {
    $delete_comment = mysqli_real_escape_string($conn, $_POST['delete_comment_id']);

    $delete_comment_sql = "DELETE FROM comment_tb WHERE comment_id = '$delete_comment' ";

    $delete_connection = mysqli_query($conn, $delete_comment_sql);

    if ($delete_connection) {
        echo 'Shesh';
    } else {
        echo 'Nigga';
    }
}
