<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./views/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">CR7-Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars-staggered" style="color: white;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#booking">ROOMS</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="#services">SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">CONTACT</a>
        </li>     
        <li class="nav-item">
          <a class="nav-link nv" href="loginusser">LOGIN</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link nv" href="signup">SIGN UP</a>
        </li>  
      </ul>
     
    </div>
  </div>
</nav>

<!-- HEADER -->


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./views/img/BG1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>YOUR DREAM ROOM</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid magni veritatis? Fuga, ad sit!.</p>
        <a><i href="" class="btn mt-3">SHOW MORE</i></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./views/img/BG2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>YOUR DREAM ROOM</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid magni veritatis? Fuga, ad sit!.</p>
        <a><i href="" class="btn btn-warning mt-3">SHOW MORE</i></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./views/img/BG3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>YOUR DREAM ROOM</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid magni veritatis? Fuga, ad sit!.</p>
        <a><i href="" class="btn mt-3">SHOW MORE</i></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- BOOKING -->

  <section id="booking" class="about section-padding mt-3">
  <div class="container">
    <div class="section-header text-center pb-3">
      <h2>BOOKING YOUR ROOM</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum suscipit <br> itaque,fuga quas voluptate dolorem</p>
    </div>
    <form action="" method="POST">
        <div class="book d-flex items-center ">
            <div class="date" data-provide="datepicker">
                <label for="date">From</label>
                <input name="from"type="date" id="date" class="form-control d-block" value="2022-12-20" min="2022-12-20"
                    max="2023-12-20">
            </div>
            <div class="date" data-provide="datepicker">
                <label for="date">To</label>
                <input name="to" type="date" id="date" class="form-control d-block" value="2022-12-20" min="2022-12-20"
                    max="2023-12-20">
            </div>
            <div class="date" data-provide="datepicker" name="type">
                <label for="">Room</label>
                <select class="form-select" aria-label="Default select example" id="chambre">
                    <option selected value="0">SINGLE</option>
                    <option value="1">double</option>
                    <option value="2">suite</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="suite" name="suitetype">
                <label for="">Suite</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Standard suite room</option>
                    <option value="1">Junior suite room</option>
                    <option value="2">Presidential suite room</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="children"name="capacity">
                <label for="">Person</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected value="1">01</option>
                    <option value="1">02</option>
                    <option value="2">03</option>
                    <option value="3">04</option>
                    <option value="3">05</option>
                    <option value="3">06</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker">
                <button name="submit" type="button" class="btn bknow">Search</button>
            </div>
        </div> 
    </form>
  </div>

  <?php
$data = new ProductController();
$products = $data->getAllProducts();
 ?>

 <section id="rooms" class="rooms section-padding">
  <div class="container">
    <div class="row d-flex flex-wrap">
    <?php foreach($products as $product):?>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card text-light text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-2">
              <img src="uploads/<?php echo $product['image'];?>"style="width: 100%;height: 350px;" alt="">
              <h3 class="card-title pt-2"style="color:rgb(22, 109, 136);"><?php echo $product['name'];?></h3>
              <p> <?php echo $product['description'];?></p>
              <h6 class="type" style="color:rgb(22, 109, 136);"><?php echo $product['type'];?></h6>
              <div class="stars mb-2"style="color: rgb(255, 225, 0);">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 mb-3>FROM <?php echo $product['price'];?>$</h5>
              <button class="btn text-white"> BOOK NOW</button>
            </div>
          </div>
        </div> 
      </div> 
      <?php endforeach; ?>
    </div>
 </section>
</section>
<!-- ABOUT US -->

<section id="about" class="about section-padding mt-1">
  <div class="container">
    <div class="section-header text-center pb-3">
      <h2>ABOUT US</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum suscipit itaque,fuga quas voluptate dolorem <br> laborum veniam magni eum neque repellat ad earum cupiditate. Eveniet maxime odio amet aliquam <br> laborum veniam magni eum neque repellat ad earum cupiditate. Eveniet maxime odio <br>laborum veniam magni eum neque repellat ad earum cupiditate.</p>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-12">
        <div class="about-img mb-2">
          <img src="./views/img/M9.jpg" style="height: 350px; width: 100%;border-radius: 8px;" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-12 ">
          <div class="about-img">
            <img src="./views/img/M10.jpg" style="height: 350px; width: 100%;border-radius: 8px;" alt="" class="img-fluid">

          </div>
      </div>
    </div>
  </div>
</section>

 <!-- SERVICE -->

 <section id="services" class="services section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-3">
          <h2>OUR SERVICES</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Autem odit ad ea dolores unde voluptatum.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-gradientpb-12"style="background-color: rgb(64, 147, 172);">
          <div class="card-body">
            <i class="bi bi-tsunami" style="color: black;"></i>
            <h3 class="card-title">SURF</h3>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio minima illo culpa architecto id perferendis dicta cumque. Ad debitis voluptate, ullam hic quas doloribus eius, eos mollitia consequuntur numquam deleniti.</p>
            <button class="btn">READ MORE</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-gradient pb-12"style="background-color: rgb(64, 147, 172);
        ">
          <div class="card-body">
            <i class="fa-solid fa-utensils"style="color: black;"></i>           
            <h3 class="card-title">FOOD</h3>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio minima illo culpa architecto id perferendis dicta cumque. Ad debitis voluptate, ullam hic quas doloribus eius, eos mollitia consequuntur numquam deleniti.</p>
            <button class="btn">READ MORE</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-gradient pb-12" style="background-color: rgb(64, 147, 172);
        ">
          <div class="card-body">
            <i class="fa-solid fa-dumbbell"style="color: black;"></i>
            <h3 class="card-title">FITNESS</h3>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio minima illo culpa architecto id perferendis dicta cumque. Ad debitis voluptate, ullam hic quas doloribus eius, eos mollitia consequuntur numquam deleniti.</p>
            <button class="btn ">READ MORE</button>
          </div>
        </div>
      </div>

    </div>
  </div>
 </section>

 

 <!-- CONTACT -->
<section id="contact">
<div  class="form-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-3">
          <h2>CONTACT US</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Autem odit ad ea dolores unde voluptatum.</p>
        </div>
      </div>
    <div class="row single-form g-0">
      <div class="col-sm-12 col-lg-6">
        <div class="left">
          <h2><span>Contact us for</span> <br>More information</h2>
        </div>
      </div>
      <div class="col-ms-12 col-lg-6">
        <div class="right">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Your full name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="JALAL LAGDIMI">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Your email</label>
              <input type="email" class="form-control" id="exampleInputPassword1" placeholder="jalal@gmail.com">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Your message</label>
              <textarea class="form-control" id="exampleInputPassword1" placeholder="whrite your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
</section>


 <!-- FOOTER -->

 <footer class="container-fluid text-white mt-5 pt-5 pb-4" style="background-color:rgb(22, 109, 136);">
  <div class="container-fluid text-md-left">
    <div class="row  text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold ">OUR HISTORY</h5>
        <p>Lorem ipsum dolor sit ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit . Natus,  Nam, sint nisi
        </p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold ">SERVICES</h5>
        <p><i class="bi bi-tsunami"></i> Surf</p>
        <p> <i class="fa-solid fa-dumbbell"></i> Fitness</p>
        <p><i class="bi bi-boombox-fill"></i> Vibes</p>
        <p><i class="bi bi-cup-straw"></i> Food</p>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold ">NAVIGATION</h5>
        <p><i class="bi bi-facebook"></i> Facebook</p>
        <p><i class="bi bi-instagram"></i> Instagram</p>
        <p><i class="bi bi-twitter"></i> Twitter</p>
        <p><i class="bi bi-snapchat"></i> Snapchat</p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold ">CONTACT WITH US</h5>
        <p><i class="fas fa-home mr-3"></i> Benfica Portugal, 3848</p>
        <p><i class="fas fa-envelope mr-3"></i> Benfica7@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> +433 564474322008</p>
        <p><i class="fas fa-print mr-3"></i> +433 564474322008</p>
      </div>
    </div>

  </div>
  <p class="text-center pt-4">Copyright@2023 CR7 | all rights reserved | contact </p>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="./views/js/book.js"></script>
</body>
</html>