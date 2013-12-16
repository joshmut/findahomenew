<?php
/*
	Document	:	signup_view.php
	Created		:	13/12/2013 12:38 PM
	Author		:	chegzcol
*/

?>

<section class="content">

	<div class="row-fluid">
				<div class="span12">
					<h3 class="section-header light aligncenter">Sign up</h3>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span10 offset1">

			<?php
						$attr = array('class'=>'form-skin shadow','id'=>'form-skin shadow','name'=>'signup');
						echo form_open('signup/register',$attr);
					?>
						<fieldset>
							<legend>Account Info</legend>
							<label>Full Name</label>
							<?php echo form_error('name'); ?>
						    <input type="text"  name="name" value="<?php set_value('name'); ?>" placeholder="Type your full name">
						    
							<label>Email</label>
							<?php echo form_error('email'); ?>
						    <input type="text"  name="email" value="<?php set_value('email'); ?>" placeholder="example@someone.com">
							
							<label>Phone Number</label>
							<?php echo form_error('phone'); ?>
						    <input type="text"  name="phone" value="<?php set_value('phone'); ?>" placeholder="+254 700000000">
							
							<label>Password</label>
							<?php echo form_error('password'); ?>
						    <input type="password"  name="password" value="<?php set_value('password'); ?>" placeholder="********">
							 
							<label class="radio">
							  	<input type="radio" name="gender" id="optionsRadios1" value="Male" >
							  	Male
							</label>
							<label class="radio">
							  	<input type="radio" name="gender" id="optionsRadios2" value="female">
							  	Female
							</label>
							
						    <button type="submit" name="submit" class="btn btn-flat btn-blue no-radius">Submit</button>
						</fieldset>
					</form>


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