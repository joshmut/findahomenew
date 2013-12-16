<aside class="sidebar sidebar-right">

	<p><strong><?php echo $p_list->num_rows(); ?> Propertie(s) to view men. </strong></p>
			
    	<div class="container">
		    <div class="row">
            	<div class="span12">
            	  <h3 class="title">Featured Listings</h3>                  
            	</div>
                	<?php foreach($p_list ->result() as $row): ?>
                <div class="span4 small-list">
                    <span class="label rent">FOR <?php echo $row->classification; ?></span><br/>
                	<img width="100" height="100" src="img/img/small-pic-4.jpg" />
                    <a href="#" class="arrow"></a>
                	<div class="info"> 
                    	<h2><?php echo $row->property_name; ?></h2> <div class="text1"><?php echo $row->location; ?></div>
                    	<div class="price">Kes <?php echo $row->price; ?></div>
                    </div>
                </div>
				
				
				 <!--<div class="span3">
                	<div class="item">
                    <span class="label rent">FOR <?php echo $row->classification; ?></span>
               	    <img src="img/img/featured-pic-3.jpg" />
                    <div class="info"> 
                    	<h3><?php echo $row->property_name; ?></h3> <div class="text1"><?php echo $row->location; ?></div>
                    	<div class="price">Kes <?php echo $row->price; ?></div>
                        <div class="info-listing">
                            <span class="meter">500 sq Meters</span>
                            <span class="car">2</span>
                            <span class="bath"><?php echo $row->bathroom; ?></span>
                            <span class="bed"><?php echo $row->bedroom; ?></span>
                        </div>
                    </div>
                    </div>
              </div>-->
				
            </div>
			</div>
			
			
		<?php endforeach; ?>


</aside>