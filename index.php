<?php
include_once('php/db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>katG</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) , url('images/1.jpg');">
    <div class="tit">
        <h1>kat<span style="color: orange;">G</span></h1>
        <a href="php/login.php">login</a>
    </div>
    <div class="wrap">
     <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
     </div>
    </div>
    <div class="mein">
        <p>One stop for your daily needs....</p>
        
    </div>
    </div>
  


    <div class="cart">
        <a href="#"><img src="images/2.png" alt="cart"></a>
    </div>
    <div class="quick-buy">
        <p>Quick-buy</p>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-img">
                <img src="images/3.jpg" alt="">
            </div>
            <div class="card-desc">
                 <p>Tomatoes</p>      
                 <a>price: 15/kg</a>          
            </div>
            <div class="atc">
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/5.jpg" alt="">
            </div>
            <div class="card-desc">
                 <p>Potatoes</p> 
                 <a>price: 20/kg</a>                 
            </div>
            <div class="atc">
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="card-desc">
                 <p>Red bull</p>     
                 <a>price: 350rs</a>             
            </div>
            <div class="atc">
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/6.jpg" alt="">
            </div>
            <div class="card-desc">
                 <p>Banana</p>     
                 <a>price: 30/kg</a>             
            </div>
            <div class="atc">
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="images/7.jpg" alt="">
            </div>
            <div class="card-desc">
                 <p>Dairy milk</p>     
                 <a>price: 40rs</a>             
            </div>
            <div class="atc">
                <a href="#">Add to cart</a>
            </div>
        </div>'<div class="card">
            <div class="card-img">
                <img src="images/8.jpg" alt="">
            </div>
            <div class="card-desc">
                 <p>Eggs</p>     
                 <a>price: 40/kg</a>             
            </div>
            <div class="atc">
                <a href="#">Add to cart</a>
            </div>
        </div>
    </div>
    <div class="categories">
        <p>Categories</p>
    </div>
    <div class="cat-cards">
        <div class="cat" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) , url(images/10.jpg);">
            <p>Fruits/Vegetables</p>
        </div>
        <div class="cat" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) , url(images/9.jpg);">
            <p>Soft-drinks</p>
        </div>
        <div class="cat" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) , url(images/12.jpg);">
            <p>Chips/Biscuits</p>
        </div>
        <div class="cat" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) , url(images/13.jpg);">
            <p>Chocolates</p>
        </div>
    </div>
<div class="footer">
    <div class="rights">
      <a>@cyber_netix</a>
    </div>
    <div class="contact">
       
    </div>
</div>


</body>
</html>