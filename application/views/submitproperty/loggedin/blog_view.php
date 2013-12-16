<?php
/*
	Document	:	blog_view.php
	Created		:	12/12/2013 10:16 PM
	Author		:	chegzcol
*/

?>


<section class="content">

findahome blog

	<section class="profile-stream">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="section-header">
						<h3>Comment Stream</h3>
					</div>
					<div class="stream-input">
						<form class="form-skin">
							<textarea class="input-block-level" placeholder="What's on your mind?"></textarea>
							<a class="btn btn-flat btn-blue">Submit</a>
						</form>
					</div>
					<div class="stream-list">
						<ul class="conversation unstyled clearfix">
						<li class="conversation-left">
							<div class="avatar"><img src="img/dummy/daenerys.jpg"></div>
							<div class="message-wrapper">
								<div class="timestamp">
									Sent on <span>Tuesday, 17th Dec 2013</span>
								</div>
								<div class="message bg-color blue">
									<p>Kutembea mguu chini ni swag</p>
								</div>
							</div>
						</li>
						<li class="conversation-left">
							<div class="avatar"><img src="img/dummy/daenerys.jpg"></div>
							<div class="message-wrapper">
								<div class="timestamp">
									Sent on <span>Tuesday, 17th Dec 2013</span>
								</div>
								<div class="message bg-color blue">
									<p>alfu, alama ya dukuku</p>
								</div>
							</div>
						</li>
					</ul>
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