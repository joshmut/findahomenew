<?php
/*
	Document	:	admin_login_view.php
	Created		:	11/12/2013 10:22PM
	Author		:	chegzcol
*/

?>
<section class="content">

Admin

					<!--<form class="form-horizontal form-skin">-->
					<?php
						$attr = array('class'=>'form-horizontal form-skin','id'=>'form-horizontal form-skin','name'=>'login');
						echo form_open('admin/admin_login',$attr);
					?>
						<legend>Login</legend>
						<div class="control-group">
						    <label class="control-label" for="inputEmail">Email</label>
						    <div class="controls">
						      <input type="text" id="inputEmail" name="email" placeholder="Email">
						    </div>
						</div>
						<div class="control-group">
						    <label class="control-label" for="inputPassword">Password</label>
						    <div class="controls">
						      <input type="password" id="inputPassword" name="password" placeholder="Password">
						    </div>
						  </div>
						<div class="control-group">
						    <div class="controls">
						      <label class="checkbox">
						        <input type="checkbox"> Remember me
						      </label>
						      <button type="submit" class="btn btn-flat btn-blue no-radius">Sign in</button>
						    </div>
						</div>
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