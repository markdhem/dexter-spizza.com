
<?php include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h3 class="title text-center">Menus</h3>
                        
          
          					<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" style="border: transparent; height: 25px;" />
					<a rel="facebox" href="addproduct.php" style="float: right; padding: 6px; background-color: #428bca; color: #fff; border-radius: 4%;">Add Product</a>
					<table cellpadding="80px" cellspacing="2" id="resultTable">
						<thead>
							<tr style="height: 40px;">
								<th  style="border-left: 1px solid #C1DAD7; text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> ID </th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> Image </th>	
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> Product </th>
								<th style="text-align:center;text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> Desciption </th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> Price </th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> Category </th>
                                <th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;"> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM products");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
									echo '<td><a rel="facebox" href="editproductimage.php?id='.$row['ID'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" width="80" height="50"></a></td>';
									echo '<td><div align="center">'.$row['Product'].'</div></td>';
									echo '<td><div align="left">'.$row['Description'].'</div></td>';
									echo '<td><div align="center">'.$row['Price'].'</div></td>';
									echo '<td><div align="center">'.$row['Category'].'</div></td>';
									echo '<td><div align="center" style="font-size:15px ;"><a rel="facebox" href="editproductdetails.php?id='.$row['ID'].'"><i class="fa fa-edit fa-lg text-success" title="Edit Data"></i></a> <a href="#" id="'.$row['ID'].'" class="delbutton" title="Click To Delete"><i class="fa fa-times fa-lg text-danger"></i></a></div></td>';
									echo '</tr>';
								}
?> 
						</tbody>
					</table>
              </section>
<?php include('include/admin/footer.php'); ?>	