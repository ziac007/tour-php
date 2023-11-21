<?php
require "./config/config.php";

$msg = "";
if (isset($_POST['submit'])) {
    $place = $_POST['place'];
    $rating = $_POST['rating'];
    $mrp = $_POST['mrp'];
    $discount = $_POST['discount'];
    $details = $_POST['details'];

    $filename = $_FILES["image123"]["name"];

    $tempname = $_FILES["image123"]["tmp_name"];
    



    // check if the user has clicked the button "UPLOAD" 




    $folder = "image/" . $filename;

    $query = "INSERT INTO `package` ( `place`, `rating`, `mrp`, `dis`, `image`, `details`) VALUES ( '$place', '$rating', '$mrp', '$discount', '$filename', '$details')";
    $statement = $connection->prepare($query);
    $result = $statement->execute();
    if ($result) {
        if (move_uploaded_file($tempname, $folder)) {

            $msg = "package uploaded";


        } else {

            $msg = "something went while uploading image";

        }
    } else {
        $msg = "package not inserted";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmytrip</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <?php
    include("./php/header.php");
    ?>

    <div class="container mt-5">
        <div class="view-tab">
            <div class="row mt-5">
                <div class="d-flex flex-row-reverse mt-5">
                    <div class="p-2">
                        <button class="btn btn-success mt-5" id="create">
                            create
                        </button>
                    </div>

                </div>
                <div class="col-8 mt-5">
                    <div class="table responsive">
                        <table class="table table-hover table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">place</th>
                                    <th scope="col">details</th>
                                    <th scope="col">ratings</th>
                                    <th scope="col">mrp</th>
                                    <th scope="col">discount</th>
                                    <th scope="col">image</th>
                                    <th > action</th>
                                </tr>
                            </thead>
                            <?php
                            $query = "select * from package";
                            $statement = $connection->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            if($result){
                                foreach($result as $row){
                                    echo ' <tbody>
                                    <tr>
                                    <th scope="row">'.$row['place'].'</th>
                                    <td>'.$row['details'].'</td>
                                    <td>'.$row['rating'].'</td>
                                    <td>'.$row['mrp'].'</td>
                                    <td>'.$row['dis'].'</td>
                                    <td><img src="./image/'.$row['image'].'" width="100px" height="50px"></img></td>
                                    <td> <a href="./php/del-pack.php?id='.$row['id'].'" class="btn btn-success btn-sm">delete</a></td>
                                  </tr>
                                    </tbody>
                                    ';
                                }
                             
                               
                               
                               
                              
                            }
                            else{
                                echo '<td> no data create new package</td>';
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="create-tab">
            <div class="row mt-5">
                <div class="d-flex flex-row-reverse mt-5">
                    <div class="p-2">
                        <button class="btn btn-success mt-5" id="view">
                            view
                        </button>
                    </div>
                    <div class="col-7 mt-5">
                        <?php
                            if($msg != ""){
                            echo "<div class='alert alert-danger'>" . $msg . "</div>";
                            }
                        ?>
                        
                        <form action="./add package.php" method="post"  enctype="multipart/form-data">
                            <div class="form-group mt-5">
                                <label>Place</label>
                                <input type="text" class="form-control" name="place" placeholder="enter place">
                            </div>
                            <div class="form-group mt-3">
                                <label>ratings</label>
                                <input type="text" class="form-control" name="rating" placeholder="enter ratings from o to 5">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mt-3">
                                        <label>mrp</label>
                                        <input type="text" class="form-control" name="mrp" placeholder="enter mrp">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mt-3">
                                        <label>discount</label>
                                        <input type="text" class="form-control" name="discount" placeholder="enter discount">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>image</label>
                                <input type="file" class="form-control" name="image123" />
                            </div>
                            <div class="form-group mt-3">
                                        <label>details</label>
                                        <textarea class="form-control" name="details" placeholder="enter the details here .."></textarea>
                                    </div>
                                    <div class="form-group mb-5">
                                        <input type="submit" class="btn btn-success" name="submit" class="form-control" value="submit"/>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    include("./php/footer.php");
    ?>













    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script>
    $(document).ready(function() {
        $('.create-tab').hide()
        $('#create').click(function(){
            $('.create-tab').show()
            $('.view-tab').hide()

        })

  $('#view').click(function(){
            $('.create-tab').hide()
            $('.view-tab').show()

        })
    })
</script>

</html>