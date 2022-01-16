<?php
if(isset($_GET['pno']))
{ $pno = $_GET['pno']; }

	$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);

	$sql ="SELECT * FROM product where pno = '$pno'";
	$result = mysql_query($sql);

	$num = mysql_num_rows($result);

	$i = 0;

	while ($i < $num)
	{
		$Pno = mysql_result($result,$i,"pno");
		$pname = mysql_result($result,$i,"pname");
		$ptype = mysql_result($result,$i,"ptype");
		$color= mysql_result($result,$i,"color");
		$quantity= mysql_result($result,$i,"quantity");
		$price = mysql_result($result,$i,"price");
		$brand = mysql_result($result,$i,"brand");
		$i++;
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	//get_sidebar();
	//get_bread_four();
?>
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Products's Data</h2>
						<div class="box-icon">
							<a href="products1.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  
							  
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
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="pno" value="<?php echo $Pno; ?>">
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