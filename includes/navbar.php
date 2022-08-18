<script src="https://kit.fontawesome.com/30ed78d123.js" crossorigin="anonymous"></script>
<style>
/*Navbar*/

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'roboto', sans-serif;
}

.navbar{
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    background: #f5f5f5;
    z-index: 9;
}

.nav{
    padding: 10px 10vw;
    display: flex;
    justify-content: space-between;
}

.brand-logo{
    height: 60px;
}

.nav-items{
    display: flex;
    align-items: center;
}

.search{
    width: 500px;
    display: flex;
}

.search-box{
    width: 80%;
    height: 40px;
    padding: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: 1px solid #d1d1d1;
    text-transform: capitalize;
    background: none;
    color: #a9a9a9;
    outline: none;
}

.search-btn{
    width: 20%;
    height: 40px;
    padding: 10px 20px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #383838;
    color: #fff;
    text-transform: capitalize;
    font-size: 15px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

.search-box::placeholder{
    color: #a9a9a9;
}

.nav-items a{
    margin-left: 20px;
}

.nav-items a img{
    width: 30px;
}

/* Categories*/

.links-container{
    width: 100%;
    display: flex;
    padding: 10px 10vw;
    justify-content: center;
    list-style: none;
    border-top: 1px solid #d1d1d1;
}

.link{
    text-transform: capitalize;
    padding: 0 10px;
    margin: 0 5px;
    text-decoration: none;
    color: #383838;
    opacity: 0.5;
    transition: .5s;
}

.link:hover{
    opacity: 1;
}

/* Hero */
@import 'nav.css';

.hero-section{
    width: 100%;
    height: calc(100vh - 120px);
    background-image: url('../img/header.png');
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-section .logo{
    height: 150px;
    display: block;
    margin: auto;
}

.hero-section .sub-heading{
    margin-top: 10px;
    text-align: center;
    color: #fff;
    text-transform: capitalize;
    font-size: 35px;
    font-weight: 300;
}

/* Termek slider */
.product{
    position: relative;
    overflow: hidden;
    padding: 20px 0;
}

.product-category{
    padding: 0 10vw;
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 40px;
    text-transform: capitalize;
}
.product-container{
    padding: 0 10vw;
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
}

.product-container::-webkit-scrollbar{
    display: none;
}

.product-card{
    flex: 0 0 auto;
    width: 250px;
    height: 450px;
    margin-right: 40px;
}

.product-image{
    position: relative;
    width: 100%;
    height: 350px;
    overflow: hidden;
}

.product-thumb{
    width: 100%;
    height: 350px;
    object-fit: cover;
}

.discount-tag{
    position: absolute;
    background: #fff;
    padding: 5px;
    border-radius: 5px;
    color: #ff7d7d;
    right: 10px;
    top: 10px;
    text-transform: capitalize;
}

.card-btn{
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    padding: 10px;
    width: 90%;
    text-transform: capitalize;
    border: none;
    outline: none;
    background: #fff;
    border-radius: 5px;
    transition: 0.5s;
    cursor: pointer;
    opacity: 0;
}

.product-card:hover .card-btn{
    opacity: 1;
}

.card-btn:hover{
    background: #efefef;
}

.product-info{
    width: 100%;
    height: 100px;
    padding-top: 10px;
}

.product-brand{
    text-transform: uppercase;
}

.product-short-des{
    width: 100%;
    height: 20px;
    line-height: 20px;
    overflow: hidden;
    opacity: 0.5;
    text-transform: capitalize;
    margin: 5px 0;
}

.price{
    font-weight: 900;
    font-size: 20px;
}

.actual-price{
    margin-left: 20px;
    opacity: 0.5;
    text-decoration: line-through;
}
.pre-btn, .nxt-btn{
    border: none;
    width: 10vw;
    height: 100%;
    position: absolute;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
    cursor: pointer;
    z-index: 8;
}

.pre-btn{
    left: 0;
    transform: rotate(180deg);
}

.nxt-btn{
    right: 0;
}

.pre-btn img, .nxt-btn img{
    opacity: 0.2;
}

.pre-btn:hover img, .nxt-btn:hover img{
    opacity: 1;
}

</style>
<nav class="navbar">
<div class="nav">
    <!--img src="img/dark-logo.png" class="brand-logo" alt=""--><h1 style="margin-top: 10px; margin-bottom: 10px;"><span style="color: blue;">My </span>Shop</h1>
    <div class="nav-items">
        <div class="search">
            <input type="text" class="search-box" placeholder="search brand, product">
            <button class="search-btn">search</button>
        </div>
        <!--a href="#"><img src="img/user.png" alt=""></a>
        <a href="#"><img src="img/cart.png" alt=""></a-->
        <a href="#" style="color: black;"><i class="fas fa-shopping-cart fa-xl"></i></a>
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


