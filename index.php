<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");

?>
<body>
  <div class="niro">
  <div class="caontainer">

  <div class="caontainer">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
<a class="navbar-brand" href="">
<a class="logo__link" href="index.php">
       <img class="logo__img" src="images/logo.png" alt="Avenue fashion logotype" width="237" height="19">
     </a>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse ms-auto" id="navbarNavDropdown">
 <ul class="navbar-nav ">
   <li class="nav-item">
     <a class="nav-link active" aria-current="page" href="#">kids</a>
   </li>
   <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       categories
     </a>
     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
     <div class="row">
       <div class="col">
 Column
 <li><a class="dropdown-item" href="#">Edit your account </a></li>
 <li><a class="dropdown-item" href="#">change your password</a></li>
 <li><a class="dropdown-item" href="#">delete your account</a></li>
</div>
<div class="col">
 Column
 <li><a class="dropdown-item" href="#">Account Settings</a></li>
 <li><a class="dropdown-item" href="#">My Wishlist</a></li>
 <li><a class="dropdown-item" href="#">My Orders</a></li>
 <li><a class="dropdown-item" href="#">View Shopping Cart</a></li>
</div>
     </ul>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">shop</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#">local store</a>
   </li>
   <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       account
     </a>
     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
       <div class="row">
<div class="col">
 Column
 <li><a class="dropdown-item" href="#">Edit your account </a></li>
 <li><a class="dropdown-item" href="#">change your password</a></li>
 <li><a class="dropdown-item" href="#">delete your account</a></li>
</div>
<div class="col">
 Column
 <li><a class="dropdown-item" href="#">Account Settings</a></li>
 <li><a class="dropdown-item" href="#">My Wishlist</a></li>
 <li><a class="dropdown-item" href="#">My Orders</a></li>
 <li><a class="dropdown-item" href="#">View Shopping Cart</a></li>
</div>
     </ul>
   </li>

   <li class="nav-item">
     <a class="nav-link" href="#">cart</a>
   </li>
 </ul>
</div>
</div>
</nav>

    
    <div class="coursel">
<!-- modify carousel perfectly-->
    
    <div id="carouselExampleDark" class="carousel carousel-dark slide container-sm" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="100">
          <img src="image/Screenshot (1).png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="image/Screenshot (1).png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/Screenshot (1).png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

<div class="faetured ">
  <h3>featured products</h3> <!-- arrow to be added --->

</div>
<!-- main content -->
<div class="products" id="content">
  <div class="row">
    
    
    
  <?php 
   getPro();
    ?>
  
    
  </div> <!-- /.row -->
  
</div><!--niro div -->

</div> <!--content div -->

<!-- ////////////////////////////////footer////////////////////////////////////////////  -->
<div class="row align-items-start">
  <div class="col">

information <!-- text modifications -->
<!--add icons where needed-->
    <ul class="footer-nav__list">
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">about us</a>
      </li>
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Local stores</a>
      </li>
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Customer service</a>
      </li>
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
      </li>
      
    </ul>
  </div>
  <div class="col">
    why buy from us
    <ul class="footer-nav__list">
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
      </li>
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Secure shipping</a>
      </li>
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Testimonials</a>
      </li>
      <li class="footer-nav__item">
        <a href="#" class="footer-nav__link">Ethical trading</a>
      </li>
    </ul>
  </div>
  <div class="col">
your account 
<ul class="footer-nav__list">
  <li class="footer-nav__item">
    <a href="#" class="footer-nav__link">Sign in</a>
  </li>
  <li class="footer-nav__item">
    <a href="#" class="footer-nav__link">Register</a>
  </li>
  <li class="footer-nav__item">
    <a href="#" class="footer-nav__link">View cart</a>
  </li>
  <li class="footer-nav__item">
    <a href="#" class="footer-nav__link">View your wishlist</a>
  </li>
  <li class="footer-nav__item">
    <a href="#" class="footer-nav__link">Track an order</a>
  </li>
  <li class="footer-nav__item">
    <a href="#" class="footer-nav__link">Update information</a>
  </li>
</ul>
  </div>
  <div class="col">
    contacts
    <ul>
      <li><p>phone:123456789</p></li>
      <li><p></p><a href="mailto:xyz@gmail.com" >xyz@gmail.com</a></li>
      <li><p></p>address: sankli street</li>
      
    </ul>
  </div>
  <div class="col">
    social
    <ul>
      <li>instagram </li>
      <li>faceook</li>
      <li>whastapp</li>
      <li>pintrest</li>
    </ul>
  </div>
</div>   <!-- ROWS -->     
  <p> <!-- add the below information into proper line -->
    &copy; <?php echo date("Y");?> AL-MUZNA&trade;| All rights reserved  
  </p>
  <p>Developed by Anas Shaikh</p>
  </div>
