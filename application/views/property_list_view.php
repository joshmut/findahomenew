<?php
	/*
		Document	:	property_list_view.php
		Created		:	11/12/2013	9.51PM
		Author 		:	chegzcol

	*/
?>

<section class="content">
	
	<!--<h3>Property List </h3>
	
			<div class="row-fluid">
				<div class="span12">
					<table class="table table-striped table-data">
							<thead>
								<tr role="row">
									<th>Image</th>
									<th>Name</th>
									<th>Type</th>
									<th>Location</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($main_list->result() as $row): ?>
								<tr id="<?php echo $row->user_id; ?>" >
									<td><?php echo $row->user_id; ?></td>
									<td><?php echo $row->property_name; ?></td>
									<td><?php echo $row->property_type; ?></td>
									<td><?php echo $row->location; ?></td>
									<td><?php echo $row->price; ?></td>
									<td><a title="view property" href="<?php echo site_url(); ?>/property_details/view_property/?propertyid=<?php echo $row->user_id; ?>">View</a></td>
								</tr>
								<?php endforeach; ?>
							
							</tbody>
						</table>
				</div>
			</div>-->
			
			<!-- another list -->

			<div class="contaier">
			<div class="row">
            	<div class="span12">
            	  <h3 class="title">Latest Listings</h3>                  
            	</div>
                <?php foreach($main_list->result() as $row): ?>
                <div class="span4 small-list">
                    <span class="label sale">FOR <?php echo $row->classification; ?></span>
                	<a title="view property" href="<?php echo site_url(); ?>/property_details/view_property/?propertyid=<?php echo $row->user_id; ?>"><img src="img/img/small-pic-1.jpg" /></a>
                    <a href="#" class="arrow"></a>
                	<div class="info"> 
                    	<h2><?php echo $row->property_name; ?></h2> <div class="text1"><?php echo $row->property_type; ?></div>
                    	<div class="price">Kes <?php echo $row->price; ?></div>
						<div class="text1">Location <?php echo $row->location; ?></div>
                    </div>
                </div>
				<?php endforeach; ?>
			</div>
			</div>
			


</section>


		<!-- Javascript -->
		<!-- JS:library-->
		<script src="js/library/jquery.min.js"></script>
		<script src="js/library/jquery-ui.min.js"></script>

		<!-- JS:calendar-->
		<script src='js/styler/calendar/_loader.js'></script>
		
		<!-- JS:charts-->
		<script src="js/styler/charts/jquery.flot.js"></script>
		<script src="js/styler/charts/jquery.flot.stack.js"></script>
		<script src="js/styler/charts/jquery.flot.pie.min.js"></script>
		<script src="js/styler/charts/jquery.sparkline.min.js"></script>
		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="excanvas.min.js"></script><![endif]-->

		<!-- JS:tables-->
		<script src="js/styler/jquery.dataTables.min.js"></script>

		<!-- JS:bootstrap-->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		
		<!-- JS:custom js for this template -->
		<script src="js/styler/custom.js"></script>
		
		
				<!--picked from casabela to style property_details -->
		
		    <!-- LOAD CSS FILES -->
    <link href="css/css/main.css" rel="stylesheet" type="text/css" />
    
    <!-- LOAD JS FILES -->
   	<script src="js/js/jquery.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/jquery.isotope.min.js"></script>
    <script src="js/js/jquery.prettyPhoto.js"></script>
    <script src="js/js/easing.js"></script>
    <script src="js/js/jquery.ui.totop.js"></script>
	<script src="js/js/selectnav.js"></script>
    <script src="js/js/ender.js"></script>
    <script src="js/js/custom.js"></script>
    <script src="js/js/responsiveslides.min.js"></script>
      <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $(".pic_slider").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
    });
  </script>
		
		<!--end of casabella -->
  	</body>
</html>