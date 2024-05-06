<?php
session_start();

include('../Connection.php');

if (isset($_POST['submit_delete'])) {

    $delete_content = mysqli_real_escape_string($conn, $_POST['content']);

    $delete_sql = "DELETE FROM content_tb WHERE content_id = '$delete_content' ";

    $delete_connection = mysqli_query($conn, $delete_sql);

    if ($delete_connection) {
        echo 'yawa';
    } else {
        echo 'yawa';
    }
}
