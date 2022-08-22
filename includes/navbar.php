<?php include('./config/config.php'); ?>
<script src="https://kit.fontawesome.com/30ed78d123.js" crossorigin="anonymous"></script>
<?php
$theme = "light";
if($theme = "dark"){
?>
<link href="css/dark.css" rel="stylesheet" type="text/css" />
<?php }else{
?>
<link href="css/light.css" rel="stylesheet" type="text/css" />
<?php } ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style>
    .chart {
  /*  width: 60px;
    height: 60px;*/
    border: none;
  /*  margin-top: 40px;
    margin-left: 40px;*/
    position: relative;
    }
.chart:before{
    content: attr(data-count);
    width: 18px;
    height: 18px;
    line-height: 18px;
    text-align: center;
    display: block;
    border-radius: 50%;
    background: rgb(67, 151, 232);
    border: 1px solid #FFF;
    box-shadow: 0 1px 3px rgba(0,0,0,0.4);
    color: #FFF;
    position: absolute;
    top: -7px;
    left: -7px;

    left: auto;
    right: -7px;

}

</style>
<nav class="navbar">
<div class="nav">
    <!--img src="img/dark-logo.png" class="brand-logo" alt=""--><h1 style="margin-top: 10px; margin-bottom: 10px;"><span style="color: blue;">My </span>Shop</h1>
    <div class="nav-items">
    <form action="search.php">
        <div class="search">
            <input type="text" name="q" class="search-box" placeholder="search brand, product">
            <button class="search-btn">search</button>
        </div></form>
        <!--a href="#"><img src="img/user.png" alt=""></a>
        <a href="#"><img src="img/cart.png" alt=""></a-->
        <a href="cart.php" style="color: black;" class="chart" data-count="0"><i class="fas fa-shopping-cart fa-xl"></i></a>
    </div>
</div>
<ul class="links-container">
    <li class="link-item"><a href="#" class="link">home</a></li>
    <li class="link-item"><a href="#" class="link">women</a></li>
    <li class="link-item"><a href="#" class="link">men</a></li>
    <li class="link-item"><a href="#" class="link">kids</a></li>
    <li class="link-item"><a href="#" class="link">accessories</a></li>
</ul>
</nav>


