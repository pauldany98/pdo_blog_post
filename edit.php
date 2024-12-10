<?php
include 'inc/nav.php';
include 'inc/dbcon.php';


// echo $post_id = $_GET['id'];

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $posts = $_POST['posts'];
    $author = $_POST['author'];


    $query = "UPDATE posting SET title = :title, posts = :posts, author = :author WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute ([
        ':title' => $title,
        ':posts' => $posts,
        ':author' => $author,
        ':id' => $id
    ]);
    header("location: index.php");

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM posting WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);

}

?>


<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="hidden" name="id" value="<?= $post['id']  ?>">
    
    <div class="formin">
        <div class="inp">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="<?= $post[ 'title']  ?>">
        </div>
        <div class="inp">
            <label for="author">Author</label><br>
            <input type="text" name="author" id="author" value="<?= $post['author'] ?>">
        </div>
        <div class="inp">
            <label for="body">Boby</label><br>
            <textarea name="posts" id="posts" >"<?= $post['posts']; ?>"</textarea>
        </div>
        <!-- <button type="submit" name="submit" id="submit">Submit</button> -->

        <button type="submit" name="submit">Submit</button>
    </div>
</form>