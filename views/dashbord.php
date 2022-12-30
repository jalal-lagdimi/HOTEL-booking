<?php
$data = new ProductController();
$products = $data->getAllProducts();

$data = new ProductController();
$Res = $data->getAllReservation();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>crud</title>
</head>
<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,83,121,1) 35%, rgba(0,212,255,1) 100%);">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="color: #ffff; background-color:#21849d;width: 100%;">ADMIN INTERFACE</nav>
    <div class="container d-flex justify-content-between">
        <a href="<?php echo BASE_URL;?>add" class="btn  mb-3" style=" background-color:#05A01F;color:#ffff">ADD NEW</a>
        <a href="<?php echo BASE_URL;?>logout" class="btn  mb-3" style="background-color: #B50000; color:#ffff">LOG OUT</a>
    </div>
    <div class="container">
    <?php include "./views/includes/alerts.php" ?>
    <table class="table text-center">
  <thead class="table" style="background-color: #064757; color:#ffff">
 
    <tr>
      <th scope="col">IMAGE</th>
      <th scope="col">NAME</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PRICE</th>
      <th scope="col">CAPACITY</th>
      <th scope="col">TYPE</th>
      <th scope="col" >ACTION</th>
    </tr>
  </thead>
  <tbody style="background-color:#ffff;">
  <?php foreach($products as $product):?>
    <tr>
      <th><img src="uploads/<?php echo $product['image'];?>" style="width: 50px; hieght:50px"></th>
      <td ><?php echo $product['name'];?></td>
      <td ><?php echo $product['description'];?></td>
      <td ><?php echo $product['price'];?></td>
      <td ><?php echo $product['capacity'];?></td>
      <td ><?php echo $product['type'];?></td>
      <td class="d-flex  flex-row " style="justify-content: center;">
        <form method="POST" action="update" >
        <input type="hidden" name="id" value="<?php echo $product['id'];?>" >
        <button style="border: none;background-color:#ffff"><a href="" class="link-dark "><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></button> 
        </form>
        <form method="POST" action="delete">
        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
        <button style="border: none;background-color:#ffff"><a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="color: #ffff">OUR RESERVATION</nav>
    <div class="container">
      <table class="table text-center">
    <thead class="table " style="background-color: #064757; color:#ffff">
   
    <tr>
        <th scope="col">FROM</th>
        <th scope="col">TO</th>
        <th scope="col">GUEST</th>
        <th scope="col">PRICE</th>
        <th scope="col">CLIENT</th>
        <th scope="col">TYPE</th>
      </tr>
    </thead>
    <tbody style="background-color:#ffff;">
    <?php foreach($Res as $Reserv):?>
      <tr>
        <td ><?php echo $Reserv['datedebut'];?></td>
        <td ><?php echo $Reserv['datefin'];?></td>
        <td ><?php echo $Reserv['guestnumber'];?></td>
        <td ><?php echo $Reserv['price'];?>$/Night</td>
        <td ><?php echo $Reserv['fullname'];?></td>
        <td ><?php echo $Reserv['type'];?></td>
     </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
      </div>
</body>

<footer class="container-fluid text-white mt-5 pt-2 pb-2" style="background-color:rgb(22, 109, 136);">
  <p class="text-center pt-4">Copyright@2023 CR7 | all rights reserved | contact </p>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
</html>