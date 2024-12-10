<!-- create a form  -->
<?php
include 'inc/nav.php';
include 'inc/dbcon.php';

$message = "";
$messageType = "error";


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $posts = $_POST['body'];
    $author = $_POST['author'];


    $query = "INSERT INTO posting (title, posts, author) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($values = [$title, $posts, $author]);
   
}
?>



<?php if (!empty($message)): ?>
    <?php
    $messageClass = $messageType === 'error' ? 'bg-red-200 text-red-800' : 'bg-green-200 text-green-800';
    ?>
    <div class="<?= $messageClass ?> py-4 px-4 rounded-lg mb-4">
      <?= $message ?>
    </div>
  <?php endif; ?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="formin">
        <div class="inp">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title">
        </div>
        <div class="inp">
            <label for="author">Author</label><br>
            <input type="text" name="author" id="author">
        </div>
        <div class="inp">
            <label for="body">Boby</label><br>
            <textarea name="body" id="body" cols="30" rows="10posts"></textarea>
        </div>
    <button type="submit" name="submit" id="submit">Submit</button>
       
        <!-- <button type="submit" name="submit">Submit</button> -->
    </div>
</form>


