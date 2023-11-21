<?php include './php/sendemail.php'; ?>
<section class="contact" id="contact">

<h1 class="heading">
    <span>c</span>
    <span>o</span>
    <span>n</span>
    <span>t</span>
    <span>a</span>
    <span>c</span>
    <span>t</span>
</h1>

<div class="row">
<?php if ($alert != "")
    echo '<div class="alert alert-success text-center">' . $alert . '</div>'; ?>
    <div class="image">
        <img src="images/contact-img.svg" alt="">
    </div>

    <form action="" method="post">
        <div class="inputBox">
            <input type="text" placeholder="name" name="name">
            <input type="email" placeholder="email" name="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number" name="number">
            <input type="text" placeholder="subject" name="subject">
        </div>
        <textarea placeholder="message"  id="" cols="30" rows="10" name="message"></textarea>
        <input type="submit" name="submit" class="btn" value="send message">
    </form>

</div>
</section>