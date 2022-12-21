<?php
if(isset($_POST['submit'])){
    $newProduct = new ProductController();
    $newProduct->addProduct();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION DES DESTINATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
     crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
   

</head>
<body>
<section class="vh-100" style="background-color: #06576c;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; border: none;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./views/img/M4.jpeg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form method="POST" enctype="multipart/form-data">
                <?php include "./views/includes/alerts.php" ?>
                  <div class="form-outline mb-3">
                    <input name="name" type="text" id="form2Example17" class="form-control" placeholder="name" />
                  </div>

                  <div class="form-outline mb-3">
                    <input name="description" type="text" id="form2Example27" class="form-control" placeholder="Description" />
                  </div>

                  <div class="form-outline mb-3">
                    <input name="price" type="number" id="form2Example27" class="form-control" placeholder="Price"/>
                  </div>

                  <div class="form-outline mb-3" name="type" >
                    <select class="form-select"  name="type" aria-label="Default select example" id="room">
                        <option value="SINGLE">SINGLE</option>
                        <option value="DOUBLE">DOUBLE</option>
                        <option value="SUITE">SUITE</option>
                      </select>
                  </div>

                  <div class="form-outline mb-3" name="suitetype" >
                    <select class="form-select"  name="suitetype" aria-label="Default select example" id="suite" style="display: none;">
                        <option value="" ></option>
                        <option value="Standard suite">Standard suite rooms</option>
                        <option value="Junior suite">Junior suite rooms</option>
                        <option value="Presidential suite">Presidential suite</option>
                      </select>
                  </div>

                  <div class="form-outlin mb-3">
                    <input value="1" name="capacity" type="number" id="capacity" class="form-control" placeholder="Capacity"  />
                  </div>

                  <div class="form-outline mb-3">
                    <input name="file" type="file" id="form2Example27" class="form-control" />
                    
                  </div>

                  <div class="pt-1 mb-2">
                    <button name="submit" class="btn btn-dark  btn-block addd"  style="background-color: #06576c" type="submit">Add</button>
                    <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-dark btn-block" style="background-color: #06576c">Cancel</a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./views/js/script.js"></script>
</section>

