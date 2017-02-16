<div class="container">

	<div class="row">

		<h3 class="col-sm-3 col-sm-offset-3 Dagger colwhite">Name </h3>

		<h3 class="col-sm-6 Dagger colblue"> <?php echo $userdata['name']?></h3>

	</div>

	<div class="row">

		<h3 class="col-sm-3 col-sm-offset-3 Dagger colwhite">College </h3>

		<h3 class="col-sm-3 Dagger colblue"> <?php echo $userdata['college']?></h3>

	</div>

	<div class="row">

		<h3 class="col-sm-3 col-sm-offset-3 Dagger colwhite">Rank </h3>

		<h3 class="col-sm-6 Dagger colblue"> <?php echo $rank?></h3>

	</div>

	<div class="row">

		<h3 class="col-sm-3 col-sm-offset-3 Dagger colwhite">Level </h3>

		<h3 class="col-sm-6 Dagger colblue"> <?php echo $userdata['level']?></h3>

	</div>

	<div class="row">

		<h3 class="col-sm-3 col-sm-offset-3 Dagger colwhite">Email ID </h3>

		<h3 class="col-sm-6 Dagger colblue"> <?php echo $userdata['emailid']?></h3>

	</div>

	<div class="row">

		<h3 class="col-sm-3 col-sm-offset-3 Dagger colwhite">Mobile No</h3>

		<h3 class="col-sm-6 Dagger colblue"> <?php echo $userdata['mobileno']?></h3>

	</div>  

	<div class="row">

		<?php if($userdata['status']==2) :?>

			<div class="text-center mt40" >

				<a href="<?php echo base_url('index.php/shadow/status')?>" class="btn btn-lg btn-success" role="button">ADMIN LOGIN</a>

			</div>

		<?php endif; ?>

	</div>

</div>