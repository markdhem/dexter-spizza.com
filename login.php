<?php include('include/admin/header2.php'); ?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row" >
				<center>
					<div style="background-color: #a7c2eb; height: 300px; width: 400px;">

						<div class="login-form" style="margin-top: 70px; padding-top: 10px;"><!--login form-->
								
							<h3><strong>Admin Login</strong></h3>
							<div class="error" style="margin-top: 1px;"></div>
							  <form style="max-width: 350px;">
							  	<center>
		                            <input type="text" name="username" placeholder="username" id="username" required/>
		                            <input type="password" name="password" placeholder="password" id="password" required/>
		                            <button  type="button" name="submit" class="btn btn-default" id="login">Login</button>
		                        </center>
	                        </form>
						</div><!--/login form-->
					</div>
				</center>
			</div>
		</div>
	</section><!--/form-->
	
<?php include('include/admin/footer2.php'); ?>
