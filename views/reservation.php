<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php




?>
<body>
    <?php print_r($_POST['id']);?>
    <form action="" method="POST"></form>
    <?php include "./views/includes/alerts.php" ?>
    <input type="date" name="datedebut"> <br>
    <input type="date" name="datefin"> <br>
    <button type="submit" name="submit">BOOK</button>   
</body>
</html>