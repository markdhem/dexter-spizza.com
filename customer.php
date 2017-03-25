<?php include('include/admin/header.php'); ?>
<section>
		<div class="container">
			<div class="row">
                <?php include('include/admin/sidebar.php'); ?>
                <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h3 class="title text-center">Customers</h3>                                            					
<!-- Nav tabs -->

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="data1">
        <table class="table table-bordered">
            <thead class="bg-primary" style="text-align: center; font-weight: bolder; background-color: #222d32; color: #fff; font-size: 10px;">
                <th>Customer Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Email Address</th>
                <th>Order Information</th>
            </thead>
            <?php $unpaid = $jim->getunpaidorders(); ?>
            <?php while($row = mysql_fetch_array($unpaid)){ ?>
                <tr>
                	<td><?php echo $row['name']; ?></td>
                	<td><?php echo $row['address']; ?></td>
                	<td><?php echo $row['contact']; ?></td>
                	<td><?php echo $row['email']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=unconfirmed" target="_blank"><i class="fa fa-external-link"></i> View</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    
</div>
              </section>



<?php include('include/admin/footer.php'); ?>