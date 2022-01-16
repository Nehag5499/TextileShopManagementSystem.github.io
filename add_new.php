<?php
	require_once("functions/function.php");
	get_header();
	//get_sidebar();
	//get_bread_three();
	$pno=null;
	$pname=null;
	$ptype=null;
	$color=null;
	$quantity=null;
	$price=null;
	$brand=null;
	
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Record (Testing Function Only)</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data.php">
							
							  
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="pname" id="focusedInput" type="text" placeholder="pname"
								  value="<?php echo $pname; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Type:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="ptype" id="focusedInput" type="text" placeholder="ptype"
								  value="<?php echo $ptype; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Color:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="color" id="focusedInput" type="text" placeholder="color"
								  value="<?php echo $color; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Quantity:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="quantity" id="focusedInput" type="text" placeholder="quantity"
								  value="<?php echo $quantity; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Price:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="price" id="focusedInput" type="text" placeholder="price"
								  value="<?php echo $price; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Brand:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="brand" id="focusedInput" type="text" placeholder="brand"
								  value="<?php echo $brand; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->