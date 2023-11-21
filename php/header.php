<header>
<?php session_start(); ?>
    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="nav-link logo"><span>Book</span>mytrip</a>

    <nav class="navbar">
    <li class="nav-item">
        <a href="./index.php" class="nav-link">home</a>
        </li>
      
        <li class="nav-item">
        <a href="#packages" class="nav-link">packages</a> </li>
        <li class="nav-item">
        <!-- <a href="#services">services</a> -->
        <a href="#gallery" class="nav-link">gallery</a> </li>
        <li class="nav-item">
        <a href="#review" class="nav-link">review</a> </li>
        <li class="nav-item">
        <a href="#contact" class="nav-link">contact</a> </li>
        <li class="nav-item">
        <?php
            if(isset($_SESSION['adname'])){
            echo '<a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">book list</a> </li>';
            echo ' <li class="nav-item"><a href="./add package.php" class="nav-link">Add package</a> </li>';
            }
        ?>

    </nav>

    <div class="icons">
    <li class="nav-item"> 
        <?php if(isset($_SESSION['name'])){
        
        // echo '<i class="fas fa-user"></i>';
                    // echo '<a class="">'.$_SESSION['name'].'</a>';
            echo '<a href="./php/logout.php" class="nav-link btn btn-danger">logout</a></li>';
        } 
        else if(isset($_SESSION['adname'])){
            // echo $_SESSION['adname'];
            echo '<a href="./php/ad-logout.php" class="nav-link btn btn-danger">logout</a> </li>';  
        }
        else{
            echo '<li class="nav-item"> <i class="fas fa-user" id="login-btn" class="nav-link"></i> </li>';
        }
        ?>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>
<div class="login-form-container">

<i class="fas fa-times" id="form-close"></i>

<form action="">
    <h3>login</h3>
    <input type="text" id="log-email"class="box" placeholder="enter your username">
    <input type="password" id="log-pass" class="box" placeholder="enter your password">
    <input type="button" id="log-btn" value="login now" class="btn">
    <input type="checkbox" id="remember">
    <p>don't have and account? <a href="#" id="register_btn">register now</a></p>
</form>

</div>
<div class="register-form-container">



<form action="">
    <i class="fas fa-times" id="form-close1"></i>
    <h3>register</h3>

    <input type="text" id="reg-email" class="box" placeholder="enter your username">
    <input type="password" id="reg_pass" class="box" placeholder="enter your password">
    <input type="button" id="reg_btn" value="register now" class="btn">
    <p> have an account? <a href="#">login now</a></p>
    <input type="button" value="close" class="">
</form>

</div>
<div class="admin-form-container">


<form action="">
    <i class="fas fa-times" id="form-close2"></i>

    <h3>admin login</h3>
    <input type="text" id="ad-name" class="box" placeholder="enter your adminName">
    <input type="password" id="ad-pass" class="box" placeholder="enter your password">
    <input type="submit" value="login now" id="ad-sub" class="btn">

</form>

</div>