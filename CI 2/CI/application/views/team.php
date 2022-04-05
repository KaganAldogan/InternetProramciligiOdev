<?php include "includes/header.php"; ?>


<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" method="POST" action="<?php echo base_url("team/insert") ?>">
				<span class="login100-form-logo">
					<img src="https://www.adu.edu.tr/webfolders/logoarsivi/Ayd%C4%B1n%20Adnan%20Mendreres%20%C3%9Cniversitesi/ad%C3%BC%20logo.jpg" width="80">
				</span>
				<br>
				<div class="row">
					<div class="col-sm-3" style="color:white">Full Name </div>
					<div class="col-sm-9">
						<div class="wrap-input100 validate-input" data-validate="Full Name">
							<input class="input100" type="text" name="team_name">

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="color:white">Team </div>
					<div class="col-sm-9">
						<div class="wrap-input100 " data-validate="Select Team">
							<select class="input100" type="text" name="team_group_id" placeholder="Select Team">
								<option value="" style="color:black">Select Team</option>
								<?php foreach ($groups as $group) {

								?>
									<option value="<?php echo $group->id; ?>" style="color:black"><?php echo $group->group_name; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="color:white">Persons </div>
					<div class="col-sm-9">
						<div class="wrap-input100 validate-input" data-validate="Stock">
							<input class="input100" type="number" min="0" value="0" step="1" name="team_persons" placeholder="Persons">

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="color:white">Team Task Desc </div>
					<div class="col-sm-9">
						<div class="wrap-input100 validate-input" data-validate="TeamTask">
							<input class="input100" type="text" name="team_task_desc">

						</div>
					</div>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Add Team
					</button>
				</div>
			</form>
		</div>
	</div>
</div>




<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/jquery/jquery-3.2.1.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/bootstrap/js/popper.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/select2/select2.min.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js") ?>"></script>
<script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js") ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets/js/main.js") ?>"></script>


<?php include "includes/footer.php"; ?>