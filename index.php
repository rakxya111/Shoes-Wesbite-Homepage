
<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
<style>
    .logout{
  margin-top: -50px;
  margin-left: 1190px;
  display: flex;
  align-items: center;
}


</style>
  <body>
<!-- LOGOUT CODE -->
<div class="logout">
<a href="logout.php" class="btn btn-warning">Logout</a>
</div>
          <!-- LOGOUT CODE -->
  <!-- SLIDER CODE  -->
  <section class="homepage">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="2000">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
 
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
         <a href="Items.php"><img src="shoes/BG3.png" class="d-block w-100" alt="..."></a> 
        </div>


        <div class="carousel-item" data-bs-interval="2000">
          <a href="Items.php"><img src="shoes/BG2.png" class="d-block w-100" alt="..." ></a>
          
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <a href="Items.php"><img src="shoes/BG1.png" class="d-block w-100" alt="..."></a>
          
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
       
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

   <?php
   include("footer.php");
   ?>
  
  </body>
</html>
