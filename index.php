<!-- include nav .php -->
<?php 
include 'inc/nav.php'; 
include 'inc/dbcon.php';



$sql = "SELECT * FROM posting ORDER BY id DESC";
$stmt = $pdo->query($sql);
$stmt->execute();

?>


<br>
<div class="container">
    <?php while($row = $stmt->fetch( PDO::FETCH_ASSOC)): ?>
    <div class="blog-post">
        <h2><?= ucfirst($row['title'])  ; ?></h2>
        <div class="blog-content">
            <div class="user-img">
                <img src="https://i.pravatar.cc/100" alt="" srcset="">
            </div>
            <div class="post-d">
                <div class="post-img">
                    <img src="https://i.pravatar.cc/300" alt="" srcset="">
                </div>
                <h1><?= substr($row['posts'], 0, 100) .'......'; ?></h1>
                <div class="down">
                    <p><?= ucfirst( $row['author']); ?></p>
                    <a href="read.php ?id= <?= $row['id'] ?>" >Read More</a>
                </div>
            </div>
            
        </div>
        <div class="date">
            <p><?= date('M  j y g:i A', strtotime($row['time'])); ?></p>
        </div>

</div>
<?php endwhile; ?>
</div>