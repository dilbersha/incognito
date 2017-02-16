<h2 class="text-center  Dagger colwhite" style="margin-top:30px; margin-bottom:60px">Please Fill In The Below Details</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('pages/create',array('class'=>'form-horizontal','role'=>'form')) ?>
	<div class="formheight form-group">
		
		<div class="col-sm-offset-3 col-sm-6">
			<input type="text" class="inputSubmit form-control" name="college"
				placeholder="Enter College Name">
		</div>
	</div>
	<div class="form-group">
		
		<div class="col-sm-offset-3 col-sm-6">
			<input type="text" class="inputSubmit form-control" name="emailid"
				placeholder="Enter Email Id">
		</div>
	</div>
	<div class="form-group">
		
		<div class="col-sm-offset-3 col-sm-6">
			<input type="text" class="inputSubmit form-control" name="mobileno"
				placeholder="Enter Moblie No">
		</div>
	</div>
	<div class="form-group" style="margin-top:30px">
		<div class="Dagger  text-center">
			<button type="submit" class="buttonfb Dagger colwhite btn btn-lg" style="padding: 8px 35px; font-size:20px; ">Sign Up</button>
		</div>
	</div>
<?php echo form_close(); ?>
<div class="container">
	<div class="row mt40" >
		
	</div>
</div>
