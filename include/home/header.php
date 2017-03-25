<?php include('db.php'); ?>
<?php session_start(); ?>
<?php //print_r($_SESSION['cart']); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    $cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }
        function getcategory(){
            $result = mysql_query("SELECT * FROM category");
            return $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dexter's Pizza</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

</head><!--/head-->

<body>
		
		<div class="header-bottom navbar navbar-inverse" style="background-color: #222d32; padding: 0px; border-radius: 0%; box-shadow: 0 10px 20px #4f5155;"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header navbar-default">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse" style="margin-top: 20px;">
								<a href="index.php"><img src="include/home/dexlogo.png" style="max-width: 110px; float: left;"></a>
                                <li style="margin-top: 50px;"><a href="index.php">Home</a></li>
                                <li style="margin-top: 126px;margin-left: -88px; border-radius: 5%; position: fixed; background-color: #fff; padding: 5px;  float: right; z-index: 999; font-size: 10px"><a href="cart.php" style="color: #000;">Orders<span class="badge"></span></a></li>
								<li style="margin-top: 50px;"><a href="about.php">About Us</a></li>     
								<li style="margin-top: 50px;"><a href="contact.php">Contact Us</a></li>	
							</ul>
						</div>
					</div>
                    <div class="col-sm-3">
						<div class="search_box pull-right" style="margin-top: 60px;">
                            <form action="index.php" method="post">
							     <input type="text" placeholder="Search" name="filter" style="border-radius: 3%; height: 30px;" />
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    