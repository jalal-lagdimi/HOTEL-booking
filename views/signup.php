<?php
if(isset($_POST['submit'])){
  $creatUser = new AdminController();
  $creatUser->signup();
}
?>
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="vh-100" style="background-color:rgb(47, 126, 222);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; border: none;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./views/img/RG.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body pl-4  text-black">
                <form method="POST">
                <?php include "./views/includes/alerts.php" ?>
                  <div class="d-flex align-items-center ">
                    <span class="h1 fw-bold mb-1;" style="color:rgb(47, 126, 222);">CR7-HOTEL</span>
                  </div>
                  <div class="form-outline mb-1">
                    <label class="form-label" for="form2Example17">Full Name </label>
                      <input name="fullname" type="text" id="form2Example17" class="form-control " placeholder="Enter your full name"/>
                    </div>
                    <div class="form-outline mb-1">
                        <label class="form-label" for="form2Example17">Birthday </label>
                          <input name="date" type="date" id="form2Example17" class="form-control " placeholder="Enter your birthday"/>
                       </div>
                  <div class="form-outline mb-1">
                  <label class="form-label" for="form2Example17">Email </label>
                    <input name="email" type="email" id="form2Example17" class="form-control " placeholder="Enter your email"/>
                  </div>
                  <div class="form-outline mb-1">
                   <label class="form-label" for="form2Example27">Password</label>
                    <input name="password" type="password" id="form2Example27" class="form-control " placeholder="Enter your Password" />   
                  </div>
                  <div class="pt-1 mb-1">
                    <p>Have an acount ?<a href="<?php echo BASE_URL;?>loginusser" style="color:rgb(47, 126, 222);"> Login</a>
                    </p>
                </div>
                  <div class="pt-1 mb-1">
                    <button name="submit" class="btn btn-block" style="background-color: rgb(47, 126, 222);color: aliceblue;" border: none;style="background-color: #00c8ff" type="submit">Sign Up</button>
                    <a href="<?php echo BASE_URL;?>home" class="btn btn-block" style="background-color:rgb(47, 126, 222);color:aliceblue;">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


