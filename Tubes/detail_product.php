<?php 

include 'config.php';
$product = mysqli_query($conn,"SELECT * FROM `products` ORDER BY `products`.`id` ASC");
$p = mysqli_fetch_object($product);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="stylesheet" href="style3.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />

</head>
<body>
    <div class="container">
        <div class="product">
            <div class="gallery">
                <img src="image/<?php echo $p->image ?>"/>
            </div>
            <div class="detail">
              <h1><?php echo $p->name ?></h1>
              <h2><?php echo number_format($p->price)?></h2>
              <p><?php echo $p->detail?></p>
              <button class="button">Buy Now</button>
            </div>
        </div>
    </div>





</body>
</html>