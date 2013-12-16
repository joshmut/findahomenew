<?php
/*
	Document	:	members_view.php
	Created		:	15/12/2013 12:46 PM
	Author		:	chegzcol
*/

?>

<section class="content">
	
				<div class="row-fluid">
				<div class="span12">
					<table class="table table-striped table-data">
							<thead>
								<tr role="row">
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Gender</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($user_list->result() as $row): ?>
								<tr>
									<td><?php echo $row->users_id; ?></td>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->email; ?></td>
									<td><?php echo $row->mobile; ?></td>
									<td><?php echo $row->gender; ?></td>
									<td>
										<?php form_open(''); 
											$options = array('1'=>'Activate','2'=>'Ban','3'=>'Delete');
											echo form_dropdown('enabled',$options,'1');
										 form_close(); ?>
									</td>
								</tr>
								<?php endforeach; ?>
							
							</tbody>
						</table>
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
  	</body>
</html>