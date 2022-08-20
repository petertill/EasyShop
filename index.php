<?php
session_start();
include('./config/config.php');
include('./class/Termek.php');
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
		
		</style>
	</head>
	<body>
		<?php include('includes/navbar.php'); ?>
		<!-- hero section -->
<header class="hero-section">
    <div class="content">
        <img src="img/light-logo.png" class="logo" alt="">
        <p class="sub-heading">start the school with our products</p>
    </div>
</header>
<section class="product">
    <h2 class="product-category">best selling</h2>
    <button class="pre-btn"><i class="fas fa-angle-right"></i></button>
	<button class="nxt-btn"><i class="fas fa-angle-right"></i></button>
    <div class="product-container">
	<?php 
		$termekek = Termek::termekLista($db);
		
		foreach($termekek as $termek){
			$nev = $termek->nev;
			$id = $termek->azon;
	?>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card1.png" class="product-thumb" alt="">
            <a class="card-btn" href="view.php?id=<?php echo $id; ?>">Megtekintés</a>
        </div>
        <div class="product-info">
            <h2 class="product-brand"><?php echo $nev; ?></h2>
            <p class="product-short-des">a short line about the cloth..</p>
            <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
    </div>
    <?php
}
?>
    +7 more cards
</div>
</section>
		<!--?php 
		$termekek = Termek::termekLista();
		
		foreach($termekek as $termek){
			$nev = $termek->nev;
			echo $nev;
		}
		?>
		<div class="bolt-item">
			<form action="index.php" method="POST">
				<input type="hidden" name="ar" value="200">
				<input type="hidden" name="nev" value="Alma">
				<input type="hidden" name="azon" value="123">
				<input type="number" id="" name="mennyiseg" value="1">
				<input type="submit" value="Kosárba teszem">
			</form>
		</div-->
		<?php include('includes/footbar.php'); ?>
		<script type="text/javascript">
		const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimenstions = item.getBoundingClientRect();
    let containerWidth = containerDimenstions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
		</script>
	</body>
</html>
