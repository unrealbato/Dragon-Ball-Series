<?php
    //Initial Variables
    $db_host = 'localhost';
    $db_username = 'bato';
    $db_pass = '123456';
    $db_name = 'dragondb';

    $link =mysqli_connect($db_host, $db_username, $db_pass, $db_name);

    if($link){
        $sql = 'SELECT * FROM dragon';
        $query = mysqli_query($link, $sql);
        $result = mysqli_fetch_assoc($query);
        var_dump($result);

    }else{
        echo "<br>Connection Error". mysqli_connect_errno();
    }
    

?>

<?php require_once 'inc/header.php'; ?>
<section class="body-main">
        <article class="box">
            <h3>This My Fav Show :)</h3>
        </article>
</section>

<div class="series">
        <div class="s1">
        <h3><?php echo $result['title']; ?></h3>
        <p><?php echo $result['year']; ?></p>
    </div>
    <p class="s1"><?php echo $result['description']; ?></p>
    
</div>



<?php include 'inc/footer.php'; ?>