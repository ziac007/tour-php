<?php
require './config/config.php';
$msg = '';
if(isset($_GET['id'])){
if(isset($_POST['send']))
{
   $pid = $_GET['id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];
   $query = "INSERT INTO `book_form` ( `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `pid`) VALUES 
   ( '$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '$pid')";
   $statement = $connection->prepare($query);
  $result =  $statement->execute();
  if($result){
         $msg = "<script>alert('Your package is booked');</script>";
  }else{
         echo "<script>alert('something went wrong');</script>";
  }
}
}
else{
   header("location:./index.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>
<?php

if(isset($_SESSION['name'])){
   echo '
   <form action="" method="post" class="book-form">

   <div class="flex">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name" value="'.$_SESSION['name'].'" required>
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" required>
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone" required>
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address" required>
      </div>
      <div class="inputBox">
         <span>where to :</span>
         <input type="text" placeholder="place you want to visit" name="location" value="'.$_GET['name'].'" readonly required>
      </div>
      <div class="inputBox">
         <span>how many :</span>
         <input type="number" placeholder="number of guests" name="guests" required>
      </div>
    
      <div class="inputBox">
         <span>arrivals :</span>
         <input type="date" name="arrivals" required>
      </div>
      <div class="inputBox">
         <span>leaving :</span>
         <input type="date" name="leaving" required>
      </div>
   </div>

   <input type="submit" value="submit" class="btn" name="send">

</form>

   ';
}else{
   echo '
      you need to login to continue
   ';
}

?>
   
</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<?php
   include("./php/footer.php");
?>

<!-- footer section ends -->







<script src="./script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>