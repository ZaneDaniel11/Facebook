<?php
session_start();
include('../Connection.php');

if (isset($_POST['edit_comment_submit'])) {
    $comment_id = mysqli_real_escape_string($conn, $_POST['comment_id']);
    $comment =  mysqli_real_escape_string($conn, $_POST['edited_comment']);

    $sql = "UPDATE comment_tb SET comment = '$comment' WHERE comment_id = '$comment_id' ";

    $conn = mysqli_query($conn, $sql);

    if ($conn) {
        echo 'Shit';
    }
}
