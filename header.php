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
    <link rel="stylesheet" href="styles22.css" />

    <style>
body {
  font-family: "Urbanist" sans-serif;
  overflow-x: hidden;
}

.navb-items .item a{
  text-decoration: none;
  color: currentColor;
}
a {
  text-decoration: none;
  color: currentColor;
}

a:hover {
  color: currentColor;
}

header {
  width: 100vw;
  height: 90px;
  background-color: white;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 25%);
  display: flex;
  align-items: center;
}

header .container-fluid {
  width: 100vw;
  height: 90px;
  padding: 0px 50px;
  display: flex;
  align-items:center;
  justify-content: space-between;
}


header .navb-logo img {
  width: 200px;
  height: 200px;
}

header .navb-items{
    width:70%;
    display: flex;
    justify-content:right;
}

header .navb-items .item {
  text-align: center;
  font-size: 17px;
  letter-spacing: 3px;
  color: #000000;
  font-weight: bold;
  padding: 5px 0;
  transition: all 0.1s ease;
  border-bottom: 0px solid #64d6f4;
  border-top: 0px solid #64d6f4;
  cursor: pointer;
}



@media(max-width:992px){

  header .navb-logo img {
  width: 150px;
  height: 150px;
}

    header .container-fluid{
      padding: 0 5%;  
    }

    .modal-header img{
      width: 150px;
      height: 150px;
      margin-top: 17.5px;
  
  }

  .modal-header .btn-close{
    background: transparent;
    opacity: 1;
}

.modal-header i{
    color:#fefefe;
    font-size: 30px;
}

.modal-body{

    width: 88%;
    margin: 0 auto;
    padding: 75px 0 0 0 ;
    flex: unset;
}

.modal-body .modal-line{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 7px 0;
    margin-bottom: 50px;
    cursor: pointer;
    transition: all .5s ease;
    color: #274d8a;
    border-bottom: 1px solid #274d8a;
}

.modal-body .modal-line:hover{

    color:currentColor ;
    font-size: 30px;
    width:35px;
    margin-right: 15px;
    padding: 0 0 3px 3px;

}

.mobile-modal-footer{
    width: 87%;
    margin: 0 auto;
    padding: 20% 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 25px;
    color: #274d8a;
}

.mobile-modal-footer:hover{
    color: #fefefe;
}

}


header .navb-items .item:hover {
  border-bottom: 3px solid #64d6f4;
  border-top: 3px solid #64d6f4;
}


.modal-dialog{
  width: 400px;
}

.modal-content{

border-radius: 0;
height: 100vh;
overflow-y: scroll;
background-color:#102447;
color: white;
}

.modal-header{

display: flex;
justify-content: space-between;
align-items: center;
width: 88%;
margin: 0 auto;
padding-bottom:16px;
border-bottom: 2px solid #fefefe;
}

.modal-dialog{
     margin: 0;
     width: 300px;
}

@media(max-width:570px)
{
  header .navb-logo img {
  width: 80px;
  height: 80px;
}


    header .navb-items{
        display: none;
    }
    .modal-dialog{
        width: 400px;
    }

.modal-content{

    border-radius: 0;
    height: 100vh;
    overflow-y: scroll;
    background-color:#102447;
    color: white;
}

.modal-header{

    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 88%;
    margin: 0 auto;
    padding-bottom:16px;
    border-bottom: 2px solid #fefefe;
}

.modal-header img{
    width: 150px;
    height: 150px;
    margin-top: 17.5px;

}

.modal-header .btn-close{
    background: transparent;
    opacity: 1;
}

.modal-header i{
    color:#fefefe;
    font-size: 30px;
}

.modal-body{

    width: 88%;
    margin: 0 auto;
    padding: 75px 0 0 0 ;
    flex: unset;
}

.modal-body .modal-line a{
  text-decoration: none;
}

.modal-body .modal-line{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 7px 0;
    margin-bottom: 50px;
    cursor: pointer;
    transition: all .5s ease;
    color: #274d8a;
    border-bottom: 1px solid #274d8a;
}

.modal-body .modal-line:hover{

    color:currentColor ;
    font-size: 30px;
    width:35px;
    margin-right: 15px;
    padding: 0 0 3px 3px;

}

.mobile-modal-footer{
    width: 87%;
    margin: 0 auto;
    padding: 20% 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 25px;
    color: #274d8a;
}

.mobile-modal-footer:hover{
    color: #fefefe;
}

}
 </style>
 <!-- END OF CSS-->
  </head>
  
  
  
  <body>
    <header>
      <div class="container-fluid">
        <div class="navb-logo">
          <img src="shoes/SHOERA.png" alt="logo" />
        </div>

        <div class="navb-items">
          <div class="item">
            <a href="index.php">Home</a>
          </div>

          <div class="item">
            <a href="about.php">About</a>
          </div>

          <div class="item">
            <a href="contact.php">Contact</a>
          </div>

          <div class="item">
            <a href="Items.php">Shop</a>
          </div>

    </div>

        <!-- Button trigger modal -->
        <div class="mobile-toggler d-lg-none">
          <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal"><i class="fa-solid fa-bars"></i></a>
        </div>

<!-- Modal -->
<div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <img src="shoes/RACK.png" alt="logo" >
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      
      <div class="modal-body">
        
        <div class="modal-line">
          <a href="index.php">Home</a>
        </div>

        <div class="modal-line">
          <a href="about.php">About</a>
        </div>

        <div class="modal-line">
          <a href="contact.php">Contact</a>
        </div>

        <div class="modal-line">
          <a href="Items.php">Shop Now</a>
        </div>
      
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </header>
   



<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> 

</body>
</html>