
<?php include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h3 class="title text-center">Messages</h3>
                        
          
          					<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" style="border: transparent; height: 25px;" />
					<table cellpadding="80px" cellspacing="2" id="resultTable">
						<thead>
							<tr style="height: 40px;">

								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff;">Customer Name</th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff;">Emai Address</th>	
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff;">Contact Number</th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff;">Date Send</th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff;">Message</th>
								<th style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff;">Action</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM order");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td><div align="center" style="font-size:13px;">'.$row['name'].'</div></td>';
									echo '<td><div align="center" style="font-size:13px;">'.$row['email'].'</div></td>';
									echo '<td><div align="center" style="font-size:13px;">'.$row['number'].'</div></td>';
									echo '<td><div align="center" style="font-size:13px;">'.$row['date'].'</div></td>';
									echo '<td><div align="center" style="font-size:13px; max-width: 100%;"><textarea>'.$row['message'].'</textarea></div></td>';
									echo '<td><div align="center" style="font-size:18px;"><a href="#" id ="'.$row['id'].'" class="delbutton" title="Click To Delete"><i class="fa fa-times fa-lg text-danger"></i></a></div></td>';
									echo '</tr>';
								}
?> 
						</tbody>
					</table>
              </section>
<?php include('include/admin/footer.php'); ?>	