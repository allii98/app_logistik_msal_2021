<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MSAL Logistik</title>

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	
</head>
<body class="login">
	<div id="particles-js" style="position: absolute ; z-index: 0; width: 100%;"></div>
	<div>
		<a class="hiddenanchor" id="signup"></a>
		<a class="hiddenanchor" id="signin"></a>
		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					
					<img src="<?= base_url();?>assets/img/mips.png" alt="" srcset=""><br>
					<h4>(MSAL Integrated Plantation System)</h4>
					<?php
						if($this->session->flashdata('notif')){
							echo $this->session->flashdata('notif');
						}
					?>
					<form method="POST" action="<?php echo site_url('auth/login'); ?>">
						<h2>Login Form</h2>
						<div class="form-group">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="periode" name="periode" placeholder="Periode" required="" />
						</div>
						<div class="form-group">
							<select class="form-control" id="pt_alias" name="pt_alias">
								<option value="MSAL" selected="">PT MULIA SAWIT AGRO LESTARI</option>
								<option value="MAPA">PT MITRA AGRO PERSADA ABADI</option>
								<option value="PSAM">PT PERSADA SEJAHTERA AGRO MAKMUR</option>
								<option value="PEAK">PT PERSADA ERA AGRO KENCANA</option>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" class="btn submit pull-right btn-info" name="submit" value="Log in">
							<!-- <a class="btn btn-default submit" href="<?php // echo site_url('auth/login'); ?>">Log in</a> -->
							<!-- <a class="reset_pass" href="#">Lost your password?</a> -->
						</div>
						<div class="clearfix"></div>
						<div class="separator">
							<!-- <p class="change_link">New to site?
								<a href="#signup" class="to_register"> Create Account </a>
							</p> -->
							<div class="clearfix"></div>
							<br />
							<div class="form-group">
								<h1><!-- <i class="glyphicon glyphicon-th-large"></i> --> MIPS Logistik</h1>
								<p><strong>Copyright &copy; 2018 <a href="http://msalgroup.com/" target="_blank">Mulia Sawit Agro Lestari</a>.</strong></p>
							</div>
						</div>
					</form>
				</section>
			</div>
			<div id="register" class="animate form registration_form">
				<section class="login_content">
					<form>
						<h1>Create Account</h1>
						<div>
							<input type="text" class="form-control" placeholder="Username" required="" />
						</div>
						<div>
							<input type="email" class="form-control" placeholder="Email" required="" />
						</div>
						<div>
							<input type="password" class="form-control" placeholder="Password" required="" />
						</div>
						<div>
							<a class="btn btn-default submit" href="index.html">Submit</a>
						</div>
						<div class="clearfix"></div>
						<div class="separator">
							<p class="change_link">Already a member ?
								<a href="#signin" class="to_register"> Log in </a>
							</p>
							<div class="clearfix"></div>
							<br />
							<div>
								<h1><!-- <i class="glyphicon glyphicon-th-large"></i>  -->MSAL Logistik</h1>
								<p><strong>Copyright &copy; 2018 <a href="http://msalgroup.com/" target="_blank">Mulia Sawit Agro Lestari</a>.</strong></p>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</body>
</html>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- particel.js -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="<?php echo base_url(); ?>assets/particles/app.js"></script>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d6e4f60eb1a6b0be60ab380/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->


<script type="text/javascript">
	$(function(){
		$('#periode').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"

			// "singleDatePicker": true,
		 //    "timePicker": true,
		 //    "timePicker24Hour": true,
		 //    "timePickerSeconds": true,
		 //    "startDate": "03/20/2019",
		 //    "endDate": "03/26/2019"
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});
	})
</script>