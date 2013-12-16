<?php
/*
	Document	:	contactus_view.php
	Created		:	14/12/2013 3:36 PM
	Author		:	chegzcol
*/

?>

<section class="content">

	<div class="row-fluid">
				<div class="span12">
					<h3 class="section-header light aligncenter">Contact Us</h3>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span10 offset1">

					<?php
						$attr = array('class'=>'form-skin shadow','id'=>'form-skin shadow','name'=>'contactus');
						echo form_open('contactus/contact',$attr);
						
						echo form_fieldset('Messages');
						
							echo form_label('Your Name','name');
							echo form_error('name');
							$name_attr = array('name'=>'name','id'=>'group-control','placeholder'=>'Type your Full Name');
							echo form_input($name_attr,set_value('name'));
							
							echo form_label('Email','email');
							echo form_error('email');
							$email_attr = array('name'=>'email','id'=>'group-control','placeholder'=>'someone@example.');
							echo form_input($email_attr,set_value('email'));
							
							echo form_label('Message','message');
							echo form_error('message');
							$message_attr = array('name'=>'message','id'=>'group-control','placeholder'=>'Type Your message here','rows'=>'3');
							echo form_textarea($message_attr,set_value('message'));
							echo '<br/>';
							
							$button_attr = array('name'=>'submit','type'=>'submit','value'=>'Send','class'=>'btn btn-flat btn-blue no-radius');
							echo  form_submit($button_attr);
						
						echo form_fieldset_close();
						
						echo form_close();
					?>
						

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