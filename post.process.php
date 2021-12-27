<?php

    include('./includes/class-autoload.inc.php');

    $posts = new Posts();

    if (isset($_POST['submit'])) {
        $title = $_POST['post-title'];
        $content = $_POST['post-content'];
        $author = $_POST['post-author'];

        $posts->addPost($title, $content, $author);
        header("Location: {$_SERVER['HTTP_REFERER']}");

    } elseif (isset($_POST['update'])) {
        $title = $_POST['post-title'];
        $content = $_POST['post-content'];
        $author = $_POST['post-author'];
        $id = $_GET['id'];

        $posts->updatePost($title, $content, $author, $id);
        header("Location: http://crudoop.local");
    } elseif ($_GET['send'] === 'del') {
        $id = $_GET['id'];

        $posts->delPost($id);

        header("Location: http://crudoop.local");
    }