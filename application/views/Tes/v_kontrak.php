<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title"><?= $tittle; ?></h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Home') ?>">Home</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Kontrak') ?>"><?= $tittle; ?></a>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<form action="<?= base_url('Kontrak/tambah') ?>" method="post">

						<div class="d-flex align-items-center">
							<h4 class="card-title">List kontrak</h4>
							<button type="submit" class="btn btn-primary btn-round ml-auto">
								<i class="fa fa-plus"></i>
								Tambah data
							</button>
						</div>
					</form>
				</div>
				<div class="card-body">
					<!-- Modal -->
					<div class="table-responsive">
						<table id="kontrak" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>No Kontrak</th>
									<th>Sub Kontrak</th>
									<th>Mitra</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>

							<tbody>
								<?php $no = 1;
								if (isset($kontrak)) {
									foreach ($kontrak as $data) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $data->no_kontrak ?></td>
											<td><?= $data->sub_no_kontrak ?></td>
											<td><?= $data->nama_mitra ?></td>
											<td>
												<form action="<?= base_url() ?>Kontrak/delete/<?= $data->id_kontrak ?>" method="post">
													<div class="form-button-action">
														<a href="<?= base_url() ?>Kontrak/detail/<?= $data->id_kontrak ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
															<i class="fa fa-eye"></i>
														</a>
														<a href="<?= base_url() ?>Kontrak/edit/<?= $data->id_kontrak ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
															<i class="fa fa-edit"></i>
														</a>
														<button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="return confirm('Apakah Anda Yakin?')">
															<i class="fa fa-times"></i>
														</button>
													</div>
												</form>
											</td>
										</tr>
								<?php }
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal kontrak -->
<div class="container">
	<div class="modal" id="kontrakModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Kontrak</h4>

					<!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> -->
				</div>
				<div class="modal-body">
					<?php echo $this->session->flashdata('pesan'); ?>
					<div class="form-group">
						<label for="defaultSelect">Pilih PT</label>
						<select class="form-control form-control" id="select_pt"></select>
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button> -->
					<button type="submit" data-dismiss="modal" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#kontrakModal').modal({
			backdrop: 'static',
			keyboard: false
		});
		pilih_pt();
	});

	function pilih_pt() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('kontrak/nama_pt'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_pt = '<option value="' + data[index].id_pt + '">' + data[index].nama_pt + '</option>';
					$('#select_pt').append(opsi_cmb_pt);
				});
				tableKontrak();
			},
			error: function(request) {
				console.log(request.responseText);
			}
		});
	}
</script>