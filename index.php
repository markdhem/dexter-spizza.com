<?php include('include/home/header.php'); ?>
    	<section>
		<div class="container">
			<div class="row">
		<?php include('include/home/sidebar.php'); ?>

			
                    
    <div class="col-sm-13 padding-right">
					<div class="features_items"  style="border: 1px solid;"><!--features_items-->
						<h2 class="text-center" style="padding: 2px; background-color: #fff">Our Menu's</h2>

	
<!--php starts here-->
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");
                    
				}
				else
				{
					$result = mysql_query("SELECT * FROM products");
                }
					
				if($result){				
				while($row=mysql_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
						  <style>
					
							.product-image-wrapper{
								border: transparent;
								height: 420px;								
							}
							.product-image-wrapper:hover{
								cursor: pointer;
								background-color: #fff;
								box-shadow: 0 10px 20px #222d32;
							}

							
						</style>
					<img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="200" height="200" style="margin-top: 35px;"/></a>
                    </a>
					
					<h2 >'.$row['Product'].' </h2>
					<h2 >PHP '.$row['Price'].'</h2>
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-default add-to-cart">View Details</a>
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>


        </div>
</div>
</div>
</div>
</section>

<?php include('include/home/footer.php'); ?>