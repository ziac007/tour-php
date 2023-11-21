<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
    <?php
    require "./config/config.php";
    $query = "select * from package";
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    if ($result) {
        foreach ($result as $row) {
            echo '
            <div class="box">
            <img src="image/'.$row['image'].'" alt="" width="500px">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> '.$row['place'].' </h3>
                <p>'.$row['details'].'</p>
                <div class="stars">
                    ';
                    for ($i=0; $i < $row['rating']; $i++) { 
                    
                    echo '<i class="fas fa-star"></i>';
                    }
            $nostar = 5 - intval($row['rating']);
            for ($i=0; $i < $nostar; $i++) {
                echo '<i class="far fa-star"></i>';
            }
                    // 
                    echo'
                </div>
                <div class="price"> ₹'.$row['dis'].' <span>₹'.$row['mrp'].'</span> </div>
                <a href="./book.php?id='.$row['id'].'&name='.$row['place'].'" class="btn">book now</a>
        </div>
        </div>


            ';
        }
    }
    
    ?>
       
    </div>

</section>