<?php
	/*
		Document	:	ps_right_nav.php
		Created		:	12/12/2013	8.26PM
		Author 		:	chegzcol

	*/
?>
<aside class="sidebar sidebar-left collapse">
	<form class="sidebar-search">
		<input type="text" placeholder="Search" id ="search-box3" >
   	</form>
	<h3 class="sidebar-header light">Search for Property</h3>
	<?php echo  form_open('search/advanced_search'); ?>
	<ul class="navigation-list unstyled">
		<li  class="current" >
		  <a href="#">
		  	<!--<i class="icon-desktop"></i>-->
			<span>Classification</span>
				<select style="width:178px" name="calssification" >
				<option value="">Any</option>
				  <option>Rental</option>
				  <option>Commercial</option>
				  <option> Sale</option>
				</select>
		  </a>
		</li>
		<li >
		  <a href="#">
		  	<!--<i class="icon-check"></i>-->
			<span>Type</span>
				<select style="width:178px" name="type" >
				<option value="">Any</option>
				  <option>Bedsitter</option>
				  <option>Flat</option>
				  <option>Appartment </option>
				  <option>House</option>
				</select>
		  </a>
		</li>
		<li >
		  <a href="#">
		  	<!--<i class="icon-comment"></i>-->
			<span>Bedroom</span>
				<select style="width:178px" name="bedroom" >
				<option value="">Any</option>
				  <option>1 Bedroom</option>
				  <option>2 Bedroom</option>
				  <option>3 Bedroom </option>
				  <option>4 Bedroom</option>
				  <option>5 Bedroom</option>
				</select>
		  </a>
		</li>
		<li >
		  <a href="#">
		  	<!--<i class="icon-calendar"></i>-->
			<span>Bathroom</span>
				<select style="width:178px" name="bathroom" >
				<option value="">Any</option>
				  <option>1 Bathroom</option>
				  <option>2 Bathroom</option>
				  <option>3 Bathroom </option>
				</select>
		  </a>
		</li>
		<li >
		  <a href="#">
		  	<!--<i class="icon-bar-chart"></i>-->
			<span>Min Price</span>
				<select style="width:178px" name="min" >
				<option value="">Any</option>
				  <option value="5000">Kes 5,000</option>
				  <option value="10000">Kes 10,000</option>
				  <option value="15000">Kes 15,000 </option>
				  <option value="20000">Kes 20,000</option>
				  <option value="25000">Kes 25,000</option>
				</select>
		  </a>
		</li>
		<li >
		  <a href="#">
		  	<!--<i class="icon-user"></i>-->
			<span>Max Price</span>
				<select style="width:178px" name="max" >
					<option value="">Any</option>
				  <option value="5000">Kes 5,000</option>
				  <option value="10000">Kes 10,000</option>
				  <option value="15000">Kes 15,000 </option>
				  <option value="20000">Kes 20,000</option>
				  <option value="25000">Kes 25,000</option>
				   <option value="35000">Kes 35,000</option>
				  <option value="40000">Kes 40,000</option>
				  <option value="45000">Kes 45,000 </option>
				  <option value="50000">Kes 50,000</option>
				  <option value="55000">Kes 55,000</option>
				</select>
		  </a>
		</li>

		<li class="special">
		  
			<span><input type="submit" name="filter_search" Value="Search" /></span>
			<p><?php echo anchor('ps_property_list','Switch to List'); ?> </p>
		</li>
		<li class="special">
			<p><?php echo anchor('ps_dashboard','Switch to Map'); ?> </p>
		</li>
	</ul>
	</form>
</aside>