<?php
	include("db.php");
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
		$sqlSelectSpecProd = mysql_query("select * from products where id = '$prodID'") or die(mysql_error());
		$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);
		$prodname= $getProdInfo["Product"];
		$prodcat = $getProdInfo["Category"];
		$prodprice = $getProdInfo["Price"];
		$proddesc = $getProdInfo["Description"];
		$prodimage = $getProdInfo["imgUrl"];
				}
?>
<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container">
			<center>
			<div class="row">
			
				<div class="col-sm-11 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                            
						
							<img src="reservation/img/products/<?php echo $prodimage; ?>" />	
                                
							</div>
						</div>
						<div class="col-sm-7" >
							<div class="product-information" style="background-color: #fff; margin-top: 2%;"><!--/product-information-->
							<h2 class="product" style="color:#fe980f; font-weight: bolder"><?php echo $prodname; ?></h2>
								<p>Category: <?php echo $prodcat; ?></p>
				
								<p>Price: <span class="price"><?php echo $prodprice; ?></span></p>
								<p style="text-align: center;"><?php echo $proddesc; ?></p>
								
								<br>
								<a class="btn btn-default add-to-cart" id="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Order</a>
								<p class="info hidethis" style="color:red;"><strong>Product Added to Cart!</strong></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
			</center>
		</div>
		</div>
	</section>
	
	<?php include('include/home/footer.php'); ?>