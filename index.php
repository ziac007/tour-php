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

    <!-- header section ends -->

    <!-- login form container  -->

   
    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->


    <!-- book section ends -->

    <!-- packages section starts  -->

    <?php
    include("./php/package.php");
    ?>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>The journey of a thousand miles begins with a single step</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>The journey of a thousand miles begins with a single step</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>The journey of a thousand miles begins with a single step</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>The journey of a thousand miles begins with a single step</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>The journey of a thousand miles begins with a single step</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>The journey of a thousand miles begins with a single step</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

  <?php
  include("./php/gallery.php");
  ?>

    <!-- gallery section ends -->

    <!-- review section starts  -->

   <?php
   include("./php/review.php");
   ?>

    <!-- review section ends -->

    <!-- contact section starts  -->

<?php
include("./php/contact.php");
?>

    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- footer section  -->

    <?php

    include("./php/footer.php");
    ?>





<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">location</th>
      <th scope="col">guests</th>
      <th scope="col">arival</th>
      <th scope="col">leaving</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require "./config/config.php";
    $query = "SELECT * FROM book_form";
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    if ($result) {
        foreach ($result as $row) {
            echo '
            <tr>
            <th scope="row">'.$row['name'].'</th>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['location'].'</td>
            <td>'.$row['guests'].'</td>
            <td>'.$row['arrivals'].'</td>
            <td>'.$row['leaving'].'</td>
          </tr>
            ';
        }
    }
    
    ?>
  </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



<script src="./script.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js file link  -->
    <!-- <script src="./script.js"></script> -->
    <script>
        $(document).ready(function() {
            $(document).on('click', '#reg_btn', function() {
                email = $('#reg-email').val()
                pass = $('#reg_pass').val()
                if (email == "" || pass == "") {
                    alert("All feilds required")
                } else {
                    $.ajax({
                        url: "./php/reg.php",
                        method: "POST",
                        data: {
                            email,
                            pass
                        },
                        success: function(data) {
                            alert(data);
                            location.reload();
                        }

                    })
                }
            })


$(document).on('click','#log-btn',function(){
    email = $('#log-email').val()
    pass = $('#log-pass').val()
    if (email == "" || pass == "") {
                    alert("All feilds required")
                } else {
                    $.ajax({
                        url: "./php/login.php",
                        method: "POST",
                        data: {
                            email,
                            pass
                        },
                        success: function(data) {
                            alert(data);
                            location.reload();
                        }

                    })
                }
})
$(document).on('click','#ad-sub',function(){
    name = $('#ad-name').val()
    pass = $('#ad-pass').val()
    if(name == "" || pass == ""){
        alert("All feilds required")
    }
    else{
        $.ajax({
                        url: "./php/ad-login.php",
                        method: "POST",
                        data: {
                            name,
                            pass
                        },
                        success: function(data) {
                            alert(data);
                            location.reload();
                        }

                    })
    }
})
        })
    </script>
</body>

</html>