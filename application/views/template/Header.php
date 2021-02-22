<div class="nav_menu">
	<nav>
		<div class="nav toggle">
			<a id="menu_toggle">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<?php // var_dump($_SESSION);exit(); ?>
			<li class="">
				<!-- <small class="pull-right">Periode : <?php // echo date('M Y', strtotime($this->session->userdata('periode'))); ?></small> -->
				<!-- <small class="pull-right">Tanggal : <?php // echo date('d M Y') ?></small> -->
				<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<!--img src="<?php echo base_url(); ?>assets/gentelella/production/images/img.jpg" alt=""><?= $this->session->userdata('user'); ?> / <?= $this->session->userdata('level') ?> (<?= $this->session->userdata('kode_level'); ?>) / <?= $this->session->userdata('status_lokasi'); ?>-->
					<img src="<?php echo base_url(); ?>assets/gentelella/production/images/img.jpg" alt=""><?= $this->session->userdata('user'); ?> / <?= $this->session->userdata('status_lokasi'); ?>
					<span class=" fa fa-angle-down"></span>
				</a>
				<ul class="dropdown-menu dropdown-usermenu pull-right">
					<li>
						<a href="javascript:;"> Profile</a>
					</li>
					<li>
						<a href="javascript:;">
							<span>Settings</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">Help</a>
					</li>
					<li>
						<a href="<?php echo site_url('auth/logout'); ?>">
							<i class="fa fa-sign-out pull-right"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
		            <!-- <i class="fa fa-envelope-o"></i> -->
		            <!-- <span class="badge bg-green">6</span> -->
		            <!--span>PT MSAL | Periode : <?php // echo date('M Y', strtotime($this->session->userdata('periode'))); ?> | Tanggal : <?php // echo date('d M Y') ?></span-->
					<span>PT <?php echo $this->session->userdata('app_pt'); ?> | Periode : <input type="text" id="txt_periode_header" name="txt_periode_header" value="<?php echo $this->session->userdata('ym_periode'); ?>" onclick="modalUbahPeriode()" size="3" readonly>  | Tanggal : <?php echo date('d M Y') ?></span>
		        </a>
			</li>
		</ul>
	</nav>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalUbahPeriode">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Ubah Periode</h4>
			</div>
			<div class="modal-body">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Periode 
						</label>
						<div class="col-md-9 col-sm-6 col-xs-12">
							<input class="form-control" type="text" id="txt_ubah_periode" name="txt_ubah_periode" data-date-format="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 col-sm-6 col-xs-12 col-md-offset-3">
							<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="ubahPeriode()">Ubah Periode</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
	function modalUbahPeriode(){
		$('#modalUbahPeriode').modal('show');

		var date = '<?php echo $this->session->userdata("Ymd_periode"); ?>';
		// console.log(date);
		var convert_date = '<?php echo date("m/d/Y",strtotime($this->session->userdata("Ymd_periode"))) ?>';
		console.log(convert_date);

		$('#txt_ubah_periode').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1",

			// "singleDatePicker": true,
		 //    "timePicker": true,
		 //    "timePicker24Hour": true,
		 //    "timePickerSeconds": true,
		    "startDate":  convert_date, // "03/20/2019" "mm/dd/yyyy"
		    // "endDate": "03/26/2019"
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});
	}

	function ubahPeriode(){
		var txt_ubah_periode = $('#txt_ubah_periode').val();

		$.ajax({
			type    : "POST",
			url     : "<?php echo site_url('dashboard/ubah_session_ymd'); ?>",
			dataType  : "JSON",
			beforeSend: function() {
			},
			// cache   : false,
			// contentType : false,
			// processData : false,

			data    : {'periode_ubah':txt_ubah_periode},
			success: function(data){
				location.reload();
			},
			error   : function(request){
				alert(request.responseText);
			}
  	    });
	}
</script>