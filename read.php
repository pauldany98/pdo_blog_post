<!-- include nav .php -->
<?php
include 'inc/nav.php';
include 'inc/dbcon.php';



// delete post
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM posting WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['id']]);
    header('Location: index.php');
}


$id = $_GET['id'];
$sql = "SELECT * FROM posting  WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);



?>


<!-- create a blog post -->
<br>
<div class="container">
    <div class="blog-post">
        <div class="inblox" style="display: flex; justify-content: space-around; gap: 100px">
            <h2><?= ucfirst($row['title']) ?> </h2>
                <a href="edit.php ?id=<?= $row['id'] ?>" style="display: flex; background-color: blue; color: white; 
                     border-radius: 5px;padding: 5px; text-decoration: none;">Edit Post</a>


        </div>


        <div class="blog-content">

            <div class="user-img">
                <img src="https://i.pravatar.cc/100" alt="" srcset="">
            </div>
            <div class="post-d">
                <div class="post-img">
                    <img src="https://i.pravatar.cc/300" alt="" srcset="">
                </div>
                <h1><?= $row['posts']; ?></h1>
                <div class="down">
                    <p><?= ucfirst($row['author']); ?></p>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" style="display: block;">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">

                        <button name="delete" style="display: flex; background-color: red; color: white;
                     border-radius: 5px;padding: 5px;border: none">
                            Delete
                        </button>
                    </form>

                </div>
            </div>
        </div>
        <div class="date">
            <p><?= date('M  j y g:i A', strtotime($row['time'])); ?></p>
        </div>

    </div>
</div>