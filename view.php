<?php
session_start();
include('./config/config.php');
include('./class/Termek.php');

$id = $_GET['id'];
?>
<?php




$item_array = array(
 'id' => "123",
 'nev' => "Apple",
 'ar' => 120,
 'mennyiseg' => 10
 );
 $_SESSION["kosár"][0] = $item_array;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kosár teszt</title>
		<style>
		.product-details{
    width: 100%;
    padding: 60px 10vw;
    display: flex;
    justify-content: space-between;
}

.image-slider{
    width: 500px;
    height: 500px;
    position: relative;
    background-image: url('../img/product\ image\ 1.png');
    background-size: cover;
}

.product-images{
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    background: #fff;
    border-radius: 5px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    height: 100px;
    grid-gap: 10px;
    padding: 10px;
}

.product-images img{
    width: 100%;
    height: 80px;
    object-fit: cover;
    cursor: pointer;
}

.product-images img.active{
    opacity: 0.5;
}


.details{
    width: 70%;
}

.details .product-brand{
    text-transform: capitalize;
    font-size: 30px;
}

.details .product-short-des{
    font-size: 25px;
    line-height: 30px;
    height: auto;
    margin: 15px 0 30px;
}

.product-price{
    font-weight: 700;
    font-size: 30px;
}

.product-actual-price{
    font-size: 30px;
    opacity: 0.5;
    text-decoration: line-through;
    margin: 0 20px;
    font-weight: 300;
}

.product-discount{
    color: #ff7d7d;
    font-size: 20px;
}

.product-sub-heading{
    font-size: 30px;
    text-transform: uppercase;
    margin: 60px 0 10px;
    font-weight: 300;
}

.size-radio-btn{
    display: inline-block;
    width: 80px;
    height: 80px;
    text-align: center;
    font-size: 20px;
    border: 1px solid #383838;
    border-radius: 50%;
    margin: 10px;
    margin-left: 0;
    line-height: 80px;
    text-transform: uppercase;
    color: #383838;
    cursor: pointer;
}

.size-radio-btn.check{
    background: #383838;
    color: #fff;
}

.btn{
    width: 48%;
    padding: 20px;
    border-radius: 5px;
    background: none;
    border: 1px solid #383838;
    color: #383838;
    font-size: 20px;
    cursor: pointer;
    margin: 20px 0;
    text-transform: capitalize;
}

.cart-btn{
    margin-right: 2%;
    background: #383838;
    color: #fff;
}
		</style>
	</head>
	<body>
		<?php include('includes/navbar.php'); ?>
		<!-- hero section -->
        

        <?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    if(isset($db)){
        echo "Okay here";
    }else{
        echo "Valami itt már nem jó";
    }

		$termekek = Termek::termekInfo($id, $db);
		
		foreach($termekek as $termek){
			$nev = $termek->nev;
            echo $nev;
        }
	?>


<section class="product">
    <div class="product-container">
		<section class="product-details">
			<div class="image-slider">
				<div class="product-images">
					<img src="img/product image 1.png" class="active" alt="">
					<img src="img/product image 2.png" alt="">
					<img src="img/product image 3.png" alt="">
					<img src="img/product image 4.png" alt="">
				</div>
			</div>
		</section>
		<section>
			<div class="details">
				<h2 class="product-brand">Nev</h2>
				<p class="product-short-des">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
				<span class="product-price">$99</span>
				<span class="product-actual-price">$200</span>
				<span class="product-discount">(50% off)</span>
				
				<p class="product-sub-heading">select size</p>

        <input type="radio" name="size" value="s" checked hidden id="s-size">
        <label for="s-size" class="size-radio-btn check">s</label>
        <input type="radio" name="size" value="m" hidden id="m-size">
        <label for="m-size" class="size-radio-btn">m</label>
        <input type="radio" name="size" value="l" hidden id="l-size">
        <label for="l-size" class="size-radio-btn">l</label>
        <input type="radio" name="size" value="xl" hidden id="xl-size">
        <label for="xl-size" class="size-radio-btn">xl</label>
        <input type="radio" name="size" value="xxl" hidden id="xxl-size">
        <label for="xxl-size" class="size-radio-btn">xxl</label>
				
				<button class="btn cart-btn">add to cart</button>
				<button class="btn">add to wishlist</button>
			</div>
		</section>
	</div>
	<section class="detail-des">
    <h2 class="heading">description</h2>
    <p class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, ......</p>
</section>
</section>
		
<br>
		<script type="text/javascript">
		const productImages = document.querySelectorAll(".product-images img"); // selecting all image thumbs
const productImageSlide = document.querySelector(".image-slider"); // seclecting image slider element

let activeImageSlide = 0; // default slider image

productImages.forEach((item, i) => { // loopinh through each image thumb
    item.addEventListener('click', () => { // adding click event to each image thumbnail
        productImages[activeImageSlide].classList.remove('active'); // removing active class from current image thumb
        item.classList.add('active'); // adding active class to the current or clicked image thumb
        productImageSlide.style.backgroundImage = `url('${item.src}')`; // setting up image slider's background image
        activeImageSlide = i; // updating the image slider variable to track current thumb
    })
})

// toggle size buttons

const sizeBtns = document.querySelectorAll('.size-radio-btn'); // selecting size buttons
let checkedBtn = 0; // current selected button

sizeBtns.forEach((item, i) => { // looping through each button
    item.addEventListener('click', () => { // adding click event to each 
        sizeBtns[checkedBtn].classList.remove('check'); // removing check class from the current button
        item.classList.add('check'); // adding check class to clicked button
        checkedBtn = i; // upading the variable
    })
})
		</script>
	</body>
</html>

