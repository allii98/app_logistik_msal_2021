<style type="text/css">
  .pull-left{
    float: left !important;
  }
</style>

<!-- <div class="right_col" role="main"> -->
<div role="main">
  <div class="page-title">
    <div class="title_left">
      <h2>Dashboard</h2>
    </div>
  </div>
  <div class="clearfix"></div>
  <h5>Selamat Datang di Aplikasi Logistik MSAL,  <?= $this->session->userdata('user'); ?>.</h5>


  <div class="container">
    <div class="col-md-8 col-sm-12 col-xs-12">
      <!-- top tiles -->
      <div class="row top_tiles">
		<div class="col-md-6 col-sm-6  ">
			<div class="x_panel">
				<div class="x_title">
					<h2>SPP <small>Surat Permintaan Pembelian</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<a href="<?= site_url('spp') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-file"></i></div>
						  <div class="count"><?= number_format($count_ppo_1); ?></div>
						  <h4>Approved</h4>
						</div>
					  </div>  
					</a>
					<a href="<?= site_url('spp/approval/1') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-file"></i></div>
						  <div class="count"><?= number_format($count_ppo_0); ?></div>
						  <h4>Menunggu</h4>
						</div>
					  </div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6  ">
			<div class="x_panel">
				<div class="x_title">
					<h2>PO <small>Permohonan Order</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<a href="<?= site_url('po') ?>" class="">
					  <div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-edit"></i></div>
						  <div class="count"><?= number_format($count_po); ?></div>
						  <h4>Total</h4>
						</div>
					  </div>
					</a>
				</div>
			</div>
    </div>
    <div class="col-md-6 col-sm-6  ">
      <div class="x_panel">
        <div class="x_title">
          <h2>PP <small>Permohonan Pembayaran</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <a href="<?= site_url('pp') ?>" class="">
            <div class="animated flipInY col-lg12 col-md-12 col-sm-12 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-money"></i></div>
              <div class="count"><?= number_format($count_pp); ?></div>
              <h4>Total</h4>
            </div>
            </div>
          </a>
        </div>
      </div>
    </div>
		<div class="col-md-6 col-sm-6  ">
			<div class="x_panel">
				<div class="x_title">
					<h2>LPB <small>Laporan Penerimaan Barang</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<a href="<?= site_url('lpb/approval') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-cube"></i></div>
						  <div class="count"><?= number_format($count_stokmasuk_0); ?></div>
						  <h4>Approved</h4>
						</div>
					  </div>
					</a>
					<a href="<?= site_url('lpb/blmapproval') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-cube"></i></div>
						  <div class="count"><?= number_format($count_stokmasuk); ?></div>
						  <h4>Menunggu</h4>
						</div>
					  </div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6  ">
			<div class="x_panel">
				<div class="x_title">
					<h2>BPB <small>Bon Permintaan Barang</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<a href="<?= site_url('bpb/approval') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-desktop"></i></div>
						  <div class="count"><?= number_format($count_bpb); ?></div>
						  <h4>Approved</h4>
						</div>
					  </div>
					</a>
					<a href="<?= site_url('bpb/blmapproval') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-desktop"></i></div>
						  <div class="count"><?= number_format($count_bpb_0); ?></div>
						  <h4>Menunggu</h4>
						</div>
					  </div>
					</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 col-sm-6  ">
			<div class="x_panel">
				<div class="x_title">
					<h2>BKB <small>Bukti Keluar Barang</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<a href="<?= site_url('bkb/approval') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-external-link"></i></div>
						  <div class="count"><?= number_format($count_stockkeluar_1); ?></div>
						  <h4>Approved</h4>
						</div>
					  </div>
					</a>
					<a href="<?= site_url('bkb/blmapproval') ?>" class="">
					  <div class="animated flipInY col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="tile-stats">
						  <div class="icon"><i class="fa fa-external-link"></i></div>
						  <div class="count"><?= number_format($count_stockkeluar); ?></div>
						  <h4>Menunggu</h4>
						</div>
					  </div>
					</a>
				</div>
			</div>
		</div>
		
      
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Mutasi Masuk</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content" id="div_tableDetailBKB">
          <div class="form-horizontal">
            <div class="table-responsive">
              <table id="tableDetailBKB" class="table table-bordered" width="100%">
                <thead>
                  <tr>
                    <!-- <th>No.</th> -->
                    <th>Tgl BKB</th>
                    <th>No. BKB</th>
                    <th>Ref. BKB</th>
                    <!-- <th>Item Barang</th> -->
                    <!-- <th>Dari PT</th> -->
                  </tr>
                </thead>
                <tbody id="tbodyDetailBKB">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="ModalDetailDataBKBMutasi">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Detail Barang</h4>
          </div>
          <div class="modal-body">
            <div class="form-horizontal">
              <label id="lbl_lpb_status" name="lbl_lpb_status">No. LPB : ... &nbsp; No. Ref. LPB : ...</label>
              <h4 id="h4_no_lpb" name="h4_no_lpb"></h4>
              <h4 id="h4_no_ref_lpb" name="h4_no_ref_lpb"></h4>
              <input type="hidden" id="hidden_no_lpb" name="hidden_no_lpb">
              <input type="hidden" id="hidden_id_stok_masuk" name="hidden_id_stok_masuk">
              <input type="hidden" id="hidden_no_ref_lpb" name="hidden_no_ref_lpb">

              <input type="hidden" id="hidden_tgl_terima" name="hidden_tgl_terima">
              <input type="hidden" id="hidden_no_pengantar" name="hidden_no_pengantar">
              <input type="hidden" id="hidden_no_bkb" name="hidden_no_bkb">
              <input type="hidden" id="hidden_no_ref_bkb" name="hidden_no_ref_bkb">
              <input type="hidden" id="hidden_no_po" name="hidden_no_po">
              <input type="hidden" id="hidden_ref_po" name="hidden_ref_po">
              <input type="hidden" id="hidden_kd_supplier" name="hidden_kd_supplier">
              <input type="hidden" id="hidden_supplier" name="hidden_supplier">
              <input type="hidden" id="hidden_bkb_dari_pt" name="hidden_bkb_dari_pt">
              <input type="hidden" id="hidden_tgl_input" name="hidden_tgl_input">
              <input type="hidden" id="hidden_lokasi_gudang" name="hidden_lokasi_gudang">
              <input type="hidden" id="hidden_tgl_po" name="hidden_tgl_po">
              <input type="hidden" id="hidden_ket_pengiriman" name="hidden_ket_pengiriman">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="tableRinciLPB" width="100%">
                  <thead>
                    <tr>
                      <!-- <th></th> -->
                      <th width="20%">Kd. Barang</th>
                      <th>Nama Barang</th>
                      <th width="10%">Qty</th>
                      <th width="10%">Satuan</th>
                      <th width="30%">Ket</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="tbody_rincian" name="tbody_rincian">
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="hidden_no_table" name="hidden_no_table">

<!-- JQuery Number -->
<script src="<?php echo base_url();?>assets/jquerynumber/jquery.number.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    tableDetailBKB();

    $('.dataTables_filter').addClass('pull-left');
  })

  function tableDetailBKB(){
    $('#tableDetailBKB').DataTable().destroy();
    $('#tableDetailBKB').DataTable({
      // "dom": '<"H"lr>t<"F"ip>',
      "dom": 'lfrtip',
      "paging"          : true,
      "scrollY"         : false,
      "scrollX"         : "100px",
      "searching"       : true,
      "select"          : false,
      "bLengthChange"   : false,
      "scrollCollapse"  : false,
      "bPaginate"       : true,
      "bInfo"           : true,
      "bSort"           : false,
      "processing"      : true,
      "serverSide"      : true,
      "ordering"        : false,
      // "order"           : [],
      // "language": {
      //     "searchPlaceholder": "Search records"
      // },
      "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
      },
        "ajax"            : {
          "url"         : "<?php echo site_url('dashboard/get_list_bkb_mutasi');?>",
          "type"        : "POST",
          "data"        : {},
          "error"       : function(request){
            alert(request.responseText);
          }
        },
        "columns"   : [
          // {"width":"5%"},
          {"width":"10%"},
          {"width":"10%"},
          {"width":"25%"},
          // {"width":"25%"},
          // {"width":"25%"},
        ],
        "columnDefs"    : [
          {
              "targets"      : [],
              "orderable"    : false,
          },
        ],
      "drawCallback": function(settings) {
        $('#tableDetailBKB tr').each(function() {
          var Cell = $(this).find('td');

          Cell.parent().on('mouseover', Cell, function() {
              Cell.parent().css('background-color', '#26b99a');
              Cell.parent().css('color', '#ffffff');

            Cell.parent().bind("mouseout", function() {
                Cell.parent().css('background-color', '');
                Cell.parent().css('color', '#73879c');
              });
          });
        });
        },
      });
  }

  $('#tableDetailBKB tbody').on('click', 'tr', function () {
    $('#ModalDetailDataBKBMutasi').modal('show');

    var dataClick = $('#tableDetailBKB').DataTable().row( this ).data();
    var no_bkb = dataClick[1];
    var no_ref_bkb = dataClick[2];

    $('#hidden_no_bkb').val(no_bkb);
    $('#hidden_no_ref_bkb').val(no_ref_bkb);
      
    $.ajax({
      type    : "POST",
      url     : "<?php echo site_url('dashboard/get_bkb_mutasi'); ?>",
      dataType  : "JSON",
      beforeSend: function(){
      },
      cache   : false,
      // contentType : false,
      // processData : false,
    
      data    : {'no_bkb' : no_bkb, 'no_ref_bkb' : no_ref_bkb},
      success: function(data){
        $('#tbody_rincian').empty();
        var tgl_terima = '<?php echo date('m/d/Y') ?>';
        var tgl_input = '<?php echo date('m/d/Y') ?>';
        var tgl_po = '<?php echo date('m/d/Y') ?>';

        $('#hidden_tgl_terima').val(tgl_terima);
        $('#hidden_no_pengantar').val('-'); // null
        $('#hidden_no_bkb').val(data.data_stockkeluar_mutasi.SKBTXT);
        $('#hidden_no_ref_bkb').val(data.data_stockkeluar_mutasi.NO_REF);
        $('#hidden_no_po').val(data.data_stockkeluar_mutasi.SKBTXT);
        $('#hidden_ref_po').val('MUTASI');
        $('#hidden_kd_supplier').val(data.data_stockkeluar_mutasi.kode);
        $('#hidden_supplier').val(data.data_stockkeluar_mutasi.pt);
        $('#hidden_bkb_dari_pt').val(data.data_stockkeluar_mutasi.pt);
        $('#hidden_bkb_dari_pt').val(data.data_stockkeluar_mutasi.kode);
        $('#hidden_tgl_input').val(tgl_input);
        $('#hidden_lokasi_gudang').val('-'); // null
        $('#hidden_tgl_po').val(tgl_po);
        $('#hidden_ket_pengiriman').val('MUTASI dari BKB NO. '+data.data_stockkeluar_mutasi.SKBTXT+' '+data.data_stockkeluar_mutasi.pt);

        $('#hidden_no_table').val(1);
        var row = $('#hidden_no_table').val();
        $.each(data.data_keluarbrgitem_mutasi,function(index,elem){
          tambah_row(row);
          $('#txt_kode_barang_'+row).val(data.data_keluarbrgitem_mutasi[index].kodebartxt);
          // $('#chk_asset_'+row).val(data.data_keluarbrgitem_mutasi[index].);
          $('#txt_nama_brg_'+row).val(data.data_keluarbrgitem_mutasi[index].nabar);
          $('#txt_qty_'+row).val(data.data_keluarbrgitem_mutasi[index].qty2);
          $('#lbl_qty_po_'+row).html('Qty PO : '+data.data_keluarbrgitem_mutasi[index].qty2);
          $('#lbl_sisa_qty_'+row).html('Sisa Qty : '+data.data_keluarbrgitem_mutasi[index].sisa_qty);
          $('#hidden_qty_po_'+row).val(data.data_keluarbrgitem_mutasi[index].qty2);
          $('#hidden_sisa_qty_'+row).val(data.data_keluarbrgitem_mutasi[index].sisa_qty);
          $('#txt_satuan_'+row).val(data.data_keluarbrgitem_mutasi[index].satuan);
          $('#lbl_grup_'+row).html('Grup '+data.data_keluarbrgitem_mutasi[index].grp);
          $('#hidden_grup_'+row).val(data.data_keluarbrgitem_mutasi[index].grp);
          // $('#txt_ket_rinci_'+row).val(data.data_keluarbrgitem_mutasi[index].ket);
          $('#txt_ket_rinci_'+row).val('MUTASI dari BKB NO. '+data.data_stockkeluar_mutasi.SKBTXT+' '+data.data_stockkeluar_mutasi.pt);

          row++;
          $('hidden_no_table').val(row);
        });
      },
      error   : function(request){
          alert(request.responseText);
      }
    })
  })

  function tambah_row(num_last){
    // var row = ++num_last;
    var row = $('#hidden_no_table').val();
    var tr_buka = '<tr id="tr_'+row+'">';
    var td_col_1 = '<td>'
              +'<input type="hidden" id="hidden_proses_status_'+row+'" name="hidden_proses_status_'+row+'" value="insert">'
              // +'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="pilihModalBarang('+row+')"></button><br />'
              +'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('+row+')"></button><br />'
              +'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+row+')"></button>'
            +'</td>';
    var form_buka = '<form id="form_rinci_'+row+'" name="form_rinci_'+row+'" method="POST" action="javascript:;">'
    var td_col_2 = '<td>'
              +'<input type="hidden" id="hidden_proses_status_'+row+'" name="hidden_proses_status_'+row+'" value="insert">'
              +'<input type="text" class="form-control" id="txt_kode_barang_'+row+'" name="txt_kode_barang_'+row+'" placeholder="Kode Barang" onfocus="pilihModalBarang('+row+')" readonly>'
              +'<label>'
                              +'<input type="checkbox" id="chk_asset_'+row+'" name="chk_asset_'+row+'" value=""> Asset ?'
                          +'</label>'
            +'</td>';
    var td_col_3 = '<td>'
              +'<input type="text" class="form-control" id="txt_nama_brg_'+row+'" name="txt_nama_brg_'+row+'" placeholder="Nama Barang" readonly>'
            +'</td>';
    var td_col_4 = '<td>'
              +'<input type="text" class="form-control currencyduadigit" id="txt_qty_'+row+'" name="txt_qty_'+row+'" placeholder="Qty">'
              +'<label id="lbl_qty_po_'+row+'">Qty PO : </label>'
              +'<label id="lbl_sisa_qty_'+row+'">Sisa Qty : </label>'

              +'<input type="hidden" id="hidden_qty_po_'+row+'" name="hidden_qty_po_'+row+'">'
              +'<input type="hidden" id="hidden_sisa_qty_'+row+'" name="hidden_sisa_qty_'+row+'">'
            +'</td>';
    var td_col_5 = '<td>'
              +'<input type="text" class="form-control" id="txt_satuan_'+row+'" name="txt_satuan_'+row+'" placeholder="Satuan" readonly>'
              +'<label id="lbl_grup_'+row+'" name="lbl_grup_'+row+'">Grup : -</label>'
              +'<input type="hidden" id="hidden_grup_'+row+'" name="hidden_grup_'+row+'">'
            +'</td>';
    var td_col_6 = '<td>'
              +'<textarea class="resizable_textarea form-control" id="txt_ket_rinci_'+row+'" name="txt_ket_rinci_'+row+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+row+')" readonly></textarea>'
              +'<label id="lbl_status_simpan_'+row+'"></label>'
              +'<input type="hidden" id="hidden_id_masuk_item_'+row+'" name="hidden_id_masuk_item_'+row+'">'
            +'</td>';
    var td_col_7 = '<td>'
              +'<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+row+'" name="btn_simpan_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+row+')"></button>'
              +'<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+row+'" name="btn_ubah_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+row+')"></button>'
              +'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+row+'" name="btn_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+row+')"></button>'
              +'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+row+'" name="btn_cancel_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+row+')"></button>'
              +'<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+row+'" name="btn_hapus_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+row+')"></button>'
            +'</td>';
    var form_tutup = '</form>';
    var tr_tutup = '</tr>';

    $('#tbody_rincian').append(tr_buka+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+form_tutup+tr_tutup);

    $('#txt_qty_'+row).number(true, 2);

    // $('html, body').animate({
    //       scrollTop: $("#tr_"+row).offset().top
    //   }, 2000);

      row++;
    $('#hidden_no_table').val(row);
  }

  function validasi(arr_id,no){
    if(Array.isArray(arr_id)){
      $.each(arr_id, function( index, value ){
        // $(arr_id[index]).css({
                // "background": "#FFCECE"
              // })
              // $(arr_id[index]).after('<div class="pesan_error"><br /><small style="margin-top:0px;color:red;">Harus diisi</small></div>');
      });
    }
    else{
      if($('#'+arr_id).is('input') || $('#'+arr_id).is('textarea')){
        if(arr_id == 'hidden_qty_po_'+no){
          $('#lbl_qty_po_'+no).css({
            "background": "#FFCECE"
          })
          if(!$('#lbl_qty_po_'+no).next().is('br#br_'+no)){
            $('#lbl_qty_po_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');  
          }
        }
        else if(arr_id == 'hidden_sisa_qty_'+no){
          $('#lbl_sisa_qty_'+no).css({
            "background": "#FFCECE"
          })
          if(!$('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
            $('#lbl_sisa_qty_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
          }
        }
        else{
          $('#'+arr_id).css({
                "background": "#FFCECE"
              })
              if(!$('#'+arr_id).next().is('br#br_'+no)){
              $('#'+arr_id).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
          }
        }
      }
    }
  }

  function saveRinciEnter(e,no){
    if(e.keyCode == 13 && !e.shiftKey){
      if($('#txt_qty_'+no).val() == '0') {
        swal('Qty tidak boleh nol (0) !');
      }
      else if(parseInt($('#txt_qty_'+no).val()) > parseInt($('#hidden_sisa_qty_'+no).val())){
        swal('Qty melebihi PO');
      }
      else {
        if($('#hidden_proses_status_'+no).val() == 'insert'){
          saveRinci(no);
        }
        else if($('#hidden_proses_status_'+no).val() == 'update'){
          updateRinci(no);
        }
      }
    }
  }

  function saveRinci(no){
    var isValid = true;
    $('#txt_kode_barang_'+no+',#txt_nama_brg_'+no+',#txt_qty_'+no+',#hidden_qty_po_'+no+',#hidden_sisa_qty_'+no+',#txt_satuan_'+no+',#txt_ket_rinci_'+no).each(function (e) {
        if ($.trim($(this).val()) == '') {
            isValid = false;
            validasi($(this).attr("id"),no);
        }
        else {
          if($(this).attr('id') == 'hidden_qty_po_'+no){
              $('#lbl_qty_po_'+no).css({
                  "background": ""
                });
                if($('#lbl_qty_po_'+no).next().is('br#br_'+no)){
                  $('#lbl_qty_po_'+no).next().remove();
                  $('#lbl_qty_po_'+no).next().remove();
                }
            }
            else if($(this).attr('id') == 'hidden_sisa_qty_'+no){
      $('#lbl_sisa_qty_'+no).css({
        "background": ""
      });
      if($('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
        $('#lbl_sisa_qty_'+no).next().remove();
        $('#lbl_sisa_qty_'+no).next().remove();
      }
            }
            else{
      $(this).css({
        "background": ""
      });
      if($(this).next().is('br#br_'+no)){
        $(this).next().remove();
        $(this).next().remove();
      }
            }
        }
    });
    if (isValid == true){
        saveData(no);
    }
  }

  function updateRinci(no){
    var isValid = true;
    $('#txt_kode_barang_'+no+',#txt_nama_brg_'+no+',#txt_qty_'+no+',#hidden_qty_po_'+no+',#hidden_sisa_qty_'+no+',#txt_satuan_'+no+',#txt_ket_rinci_'+no).each(function (e) {
          if ($.trim($(this).val()) == '') {
              isValid = false;
              validasi($(this).attr("id"),no);
          }
          else {
            if($(this).attr('id') == 'hidden_qty_po_'+no){
                $('#lbl_qty_po_'+no).css({
                    "background": ""
                  });
                  if($('#lbl_qty_po_'+no).next().is('br#br_'+no)){
                    $('#lbl_qty_po_'+no).next().remove();
                    $('#lbl_qty_po_'+no).next().remove();
                  }
              }
              else if($(this).attr('id') == 'hidden_sisa_qty_'+no){
        $('#lbl_sisa_qty_'+no).css({
          "background": ""
        });
        if($('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
          $('#lbl_sisa_qty_'+no).next().remove();
          $('#lbl_sisa_qty_'+no).next().remove();
        }
              }
              else{
        $(this).css({
          "background": ""
        });
        if($(this).next().is('br#br_'+no)){
          $(this).next().remove();
          $(this).next().remove();
        }
              }
          }
      });
    if (isValid == true){
        updateData(no);
    }
  }

  function saveRinciClick(no){
      if($('#txt_qty_'+no).val() == '0') {
        swal('Qty tidak boleh nol (0) !');
      }
      else if(parseInt($('#txt_qty_'+no).val()) > parseInt($('#hidden_sisa_qty_'+no).val())){
        swal('Qty melebihi PO');
      }
      else {
        if($('#hidden_proses_status_'+no).val() == 'insert'){
          saveRinci(no);
        }
        else if($('#hidden_proses_status_'+no).val() == 'update'){
          updateRinci(no);
        }
      }
  }

  function saveData(no){
    var form_data = new FormData();

    if($('#chk_asset_'+no).is(':checked')){
      form_data.append('chk_asset','Asset');
    }
    else{
      form_data.append('chk_asset','');
    }

    form_data.append('txt_tgl_terima',$('#hidden_tgl_terima').val());
    form_data.append('txt_no_pengantar',$('#hidden_no_pengantar').val());
    form_data.append('txt_no_po',$('#hidden_no_po').val());
    form_data.append('txt_ref_po',$('#hidden_ref_po').val());
    form_data.append('txt_bkb_dari_pt',$('#hidden_bkb_dari_pt').val());
    form_data.append('txt_kd_supplier',$('#hidden_kd_supplier').val());
    form_data.append('txt_supplier',$('#hidden_supplier').val());
    // form_data.append('txt_lpb_dari_pt',$('#hidden_lpb_dari_pt').val());
    form_data.append('txt_tgl_input',$('#hidden_tgl_input').val());
    form_data.append('txt_lokasi_gudang',$('#hidden_lokasi_gudang').val());
    form_data.append('txt_tgl_po',$('#hidden_tgl_po').val());
    form_data.append('txt_ket_pengiriman',$('#hidden_ket_pengiriman').val());
    
    form_data.append('txt_kode_barang',$('#txt_kode_barang_'+no).val());
    form_data.append('txt_nama_brg',$('#txt_nama_brg_'+no).val());
    form_data.append('txt_qty',$('#txt_qty_'+no).val());
    form_data.append('txt_satuan',$('#txt_satuan_'+no).val());
    form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());
    form_data.append('hidden_grup',$('#hidden_grup_'+no).val());

    form_data.append('hidden_no_lpb',$('#hidden_no_lpb').val());
    form_data.append('hidden_no_ref_lpb',$('#hidden_no_ref_lpb').val());

    form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());

    $.ajax({
          type    : "POST",
          url     : "<?php echo site_url('lpb/simpan_rinci_lpb'); ?>",
          dataType  : "JSON",
          beforeSend: function() {
              $('#lbl_status_simpan_'+no).empty();
              $('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
              if($.trim($('#hidden_no_lpb').val()) == ''){
                $('#lbl_lpb_status').empty();
                $('#lbl_lpb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate LPB Number</label>');
              }
              $('#btn_ubah_'+no).css('display','block');
              $('#btn_hapus_'+no).css('display','block');
          },
          cache   : false,
          contentType : false,
          processData : false,
          
          data    : form_data,
          success: function(data){
            if(data == "input_stock_awal"){
              swal("Stock Awal belum ada, silahkan input dahulu !", {
                buttons: {
                  ya: {
                    text: "Ya",
                    value: "iya",
                  },
                  cancel: "Tutup",
                },
              })
              .then((value) => {
                switch (value) {
                case "iya":
                    window.open('<?php echo site_url('stock_awal'); ?>','_blank');
                    break;
                default:
                    swal.close();
                }
              });
              $('#lbl_status_simpan_'+no).empty();
          $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
            }
            else if(data == "kodebar_exist"){
          swal('Tidak bisa ditambahkan. Barang sudah ada pada LPB yang sama !');
          $('#lbl_status_simpan_'+no).empty();
          $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
          }
          else{
            if(data.status == true){
              $('#a_lpb_baru').show();

              // $('.div_form_1').find('input,textarea').not('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');
              // $('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('disabled','');
                
                $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_kode_barang_'+no).attr('readonly','');
                $('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('disabled','');

                $('#lbl_status_simpan_'+no).empty();
                $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

                $('#lbl_lpb_status').empty();
                $('#h4_no_lpb').empty();
                
                $('#h4_no_ref_lpb').empty();
                
                $('#h4_no_lpb').append('No. LPB : '+data.no_lpb);
                $('#h4_no_ref_lpb').append('No. Ref LPB : '+data.no_ref_lpb);

                $('#hidden_no_lpb').val(data.no_lpb);
                $('#hidden_no_ref_lpb').val(data.no_ref_lpb);

                if($.trim($('#hidden_id_stok_masuk').val()) == ''){
                  $('#hidden_id_stok_masuk').val(data.id_stok_masuk);
              }
                $('#hidden_id_masuk_item_'+no).val(data.id_masuk_item);

                $('#btn_simpan_'+no).css('display','none');
                tableDetailBKB();
            }
      else{
        alert('Error Save Data');
          $('#lbl_status_simpan_'+no).empty();
        $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
      }
          }
          },
          error   : function(request){
            alert('Error Save Data : '+request.responseText);
              
            $('#lbl_status_simpan_'+no).empty();
            $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
            
            if($.trim($('#hidden_no_lpb').val()) == ''){
              $('#lbl_spp_status').empty();
              $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
            }
          }
      });
  }

  function updateRinci(no){
      var isValid = true;
      $('#txt_kode_barang_'+no+',#txt_nama_brg_'+no+',#txt_qty_'+no+',#hidden_qty_po_'+no+',#hidden_sisa_qty_'+no+',#txt_satuan_'+no+',#txt_ket_rinci_'+no).each(function (e) {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                validasi($(this).attr("id"),no);
            }
            else {
              if($(this).attr('id') == 'hidden_qty_po_'+no){
                  $('#lbl_qty_po_'+no).css({
                      "background": ""
                    });
                    if($('#lbl_qty_po_'+no).next().is('br#br_'+no)){
                      $('#lbl_qty_po_'+no).next().remove();
                      $('#lbl_qty_po_'+no).next().remove();
                    }
                }
                else if($(this).attr('id') == 'hidden_sisa_qty_'+no){
          $('#lbl_sisa_qty_'+no).css({
            "background": ""
          });
          if($('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
            $('#lbl_sisa_qty_'+no).next().remove();
            $('#lbl_sisa_qty_'+no).next().remove();
          }
                }
                else{
          $(this).css({
            "background": ""
          });
          if($(this).next().is('br#br_'+no)){
            $(this).next().remove();
            $(this).next().remove();
          }
                }
            }
        });
      if (isValid == true){
          updateData(no);
      }
  }

  function ubahRinci(no){
      // $('.div_form_1').find('input,textarea').removeAttr('readonly');
      // $('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').removeAttr('disabled');
      // $('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');

        $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea').removeAttr('readonly');
        $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea').removeAttr('disabled');
        $('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('readonly','');

      $('#lbl_status_simpan_'+no).empty();
      $('#btn_ubah_'+no).css('display','none');
      $('#btn_update_'+no).css('display','block');
      $('#btn_cancel_update_'+no).css('display','block');
      $('#btn_hapus_'+no).attr('disabled','');

      $('#hidden_proses_status_'+no).empty();
      $('#hidden_proses_status_'+no).val('update');
  }

  function updateRinci(no){
      var isValid = true;
      $('#txt_kode_barang_'+no+',#txt_nama_brg_'+no+',#txt_qty_'+no+',#hidden_qty_po_'+no+',#hidden_sisa_qty_'+no+',#txt_satuan_'+no+',#txt_ket_rinci_'+no).each(function (e) {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                validasi($(this).attr("id"),no);
            }
            else {
              if($(this).attr('id') == 'hidden_qty_po_'+no){
                  $('#lbl_qty_po_'+no).css({
                      "background": ""
                    });
                    if($('#lbl_qty_po_'+no).next().is('br#br_'+no)){
                      $('#lbl_qty_po_'+no).next().remove();
                      $('#lbl_qty_po_'+no).next().remove();
                    }
                }
                else if($(this).attr('id') == 'hidden_sisa_qty_'+no){
          $('#lbl_sisa_qty_'+no).css({
            "background": ""
          });
          if($('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
            $('#lbl_sisa_qty_'+no).next().remove();
            $('#lbl_sisa_qty_'+no).next().remove();
          }
                }
                else{
          $(this).css({
            "background": ""
          });
          if($(this).next().is('br#br_'+no)){
            $(this).next().remove();
            $(this).next().remove();
          }
                }
            }
        });
      if (isValid == true){
          updateData(no);
      }
  }

  function updateData(no){
    var form_data = new FormData();

    if($('#chk_asset_'+no).is(':checked')){
      form_data.append('chk_asset','Asset');
    }
    else{
      form_data.append('chk_asset','');
    }

    form_data.append('txt_tgl_terima',$('#hidden_tgl_terima').val());
    form_data.append('txt_no_pengantar',$('#hidden_no_pengantar').val());
    form_data.append('txt_no_po',$('#hidden_no_po').val());
    form_data.append('txt_ref_po',$('#hidden_ref_po').val());
    form_data.append('txt_bkb_dari_pt',$('#hidden_bkb_dari_pt').val());
    form_data.append('txt_kd_supplier',$('#hidden_kd_supplier').val());
    form_data.append('txt_supplier',$('#hidden_supplier').val());
    // form_data.append('txt_lpb_dari_pt',$('#hidden_lpb_dari_pt').val());
    form_data.append('txt_tgl_input',$('#hidden_tgl_input').val());
    form_data.append('txt_lokasi_gudang',$('#hidden_lokasi_gudang').val());
    form_data.append('txt_tgl_po',$('#hidden_tgl_po').val());
    form_data.append('txt_ket_pengiriman',$('#hidden_ket_pengiriman').val());
    
    form_data.append('txt_kode_barang',$('#txt_kode_barang_'+no).val());
    form_data.append('txt_nama_brg',$('#txt_nama_brg_'+no).val());
    form_data.append('txt_qty',$('#txt_qty_'+no).val());
    form_data.append('txt_satuan',$('#txt_satuan_'+no).val());
    form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());
    form_data.append('hidden_grup',$('#hidden_grup_'+no).val());

    form_data.append('hidden_no_lpb',$('#hidden_no_lpb').val());
    form_data.append('hidden_no_ref_lpb',$('#hidden_no_ref_lpb').val());
    form_data.append('hidden_id_stok_masuk',$('#hidden_id_stok_masuk').val());
    form_data.append('hidden_id_masuk_item',$('#hidden_id_masuk_item_'+no).val());

    form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());
    
    $.ajax({
      type    : "POST",
      url     : "<?php echo site_url('lpb/ubah_rinci_lpb'); ?>",
      dataType  : "JSON",
      beforeSend: function(){
        $('#lbl_status_simpan_'+no).empty();
        $('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
      },
      cache   : false,
      contentType : false,
      processData : false,
      
      data    : form_data,
      success: function(data){
        // $('.div_form_1').find('input,textarea').not('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');
        // $('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('disabled','');
          
        $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_kode_barang_'+no).attr('readonly','');
        $('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('disabled','');

        $('#lbl_status_simpan_'+no).empty();
        $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil diubah</label>');

        $('#btn_ubah_'+no).css('display','block');
        $('#btn_update_'+no).css('display','none');
        $('#btn_cancel_update_'+no).css('display','none');
        $('#btn_hapus_'+no).removeAttr('disabled');

        $('#hidden_proses_status_'+no).empty();
        $('#hidden_proses_status_'+no).val('');
      },
      error   : function(request){
        alert('Error Update Data : '+request.responseText);

        $('#lbl_status_simpan_'+no).empty();
        $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
      }
    });
  }

  function hapus_row(id){
    var rowCount = $("#tableRinciLPB td").closest("tr").length;
    if (rowCount != 1){
      $('#tr_'+id).remove();
    }
    else{
      swal('Tidak Bisa dihapus, item LPB tinggal 1');
    }
  }
</script>