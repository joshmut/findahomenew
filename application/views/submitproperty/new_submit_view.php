<?php
	/*
		Document	:	new_submit_view.php
		Created		:	10/12/2013	4:28PM
		Author 		:	chegzcol

	*/
?>

<section class="content">
	<header class="content-header">
		<h1 class="light no-margin aligncenter">Submit property</h1>
	</header>
	
	<section class="bordered">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<h3 class="section-header light aligncenter"></h3>

				</div>
			</div>
			<div class="row-fluid">
				<div class="span10 offset1">
					<div class="step-form tabbed">
						<div class="form-header">
							<h3 class="light">Three simple steps and you are done!</h3>
						</div>
						
						
						<!--tab menu-->
						<ul class="nav nav-tabs row-fluid" id="myTab">
							<li class="active span4">
								<a href="#form-first">
									<div class="count">1</div>
									<div class="desc">Property <span>information</span></div>
								</a>
							</li>
							<li class="span4">
								<a href="#form-second">
									<div class="count">2</div>
									<div class="desc">Property <span>Location</span></div>
								</a>
							</li>
							<li class="span4">
								<a href="#form-third">
									<div class="count">3</div>
									<div class="desc">Contact <span>information</span></div>
								</a>
							</li>
						</ul>
						 <!--tab content begins here-->
						<div class="tab-content">
						  	<div class="tab-pane active" id="form-first">
							<?php //echo $error; ?>
								<?php 
									$attr = array('class'=>'form-skin','name'=>'upload','id'=>'form-skin');
									echo form_open_multipart('submit_property/uploads',$attr); 
								?>
								
								<!--tab one content-->
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="inputUsername">Property name</label>
											<?php echo form_error('property_name'); ?>
											<div class="controls">
											  <input class="input-block-level" name="property_name" type="text" value="<?php echo set_value('property_name'); ?>" id="inputUsername" placeholder="Enter your property's name">
											</div>
										</div>
											
											<label>Property Type</label>
											<?php echo form_error('property_type'); ?>
									<fieldset>
										<select name="property_type">
										<option selected="selected" ><?php echo set_select('property_type'); ?></option>
										  <option>BedSitter</option>
										  <option>Servant Quarter</option>
										  <option>1 Bedroom Apartment</option>
										  <option>2 Bedroom Apartment</option>
										  <option>3 Bedroom Apartment</option>

										  </select>
										
									</fieldset>
								
											
											
										<label>Property Description</label>
										<?php echo  form_error('property_description'); ?>
									    <textarea rows="3" name="property_description"><?php echo set_value('property_description'); ?></textarea>
										
									</fieldset>
								
								
								
								
								<div class="form-action clearfix">
									<a class="btn btn-flat btn-blue pull-right no-radius" href="#form-second">Next</a>
								</div>
						  	</div>
							
							
							<!--second tab content-->
						  	<div class="tab-pane" id="form-second">
						  		
									<fieldset>
									<label>Price</label>
									<?php echo form_error('price'); ?>
						<div class="input-prepend input-append">
						  <span class="add-on">Kshs</span>
						  <input id="appendedPrependedInput" name="price" value="<?php echo set_value('price'); ?>" type="text">
						  <span class="add-on">.00</span>
						</div>
									
												<br>		<br>
									
									<label>Classification</label>
											<?php echo form_error('classification'); ?>
									<fieldset>
										<select name="classification">
										<option ><?php echo set_select('classification'); ?></option>
										  <option selected="selected" value="rent">For Rent</option>
										  <option value="sale">For Sale</option>
										  <option value="commercial">Commercial</option>

										  </select>
										
									</fieldset>
									
										<div class="control-group">
											<label class="control-label" for="inputbedroom">Bedroom</label>
											<?php echo  form_error('bedroom'); ?>
											<div class="controls">
											  <input class="" type="text" value="<?php echo set_value('bedroom'); ?>" name="bedroom" id="inputUsername" placeholder="No. of Bedrooms">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputbathroom">Bathroom</label>
											<?php echo  form_error('bathroom'); ?>
											<div class="controls">
											  <input class="" type="text" value="<?php echo set_value('bathroom'); ?>" name="bathroom" id="inputUsername" placeholder="No. of bathrooms">
											</div>
										</div>
									
									<div class="control-group">
												<label>Image</label>
												
										<input type="file" name="image1" id="image1" value="<?php echo set_value('image1'); ?> " multiple="" >
										
									</div>
									
									
									
									<div class="control-group">
											<label class="control-label" for="inputUsername">Location</label>
											<?php echo  form_error('location'); ?>
											<div class="controls">
											  <input class="input-block-level" type="text" value="<?php echo set_value('location'); ?>" name="location" id="inputUsername" placeholder="E.g Umoja, Nairobi, Kenya">
											</div>
										</div>
									
									<!--google map with draggable pin comes here-->
									<br>
									
									<div id="map-canvas"></div>
									
									
									
							
								<!--end of second tab content-->
								
								
								
								
								
								<div class="form-action clearfix">
									<a class="btn btn-flat btn-blue pull-right no-radius" href="#form-third">Next</a>
								</div>
						  	</div>
							
							<!--third tab content-->

						  	<div class="tab-pane" id="form-third">
						  	
									<fieldset>
										
										
										<div class="control-group">
											<label>Your name</label>
											<input type="text" name="owner" value="<?php echo set_value('owner'); ?>" placeholder="Name">
										</div>
										
										<div class="control-group">
										<label class="control-label" for="inputEmail">Email</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
									</div>
										</div>
										
										
										<div class="control-group">
						    <label class="control-label" for="inputPassword">Password</label>
						    <div class="controls">
						      <input type="password" id="inputPassword" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
						    </div>
						  </div>
										
										
									</fieldset>
								
								<div class="form-action clearfix">
									<input type="submit" class="btn btn-flat btn-blue pull-right no-radius" name="submit" value="Submit" >
								</div>
						  	</div>
							
							</form>
							<!--end of content-->
						</div>
					</div>
								
				</div>
			</div>
		</div>
	</section>

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