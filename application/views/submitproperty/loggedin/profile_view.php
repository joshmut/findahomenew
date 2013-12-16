<?php 
/*
	Document	:	profile_view.php
	Created		:	11/12/2013	10:30PMPM
	Author 		:	chegzcol

*/
?>

<?php echo  form_open_multipart('profile/save_profile'); ?>
<section class="content">
	<header class="content-header">
		<h1 class="light no-margin">Profile</h1>
	</header>
	<section class="profile-head">
		<div class="thumbnail avatar">
			<img src="img/dummy/daenerys.jpg">
		</div>
	</section>
	<section class="profile-info">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					
					
					<?php //foreach($profile->result() as $row): ?>
					
					<h1 class="profile-name"><?php //echo $row->owner; ?>Collinc Chegero</h1>
					<ul class="profile-details unstyled inline">
						<li><i class="icon-briefcase"></i><?php echo form_error('email'); ?> <input type="text" name="email" value="<?php ?>" placeholder="Email" ></li>
						<li><i class="icon-map-marker"></i><?php echo form_error('password'); ?> <input type="password" name="password" value="<?php ?>" placeholder="password" > </li>
						<li><i class="icon-glob"></i> <?php echo form_error('owner'); ?><input type="text" name="owner" value="<?php ?>" placeholder="Full Name" ></li>
						<li><i class="icon-glob"></i><?php echo form_error('mobile'); ?> <input type="text" name="mobile" value="<?php ?>" placeholder="Mobile Phone" ></li>
						<li><i class="icon-glob"></i> <?php echo form_error('address'); ?><input type="text" name="address" value="<?php ?>" placeholder="Address" ></li>
						<li><i class="icon-glob"></i> <?php echo form_error('website'); ?><input type="text" name="website" value="<?php ?>" placeholder="Website"  ></li>
						<li><i class="icon-glob"></i> Your Photo: <input type="file" name="prof_image"  ></li>
					</ul>
					<p class="lead"><input type="submit" name="submit" Value="Update" >
					</p>
					<!--<ul class="profile-stats unstyled inline">
						<li>
							<div class="count">32</div>
							Followers
						</li>
						<li>
							<div class="count">122</div>
							Commits
						</li>
						<li>
							<div class="count">60</div>
							Messages
						</li>
						<li>
							<div class="count">77</div>
							Followers
						</li>
					</ul>-->					
				</div>
			</div>
		</div>
	</section>
	    <?php //endforeach;?>
	</form>
<!--	<section class="profile-stream">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="section-header">
						<h3>Profile Stream</h3>
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
									Sent on <span>Tuesday, 17th January 2018</span>
								</div>
								<div class="message bg-color blue">
									<p>Intelligentsia mollit mustache biodiesel dolor. Pug sustainable flannel id minim, blue bottle umami tumblr keffiyeh odd future swag fixie. Wolf shoreditch etsy mcsweeney's. Umami seitan fashion axe, elit veniam whatever raw denim art party mumblecore jean shorts ad delectus eiusmod. Meh est truffaut trust fund, fingerstache butcher fugiat assumenda kogi. Vero 8-bit mustache, readymade before they sold out next level aute typewriter messenger bag ennui cillum portland accusamus polaroid swag. VHS placeat helvetica, blog american apparel bushwick echo park single-origin coffee fingerstache 3 wolf moon wolf intelligentsia brunch salvia sint.</p>
								</div>
							</div>
						</li>
						<li class="conversation-left">
							<div class="avatar"><img src="img/dummy/daenerys.jpg"></div>
							<div class="message-wrapper">
								<div class="timestamp">
									Sent on <span>Tuesday, 17th January 2018</span>
								</div>
								<div class="message bg-color blue">
									<p>Intelligentsia mollit mustache biodiesel dolor. Pug sustainable flannel id minim, blue bottle umami tumblr keffiyeh odd future swag fixie. Wolf shoreditch etsy mcsweeney's. Umami seitan fashion axe, elit veniam whatever raw denim art party mumblecore jean shorts ad delectus eiusmod.</p>
								</div>
							</div>
						</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</section>-->
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