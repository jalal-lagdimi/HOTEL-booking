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
    <a class="navbar-brand" href="home">CR7-Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars-staggered" style="color: white;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home">HOME</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="home#about">ABOUT</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="home#services">SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home#contact">CONTACT</a>
        </li>     
        <li class="nav-item">
          <a class="nav-link" href="#booking">BOOKING</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="reservation">RESERVATION</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link nv" href="<?php echo BASE_URL;?>logoutuser">LOGOUT</a>
        </li>  
        </ul>
     
    </div>
  </div>
</nav>

<!-- HEADER -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./views/img/BG11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption nt ">
        <h5>BOOK YOUR ROOM</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere aliquid magni veritatis? Fuga, ad sit!.</p>
      </div>
    </div>
  </div>
</div>

<!-- BOOKING -->
<?php
if(isset($_POST['submit'])){
    $searchRes = new ProductController();
    $searchRes->addRes();
}
 if(isset($_POST['books'])){
      $newRes = new ProductController();
      $newRes->addReservation();
}
if(isset($_POST['bookst'])){
  $newRes = new ProductController();
  $newRes->addReservationGuest();
}
?>


  <section id="booking" class="about section-padding mt-3">
  <div class="container">
    <div class="section-header text-center pb-3">
    <?php include "./views/includes/alerts.php" ?>

      <h2>BOOKING YOUR ROOM</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum suscipit <br> itaque,fuga quas voluptate dolorem</p>
    </div>
    <form action="#rooms" method="POST">
        <div class="book d-flex items-center ">
            <div class="date" data-provide="datepicker">
                <label for="date">From</label>
                <input name="datedebut"type="date" id="date" class="form-control d-block" value="2023-01-01" min="2023-01-01"
                    max="2023-12-30">
            </div>
            <div class="date" data-provide="datepicker">
                <label for="date">To</label>
                <input name="datefin" type="date" id="date" class="form-control d-block" value="2023-01-02" min="2023-01-02"
                    max="2023-12-30">
            </div>
            <div class="date" data-provide="datepicker">
                <label for="">Room</label>
                <select  name="type" class="form-select" aria-label="Default select example" id="room">
                    <option value="SINGLE">SINGLE</option>
                    <option value="DOUBLE">DOUBLE</option>
                    <option value="SUITE">SUITE</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker" id="suite" style="display: none;">
                <label for="">Suite</label>
                <select  name="suitetype" class="form-select" aria-label="Default select example">
                    <option value="">Select suite type</option>
                    <option value="Standard suite rooms">Standard suite rooms</option>
                    <option value="Junior suite rooms">Junior suite rooms</option>
                    <option value="Presidential suite room">Presidential suite room</option>
                </select>
            </div>
            <div class="date" data-provide="datepicker">
                <button name="submit" type="submit" class="btn bknow">Search</button>
            </div>
        </div> 
    </form>
  </div>

<?php
if(isset($_POST['submit'])){
  $data = new ProductController();
  $products = $data->searchAllProducts();
}
 ?>

 <section id="rooms" class="rooms section-padding">
  <div class="container">
    <div class="row d-flex flex-wrap">
     <?php if(isset($products)){?>
    <?php foreach($products as $product):?>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card text-light text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-2">
              <img src="uploads/<?php echo $product['image'];?>"style="width: 100%;height: 350px;" alt="">
              <h3 class="card-title pt-2"style="color:rgb(22, 109, 136);"><?php echo $product['name'];?></h3>
              <p> <?php echo $product['description'];?></p>
              <h6 class="type" style="color:rgb(22, 109, 136);"><?php echo $product['type'];?>
             <?php if($product['type']=='SUITE'){ ?>
                <?php echo '/'. $product['suitetype'];   
              }?>
              </h6>
              <div class="stars mb-2"style="color: rgb(255, 225, 0);">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 mb-3><?php echo $product['price'];?>$/Night</h5>  
              <form action="booking" method="POST">
              <input type="hidden" name="id" value="<?php echo $product['id'];?>" >
              <input type="hidden" name="capacity" value="<?php echo $product['capacity'];?>" >
              <?php if($product['type']=='SINGLE'||$product['type']=='DOUBLE'){ ?>
                <button type="submit" name="books" style="border:none;padding:5px;border-radius:7px;">Book Now</button>
                </form>
             <?php }else{ ?>
              <form action="guest" method="POST">
              <button type="submit" name="bookst" style="border:none;padding:5px;border-radius:7px;">Book Now</button>
                </form>
                <?php   }?>
            
            </div>
          </div>
        </div> 
      </div> 
      <?php endforeach; ?>
      <?php  };?>
    </div>
 </section>
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