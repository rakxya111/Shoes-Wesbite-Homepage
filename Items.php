<?php
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
    <title>Item</title>
</head>
<body>
    <div>
    <a  href="mycart.php" id="my" class="btn btn-outline-success">MY Cart</a>
    </div>
    <br>
    
    <div class="container mt-5" >
        
    <div class="row">
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\01.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Nike Air Max Dn <br> 
    Shoes</h5>
    <p class="card-text"> $60</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Air Jordan 1">
    <input type="hidden" name="price" value="160">
    <input type="hidden" name="image" value="01.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\2.png" class="card-img-top" alt="img" >
  <div class="card-body text-center">
    <h5 class="card-title">LeBron XXI "Optimism"
   <br>Basketball Shoes </h5>
    <p class="card-text"> $160</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="LeBron XXI">
    <input type="hidden" name="price" value="160">
    <input type="hidden" name="image" value="2.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\3.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Nike Flex Runner 3 <br>Little Kids </h5>
    <p class="card-text"> $50</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Nike Flex Runner">
    <input type="hidden" name="price" value="50">
    <input type="hidden" name="image" value="3.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\4.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Nike Dunk Low <br>
    Playground Pack </h5>
    <p class="card-text"> $150</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Nike Dunk">
    <input type="hidden" name="price" value="150">
    <input type="hidden" name="image" value="4.png">

  </div>
</div>
</form> 
 </div>
 </div>
 <div class="row mt-4">
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\10.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Nike unveils <br>the LeBron 21</h5>
    <p class="card-text"> $160</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="the LeBron 211">
    <input type="hidden" name="price" value="160">
    <input type="hidden" name="image" value="10.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\11.png" class="card-img-top" alt="img" >
  <div class="card-body text-center">
    <h5 class="card-title">LeBron XXI <br>
    Basketball Shoes </h5>
    <p class="card-text"> $160</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="LeBron XXI
">
    <input type="hidden" name="price" value="199.9">
    <input type="hidden" name="image" value="11.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\12.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Nike Air Max 5 <br>
    Men's Workout Shoes</h5>
    <p class="card-text"> $50</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Nike Air Max 5">
    <input type="hidden" name="price" value="88.9">
    <input type="hidden" name="image" value="12.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\13.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Nike Air Force 1  <br>Flyknit 2.0</h5>
    <p class="card-text"> $150</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Flyknit 2.0">
    <input type="hidden" name="price" value="119">
    <input type="hidden" name="image" value="13.png">

  </div>
</div>
</form> 
 </div>
 </div>
 
    <div class="row mt-4">
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\5.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Jordan 4 Retro 
    <br> Baby/Toddler Shoes</h5>
    <p class="card-text"> $88</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Jordan 4">
    <input type="hidden" name="price" value="88">
    <input type="hidden" name="image" value="5.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\6.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Air Jordan 5 Retro SE
   <br> Big Kids Shoes </h5>
    <p class="card-text"> $160</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Air Jordan 5">
    <input type="hidden" name="price" value="160">
    <input type="hidden" name="image" value="6.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\07.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Air Jordan I High G <br>
    Men's Golf Shoes </h5>
    <p class="card-text"> $190</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Air Jordan I">
    <input type="hidden" name="price" value="190">
    <input type="hidden" name="image" value="07.png">
  </div>
</div>
</form> 
 </div>
<div class="col-lg-3">
<form action="manage.php " method="post">   
    <div class="card" style="width: 18rem;">
  <img class="img" src="shoes\8.png" class="card-img-top" alt="img">
  <div class="card-body text-center">
    <h5 class="card-title">Air Jordan 1 Low
    <br>Men's Shoes</h5>
    <p class="card-text"> $115</p>
    <button name="addtocart" type= " submit" class="btn btn-info">Add To Cart</button name="addtocart">
    <input type="hidden" name="item_name" value="Air Jordan 1">
    <input type="hidden" name="price" value="115">
    <input type="hidden" name="image" value="8.png">

  </div>
</div>
</form> 
 </div>
 </div>
 
 </div>
 <?php
include("footer.php");

?>
</body>
</html>