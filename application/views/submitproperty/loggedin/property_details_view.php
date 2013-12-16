<?php
	/*
		Document	:	property_details_view.php
		Created		:	16/12/2013	12.51AM
		Author 		:	chegzcol

	*/
?>

<section class="content">
	
<!-- content begin -->
    <?php foreach($property->result() as $row): ?>
    	<div class="container">
        	<div class="row">
            	<div class="span8">
                	<div class="row">
                    	<div class="span5">                    
                     <!-- Slideshow -->
                        <div class="callbacks_container">
                              <ul class="rslides pic_slider">
                                <li>
                                  <img src="img/img/single-property/pic (1).jpg" alt="" />
                                  <p class="caption">Some description 1</p>
                                </li>
                                <li>
                                  <img src="img/img/single-property/pic (2).jpg" alt="" />
                                  <p class="caption">Some description 2</p>
                                </li>
								<li>
                                  <img src="img/img/single-property/pic (3).jpg" alt="" />
                                  <p class="caption">Some description 3</p>
                                </li>                              
                             </ul>
                        </div>
                        </div>
                        <div class="span3">
                   			<span class="label rent">FOR <?php echo $row->classification; ?></span>
                        	<h3 class="title-property"><?php echo $row->property_name; ?></h3>
                            <span class="subheading">Location : <?php echo $row->location; ?></span>
                            <h4 class="price">Kes  <?php echo $row->price; ?></h4>
                            <div class="specs-property">
                            <span class="meter">500 sq Meters</span>
                            <span class="bed"><?php echo $row->bedroom; ?> Bedroom(s)</span>
                            <span class="bath"><?php echo $row->bathroom; ?> Bathroom(s)</span>
                            <span class="car">Date Posted : <?php echo $row->date_added; ?></span>
                            <div class="description">
                            <?php echo $row->property_description; ?>
                            </div>
                            </div>                            
                        </div>
                        </div>
                        
                        
                        <div class="map">
                        <h4>See Location</h4>
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.id/maps"></iframe></div>
                        
                       
                        <!--<div class="related-property">
                        	<h4>See Also</h4>
                        	<div class="row">
                            	<div class="span4 small-list">
                    <span class="label sale">FOR SALE</span>
                	<img src="img/small-pic-1.jpg" />
                    <a href="#" class="arrow"></a>
                	<div class="info"> 
                    	<h2><a href="img/#">Georgeus House</a></h2> <div class="text1">Margonda Street, Depok</div>
                    	<div class="price">$50,000</div>
                    </div>
                </div>
                
                <div class="span4 small-list">
                    <span class="label sale">FOR SALE</span>
                	<img src="img/small-pic-3.jpg" />
                    <a href="#" class="arrow"></a>
                	<div class="info"> 
                    	<h2><a href="img/#">Georgeus House</a></h2> <div class="text1">Margonda Street, Depok</div>
                    	<div class="price">$50,000</div>
                    </div>
                </div>
                
                <div class="span4 small-list">
                    <span class="label rent">FOR RENT</span>
                	<img src="img/small-pic-1.jpg" />
                    <a href="#" class="arrow"></a>
                	<div class="info"> 
                    	<h2><a href="img/#">Georgeus House</a></h2> <div class="text1">Margonda Street, Depok</div>
                    	<div class="price">$50,000</div>
                    </div>
                </div>
                
                <div class="span4 small-list">
                    <span class="label rent">FOR RENT</span>
                	<img src="img/small-pic-2.jpg" />
                    <a href="#" class="arrow"></a>
                	<div class="info"> 
                    	<h2><a href="img/#">Georgeus House</a></h2> <div class="text1">Margonda Street, Depok</div>
                    	<div class="price">$50,000</div>
                    </div>
                </div>
                            </div>
                        </div>-->
                    </div> 
                    
                    <div id="sidebar" class="span4">
                    	<div class="widget">
                          <h4>Contact Owner</h4>
                          <div class="agent-details">
                                <img src="img/img/avatar.jpg" />
                                <div class="info">
                                    <h5><?php echo $row->owner; ?></h5>
                                    <span class="phone">Phone: <?php echo $row->phone; ?></span>
                                    <span class="email">Email: <a style="color:#000; " href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></span>
                                    <span class="website">Website: <?php //echo $row->website; ?></span>
									<?php echo anchor('edit_propery','Edit'); echo " | ";
											echo anchor('delete','Delete');
									?>
                                </div>

                             </div>    
                             
                              
                                
                        </div>
                        
                        <div class="widget">
                        
                        </div>
                      </div>                  
                </div>
                
                <div class="map">
                	
                </div>
                
            </div>
			 <?php endforeach; ?>
       
    
	<!-- content close -->
			


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