<section>
		<div class="container">
			<div class="row" >
				<div class="col-sm-3" >
					<div class="left-sidebar">
                        <div class="list-group">
                        <?php                            
                            $q = "Select * from category order by title asc";
                            $r = mysql_query($q);

                            if($r){
                                while($row = mysql_fetch_array($r)){
                                    echo '<a href="category.php?filter='.$row['title'].'" class="list-group-item" style="color:#000"><img src="include/home/dexlogo.png" style="width:10%;">'.$row['title'].'</a>';
                                }
                            }
                        ?>                    
                        </div> 
                        <!--/category-products-->
                        </div>
                        </div>