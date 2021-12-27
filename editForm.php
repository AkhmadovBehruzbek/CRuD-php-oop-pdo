<?php
    require_once('./templates/header.php');
    include "./includes/class-autoload.inc.php";

    $posts = new Posts();
    $post = $posts->editPost($_GET['id']);
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $author = $post['author'];
    ?>

<div class="text-center">
    <h3>Edit Post</h3>
</div>

<!--                    form input -->
<div class="col-md-7 mx-auto">
    <form action="post.process.php?id=<?= $id ?>" method="post">
        <div class="form-group">
            <label style="width: 100%"> Title:
                <input class="form-control" type="text" name="post-title" value="<?= $title ?>" required>
            </label>
        </div>
        <div class="form-group">
            <label style="width: 100%"> Content:
                <textarea class="form-control" type="text" name="post-content" required><?= $content ?></textarea>
            </label>
        </div>
        <div class="form-group">
            <label style="width: 100%"> Author:
                <input class="form-control" type="text" name="post-author" value="<?= $author ?>" required>
            </label>
        </div>
        <div class="mt-3">
            <a href="index.php" type="button" class="btn btn-secondary" >Close</a>
            <button type="submit" name="update" class="btn btn-primary">Update Post</button>
        </div>
    </form>
</div>


<?php
    require_once "./templates/footer.php";
?>
