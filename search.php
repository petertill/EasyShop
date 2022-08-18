<?php
session_start();
include('Termek.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kosár teszt</title>
		<style>
		.search-results{
    width: 100%;
    padding: 60px 0;
}

.heading{
    font-size: 20px;
    text-transform: capitalize;
    font-weight: 400;
    margin-bottom: 40px;
    padding: 0 10vw;
}

.heading span{
    font-weight: 700;
}


		</style>
	</head>
	<body>
		<?php include('includes/navbar.php'); ?>
		<!-- hero section -->
		<section class="search-results">
			<h2 class="heading">search results for <span>product</span></h2>
			<div class="product-container">
	<?php 
		$termekek = Termek::termekLista();
		
		foreach($termekek as $termek){
			$nev = $termek->nev;
	?>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card1.png" class="product-thumb" alt="">
            <button class="card-btn">add to whislist</button>
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
		
<br>
		<script type="text/javascript">
		
		</script>
		<style>
			.product-container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    height: auto;
    grid-row-gap: 40px;
}
		</style>
	</body>
</html>

