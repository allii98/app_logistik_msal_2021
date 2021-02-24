<style type="text/css">
    .table-in,
    .fixed_header {
        width: 750px;
        table-layout: fixed;
        border-collapse: collapse;
    }

    .table-in,
    .fixed_header tbody {
        display: block;
        width: 100%;
        overflow: auto;
        height: 400px;
    }

    .table-in,
    .fixed_header thead tr {
        display: block;
    }
</style>
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>SPP <small>Surat Permintaan Pembelian</small></h2>
                    <div id="txt_estate"></div>
                    <div class="clearfix"></div>
                </div>
                <a href="<?php echo site_url('spp/input'); ?>" class="btn btn-sm btn-info" id="a_spp_baru"><span class="fa fa-plus"></span> SPP Baru</a>
                <div class="x_content">
                    <br />
                    <div class="col-md-3">
                        <div data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group div_form_1">
                                <label class="control-label col-md-6 col-sm-3 col-xs-12">Jenis SPP <span class="required">*</span></label>
                                <label class="control-label col-md-6 col-sm-3 col-xs-12">Alokasi <span class="required">*</span></label>
                            </div>
                            <div class="form-group div_form_1">
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <select class="form-control" id="cmb_jenis_permohonan" name="cmb_jenis_permohonan">
                                        <option value="" selected>-- Pilih --</option>
                                        <?php
                                        switch ($this->session->userdata('status_lokasi')) {
                                            case 'HO':
                                        ?>
                                                <option value="SPP">SPP - Surat Permohonan Pembelian</option>
                                                <!-- <option value="SPPI">SPPI - Surat Permohonan Pembelian Internal</option> -->
                                                <option value="SPPA">SPPA - Surat Permohonan Pembelian Asset</option>
                                                <!-- <option value="SPPK">SPPK - Surat Permohonan Pembelian Khusus</option> -->
                                            <?php
                                                break;
                                            case 'RO':
                                            case 'SITE':
                                            case 'PKS':
                                            ?>
                                                <option value="SPP">SPP - Surat Permohonan Pembelian</option>
                                                <option value="SPPI">SPPI - Surat Permohonan Pembelian Internal</option>
                                                <option value="SPPA">SPPA - Surat Permohonan Pembelian Asset</option>
                                        <?php
                                                break;
                                            default:
                                                break;
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <select class="form-control" id="cmb_alokasi" name="cmb_alokasi">
                                        <option value="" selected>-- Pilih --</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group div_form_2">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Tgl. Referensi <span class="required">*</span></label>
                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Tgl. Terima <span class="required">*</span></label>
                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Departemen <span class="required">*</span></label>
                                <label class="control-label col-md-6 col-sm-3 col-xs-12">Keterangan </label>
                            </div>
                            <div class="form-group div_form_2">
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <input id="txt_tgl_ref" name="txt_tgl_ref" class="form-control col-md-7 col-xs-12" required="required" type="text" data-date-format="yyyy-mm-dd" value="<?= date('m/d/Y'); ?>" readonly>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <input id="txt_tgl_terima" name="txt_tgl_terima" class="form-control col-md-7 col-xs-12" required="required" type="text" data-date-format="yyyy-mm-dd" placeholder="Tgl. Terima" readonly>
                                </div>
                                <input id="txt_tanggal" name="txt_tanggal" class="form-control col-md-7 col-xs-12" required="required" type="hidden" data-date-format="yyyy-mm-dd" placeholder="Tanggal" readonly>

                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <select class="form-control" id="cmb_departemen" name="cmb_departemen" onchange="setKodeDept(this.value)">
                                        <option value="">-- Pilih --</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <input id="txt_kode_departemen" name="txt_kode_departemen" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Kode" readonly>
                                </div>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    <textarea id="txt_keterangan" name="txt_keterangan" class="resizable_textarea form-control" placeholder="Keterangan, jika ada" onkeydown="tabKeterangan(event)"></textarea>
                                </div>
                            </div>
                            <!-- <div class="ln_solid"></div> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="x_content div_form_3">
                            <label id="lbl_spp_status" name="lbl_spp_status">No. SPP : ... &nbsp; No. Ref SPP : ...</label>
                            <!-- <button class="btn btn-success" onclick="simpanAll();" style="float: right;">Simpan &nbsp;<i class="fa fa-save"></i></button> -->
                            <h4 id="h4_no_spp" name="h4_no_spp"></h4>
                            <h4 id="h4_no_ref_spp" name="h4_no_ref_spp"></h4>
                            <input type="hidden" id="hidden_no_spp" name="hidden_no_spp">
                            <input type="hidden" id="hidden_id_ppo" name="hidden_id_ppo">
                            <input type="hidden" id="hidden_no_ref_ppo" name="hidden_no_ref_ppo">
                            <!-- <div class="table-responsive"> -->
                            <table id="tableRinciBarang" class="table table-striped table-bordered table-in">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Barang</th>
                                        <th>Qty</th>
                                        <th>Merk/Type/Jenis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_rincian" name="tbody_rincian">
                                    <tr id="tr_1">
                                        <td width="3%">
                                            <input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
                                            <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>
                                            <button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
                                        </td>
                                        <form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
                                            <td width="30%">
                                                <input type="text" class="form-control" id="txt_cari_kode_brg_1" name="txt_cari_kode_brg_1" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang('1')"><br />
                                                <label id="lbl_kode_brg_1">Kode : ... </label><br />
                                                <label id="lbl_nama_brg_1">Nama Barang : ...</label><br />

                                                <input type="hidden" id="hidden_kode_brg_1" name="hidden_kode_brg_1">
                                                <input type="hidden" id="hidden_nama_brg_1" name="hidden_nama_brg_1">
                                            </td>
                                            <td width="15%">
                                                <input type="text" class="form-control currencyduadigit" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" size="26" required /><br />
                                                <label id="lbl_stok_1">Stok : ...</label><br />
                                                <label id="lbl_satuan_brg_1">Satuan : ...</label><br />

                                                <input type="hidden" id="hidden_stok_1" name="hidden_stok_1">
                                                <input type="hidden" id="hidden_satuan_brg_1" name="hidden_satuan_brg_1">
                                            </td>
                                            <td>
                                                <textarea id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" class="resizable_textarea form-control" size="26" placeholder="Merk/Type/Jenis, jika ada" onkeypress="saveRinciEnter(event,'1')"></textarea>
                                                <label id="lbl_status_simpan_1"></label>

                                                <input type="hidden" id="hidden_id_ppo_item_1" name="hidden_id_ppo_item_1">
                                            </td>
                                            <td width="5%">
                                                <button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('1')"></button>
                                                <button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_1" name="btn_ubah_1" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('1')"></button>
                                                <button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('1')"></button>
                                                <button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_1" name="btn_cancel_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('1')"></button>
                                                <button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_1" name="btn_hapus_1" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

                <!-- TEST 1 (MENCAPAI FOOTER) -->
                <div style="height: 490px;">

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListBarang">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">List Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <input type="hidden" id="hidden_no_row" name="hidden_no_row">
                        <table id="tableListBarang" class="table table-bordered" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 3% !important;">#</th>
                                    <th style="width: 5% !important;">No</th>
                                    <th style="width: 10% !important;">Kode Barang</th>
                                    <th style="width: 20% !important;">Nama Barang</th>
                                    <th style="width: 20% !important;">Grup</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_listbarang">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalPilihEstate">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Devisi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Pilih Devisi</label>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="cmb_pilih_est"></select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_pilih_po" onclick="pilihEST()">Pilih</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiHapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="hidden_no_delete" name="hidden_no_delete">
                    <p>Apakah Anda yakin ingin menghapus data ini ???</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btn_delete" onclick="deleteData()">Hapus</button>
                    <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</div>


<input type="hidden" id="hidden_no_table" name="hidden_no_table">

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

<!-- <script src="<?php // echo base_url(); 
                    ?>assets/gentelella/vendors/moment/min/moment.min.js"></script> -->
<!-- <script src="<?php // echo base_url(); 
                    ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<!-- <script src="<?php // echo base_url(); 
                    ?>assets/gentelella/build/js/custom.min.js"></script> -->

<!-- JQuery Number -->
<script src="<?php echo base_url(); ?>assets/jquerynumber/jquery.number.js"></script>
<script>
    $(document).ready(function() {
        //SIDEBAR ditampilkan saat masuk ke file ini.
        //$('body').removeClass('nav-md').addClass('nav-sm');
        $('#a_spp_baru').hide();

        // pilih estate
        $('#modalPilihEstate').modal('show');
        pilihDevisi();

        $('#cmb_jenis_permohonan').focus();
        $('.div_form_2').hide();
        $('.div_form_3').hide();

        $('#hidden_no_table').val(2);

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/cari_dept'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: '',
            success: function(data) {
                $.each(data, function(index) {
                    var opsi_cmb_departemen = '<option value="' + data[index].kode + '">' + data[index].nama + '</option>';
                    $('#cmb_departemen').append(opsi_cmb_departemen);
                });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });

        function pilihDevisi() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('spp/cari_devisi'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: '',
                success: function(data) {
                    $.each(data, function(index) {
                        var opsi_cmb_devisi = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
                        $('#cmb_pilih_est').append(opsi_cmb_devisi);
                    });
                },
                error: function(request) {
                    alert(request.responseText);
                }
            });
        }

        $('#txt_tanggal,#txt_tgl_terima').daterangepicker({
            singleDatePicker: !0,
            singleClasses: "picker_1"
        }, function(start, end, label) {});

        setInterval(function() {
            check_form_2();
        }, 1000);

    });

    function pilihEST() {
        $('#modalPilihEstate').modal('hide');
        var est = $('#cmb_pilih_est option:selected').text();
        $('#_est').remove();
        $('#txt_estate').append('<div style="text-align: right;" class="form-group nav navbar-right col-md-4" id="_est"><div class="form-group"><label class="control-label col-md-12 col-sm-6 col-xs-12" >' + est + '</label></div></div>');
        $('#txt_input_estate').val(est);
    }

    function tabKeterangan(e) {
        if (e.keyCode == 9) {
            $('#txt_cari_kode_brg_1').focus();
        }
    }

    function setKodeDept(kodeDept) {
        $('#txt_kode_departemen').val(kodeDept);
    }

    $('#cmb_alokasi').change(function() {
        var ses_lokasi = '<?= $this->session->userdata('status_lokasi') ?>';
        if (this.value == 'SITE') {
            $('#modalPilihEstate').modal('show');
        } else {
            $('#_est').remove();
            $('#txt_estate').append('');
            $('#txt_input_estate').val('');
        }
    });

    $('#cmb_jenis_permohonan').change(function() {

        var ses_lokasi = '<?php echo $this->session->userdata('status_lokasi'); ?>';
        // if(ses_lokasi == 'SITE'){
        //     $('#modalPilihEstate').modal('show');
        // }
        var opt_pilih = '<option value="">Pilih</option>';
        var opt_ho = '<option value="HO">HO</option>';
        var opt_ro = '<option value="RO">RO</option>';
        var opt_site = '<option value="SITE">SITE</option>';
        var opt_pks = '<option value="PKS">PKS</option>';
        var option;

        if (this.value == "SPP") {
            $('#cmb_alokasi').empty();
            if (ses_lokasi == "SITE") {
                option = opt_site;
            } else if (ses_lokasi == "RO") {
                option = opt_ro;
            } else if (ses_lokasi == "PKS") {
                option = opt_pks;
            } else if (ses_lokasi == "HO") {
                option = opt_ho + opt_ro + opt_site + opt_pks;
            } else {
                option = '';
            }
            $('#cmb_alokasi').append(option);
        } else if (this.value == "SPPI") {
            $('#cmb_alokasi').empty();
            if (ses_lokasi == "SITE") {
                option = opt_site;
            } else if (ses_lokasi == "RO") {
                option = opt_ro;
            } else if (ses_lokasi == "PKS") {
                option = opt_pks;
            } else {
                option = '';
            }
            $('#cmb_alokasi').append(option);
        } else if (this.value == "SPPA") {
            $('#cmb_alokasi').empty();
            // $('#cmb_alokasi').append(opt_ho);

            if (ses_lokasi == "SITE") {
                option = opt_site;
            } else if (ses_lokasi == "RO") {
                option = opt_ro;
            } else if (ses_lokasi == "PKS") {
                option = opt_pks;
            } else if (ses_lokasi == "HO") {
                option = opt_ho + opt_ro + opt_site + opt_pks;
            } else {
                option = '';
            }
            $('#cmb_alokasi').append(option);
        } else if (this.value == "SPPK") {
            $('#cmb_alokasi').empty();
            $('#cmb_alokasi').append(opt_ho);
        } else {
            $('#cmb_alokasi').empty();
            $('#cmb_alokasi').append(opt_pilih);
        }
    })
    // function opsi_cmb_divisi(){
    // 	$.ajax({
    //         type    : "POST",
    //         url     : "<?php // echo site_url('spp/opsi_cmb_divisi'); 
                            ?>",
    //         dataType  : "JSON",
    //         beforeSend: function(){
    //         },
    //         cache   : false,
    //         contentType : false,
    //         processData : false,

    //         data    : '',
    //         success: function(data){
    //         	$.each(data, function(index) {
    //           		var opsi_divisi = '<option value="'+data[index].kode+'">'+data[index].PT+'</option>';
    //           		$('#cmb_divisi').append(opsi_divisi);
    // 			});
    //         },
    //         error   : function(request){
    //           alert(request.responseText);
    //         }
    //     });
    // }

    // $(function(){
    // 	var site = "<?php //echo site_url();
                        ?>";
    // 	$('#cmb_departemen').autocomplete({
    // 		serviceUrl: site+'/spp/cari_dept',
    // 		onSelect: function(suggestion){
    // 			if(suggestion.value == "Data Tidak Ditemukan"){
    // 				$('#cmb_departemen').val('');
    // 			}
    // 			else{
    // 				$('#cmb_departemen').val('');
    // 				$('#txt_kode_departemen').val(suggestion.kode); 
    // 				$('#cmb_departemen').val(suggestion.nama); 
    // 			}
    // 		}
    // 	});
    // });

    function cari_barang(no_row) {
        $('#hidden_no_row').empty();
        $('#hidden_no_row').val(no_row);
        $('#modalListBarang').modal('show');
        $('#tableListBarang').DataTable().destroy();
        listBarang(no_row);
    }

    function listBarang(no_row) {
        $('#tableListBarang').DataTable().destroy();
        $('#tableListBarang').DataTable({
            // "fixedHeader"		: true,
            "paging": true,
            "scrollY": false,
            "scrollX": false,
            "searching": true,
            "select": false,
            "bLengthChange": true,
            "scrollCollapse": true,
            "bPaginate": true,
            "bInfo": true,
            "bSort": false,
            "processing": true,
            "serverSide": true,
            "stateSave": true,
            "order": [],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
            "ajax": {
                "url": "<?php echo site_url('spp/list_barang'); ?>",
                "type": "POST",
                "data": {},
                "error": function(request) {
                    alert(request.responseText);
                }
            },
            "columns": [{
                    "width": "3%"
                },
                {
                    "width": "5%"
                },
                {
                    "width": "10%"
                },
                {
                    "width": "20%"
                },
                {
                    "width": "20%"
                }
            ],
            "columnDefs": [{
                "targets": [],
                "orderable": false,
                // "width"	  : 200,
                // "targets"	  : 0,
            }, ],
            "drawCallback": function(settings) {
                $('#tableListBarang tr').each(function() {
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
        var rel = setInterval(function() {
            $('#tableListBarang').DataTable().ajax.reload();
            clearInterval(rel);
        }, 100);
    }

    $('#tableListBarang tbody').on('click', 'tr', function() {
        var data = $('#tableListBarang').DataTable().row(this).data();
        var no_row = $('#hidden_no_row').val();
        var row_id = data[2];
        // alert(no_row);
        // alert(row_id);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/get_kodebar'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'row_id': row_id
            },
            success: function(data) {
                var id = data[0].id;
                data_barang(id, no_row);
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    });

    function data_barang(id, no_row) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/data_barang'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'id': id
            },
            success: function(data) {
                // $.each(data, function(index) {
                $('#lbl_kode_brg_' + no_row).empty();
                $('#lbl_nama_brg_' + no_row).empty()
                $('#lbl_satuan_brg_' + no_row).empty();

                $('#hidden_kode_brg_' + no_row).empty();
                $('#hidden_nama_brg_' + no_row).empty();
                $('#hidden_satuan_brg_' + no_row).empty();

                $('#lbl_kode_brg_' + no_row).append('Kode : ' + data[0].kodebar);
                $('#lbl_nama_brg_' + no_row).append('Nama Barang : ' + data[0].nabar);
                $('#lbl_satuan_brg_' + no_row).append('Satuan : ' + data[0].satuan);

                $('#hidden_kode_brg_' + no_row).val(data[0].kodebar);
                $('#hidden_nama_brg_' + no_row).val(data[0].nabar);
                $('#hidden_satuan_brg_' + no_row).val(data[0].satuan);

                var kodbar = data[0].kodebar;
                sum_stok(kodbar, no_row);
                // });
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    function sum_stok(kodbar, no_row) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/sum_stok'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            // contentType : false,
            // processData : false,

            data: {
                'kodbar': kodbar
            },
            success: function(data) {
                // if (data == false){
                // 	swal("Stock Awal belum ada, silahkan input dahulu !", {
                // 	  buttons: {
                // 	    ya: {
                // 	      text: "Ya",
                // 	      value: "iya",
                // 	    },
                // 	    cancel: "Tutup",
                // 	  },
                // 	})
                // 	.then((value) => {
                // 	  switch (value) {
                // 	 	case "iya":
                // 	      window.open('<?php echo site_url('stock_awal'); ?>','_blank');
                // 	      break;
                // 	 	default:
                // 	      swal.close();
                // 	  }
                // 	});
                // }
                // else{
                $('#lbl_stok_' + no_row).empty();
                $('#hidden_stok_' + no_row).empty();
                $('#lbl_stok_' + no_row).append('Stok : ' + data);
                $('#hidden_stok_' + no_row).val(data);

                $('#modalListBarang').modal('hide');

                $('#txt_qty_' + no_row).focus();
                // }
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }

    var n = 2;

    function tambah_row() {
        var n = $('#hidden_no_table').val();

        var tr_buka = '<tr id="tr_' + n + '">';
        // var  hidden_proses = '<input type="hidden" id="hidden_proses_status_'+n+'" name="hidden_proses_status_'+n+'" value="insert">';
        var td_col_1 = '<td width="3%">' +
            '<input type="hidden" id="hidden_proses_status_' + n + '" name="hidden_proses_status_' + n + '" value="insert">' +
            '<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>' +
            '<button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_' + n + '" name="btn_hapus_row_' + n + '" onclick="hapus_row(' + n + ')"></button>' +
            '</td>';
        var form_buka = '<form id="form_rinci_' + n + '" name="form_rinci_' + n + '" method="POST" action="javascript:;">';
        var td_col_2 = '<td width="30%">' +
            '<input type="text" class="form-control" id="txt_cari_kode_brg_' + n + '" name="txt_cari_kode_brg_' + n + '" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang(' + n + ')"><br />' +
            '<label id="lbl_kode_brg_' + n + '">Kode : ... </label><br />' +
            '<label id="lbl_nama_brg_' + n + '">Nama Barang : ...</label><br />' +
            '<input type="hidden" id="hidden_kode_brg_' + n + '" name="hidden_kode_brg_' + n + '">' +
            '<input type="hidden" id="hidden_nama_brg_' + n + '" name="hidden_nama_brg_' + n + '">' +
            '</td>';
        var td_col_3 = '<td width="15%">' +
            '<input type="text" class="form-control currencyduadigit" id="txt_qty_' + n + '" name="txt_qty_' + n + '" placeholder="Qty" size="26" required><br />' +
            '<label id="lbl_stok_' + n + '">Stok : ...</label><br />' +
            '<label id="lbl_satuan_brg_' + n + '">Satuan : ...</label><br />' +
            '<input type="hidden" id="hidden_satuan_brg_' + n + '" name="hidden_satuan_brg_' + n + '">' +
            '<input type="hidden" id="hidden_stok_' + n + '" name="hidden_stok_' + n + '">' +
            '</td>';
        // var td_col_4 = '<td>'
        // +'<input type="text" id="txt_merk_type_jenis_'+n+'" name="txt_merk_type_jenis_'+n+'" size="26" placeholder="Merk/Type/Jenis">'
        // +'</td>';
        var td_col_5 = '<td>' +
            '<textarea id="txt_keterangan_rinci_' + n + '" name="txt_keterangan_rinci_' + n + '" class="resizable_textarea form-control" size="26" placeholder="Merk/Type/Jenis, jika ada" onkeypress="saveRinciEnter(event,' + n + ')"></textarea>' +
            '<label id="lbl_status_simpan_' + n + '"></label>'
            // +'<input type="hidden" id="hidden_id_ppo_'+n+'" name="hidden_id_ppo_'+n+'">'
            +
            '<input type="hidden" id="hidden_id_ppo_item_' + n + '" name="hidden_id_ppo_item_' + n + '">' +
            '</td>';
        var td_col_6 = '<td width="5%">' +
            '<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_' + n + '" name="btn_simpan_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_' + n + '" name="btn_ubah_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_' + n + '" name="btn_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_' + n + '" name="btn_cancel_update_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate(' + n + ')"></button>' +
            '<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_' + n + '" name="btn_hapus_' + n + '" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci(' + n + ')"></button>' +
            '</td>';
        var form_tutup = '</form>';
        var tr_tutup = '</tr>';

        $('#tbody_rincian').append(tr_buka + td_col_1 + form_buka + td_col_2 + td_col_3 + td_col_5 + td_col_6 + form_tutup + tr_tutup);
        $('#txt_qty_' + n).number(true, 2);
        /*$('html, body').animate({
            scrollTop: $("#tr_" + n).offset().top
        }, 2000);*/
        // n = parseInt(n)+ parseInt(1);
        n++;
        $('#hidden_no_table').val(n);
    }

    function hapus_row(id) {
        // var totalRowCount = $("#tableRinciBarang tr").length;
        var rowCount = $("#tableRinciBarang td").closest("tr").length;

        if (rowCount != 1) {
            $('#tr_' + id).remove();
        } else {
            swal('Tidak Bisa dihapus, item SPP tinggal 1');
        }
        // if(id != 2){
        // n = parseInt(n)- parseInt(1);
        // $('#tr_'+n).remove();
        // }
    }

    // $('#cmb_divisi,#cmb_jenis_permohonan,#cmb_alokasi').change(function(){
    $('#cmb_jenis_permohonan,#cmb_alokasi').change(function() {
        if ($.trim($('#cmb_jenis_permohonan').val()) != '' && $.trim($('#cmb_alokasi').val()) != '') {
            $('.div_form_2').show();
        } else {
            $('.div_form_2').hide();
            $('.div_form_3').hide();
        }
    })

    function check_form_2() {
        if ($.trim($('#cmb_jenis_permohonan').val()) != '' &&
            $.trim($('#cmb_alokasi').val()) != '' &&
            $.trim($('#txt_tgl_ref').val()) != '' &&
            $.trim($('#txt_tanggal').val()) != '' &&
            $.trim($('#txt_tgl_terima').val()) != '' &&
            $.trim($('#txt_kode_departemen').val()) != '' &&
            $.trim($('#cmb_departemen').val()) != '' &&
            $('#div_form_2').show()) {
            $('.div_form_3').show();
        } else {
            $('.div_form_3').hide();
        }
    }

    function saveRinciEnter(e, no) {
        if (e.keyCode == 13 && !e.shiftKey) {
            if ($('#hidden_proses_status_' + no).val() == 'insert') {
                saveRinci(no);
            } else if ($('#hidden_proses_status_' + no).val() == 'update') {
                updateRinci(no);
            }
        }
    }

    function saveRinciClick(no) {
        saveRinci(no);
    }

    function validasi(arr_id, no) {
        if (Array.isArray(arr_id)) {
            $.each(arr_id, function(index, value) {
                // $(arr_id[index]).css({
                // "background": "#FFCECE"
                // })
                // $(arr_id[index]).after('<div class="pesan_error"><br /><small style="margin-top:0px;color:red;">Harus diisi</small></div>');
            });
        } else {
            if ($('#' + arr_id).is('input') || $('#' + arr_id).is('textarea')) {
                if (arr_id == 'hidden_kode_brg_' + no) {
                    $('#lbl_kode_brg_' + no).css({
                        "background": "#FFCECE"
                    })
                    if (!$('#lbl_kode_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_kode_brg_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    }
                } else if (arr_id == 'hidden_nama_brg_' + no) {
                    $('#lbl_nama_brg_' + no).css({
                        "background": "#FFCECE"
                    })
                    if (!$('#lbl_nama_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_nama_brg_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    }
                } else if (arr_id == 'hidden_stok_' + no) {
                    $('#lbl_stok_' + no).css({
                        "background": "#FFCECE"
                    })
                    if (!$('#lbl_stok_' + no).next().is('br#br_' + no)) {
                        $('#lbl_stok_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    }
                } else if (arr_id == 'hidden_satuan_brg_' + no) {
                    $('#lbl_satuan_brg_' + no).css({
                        "background": "#FFCECE"
                    })
                    if (!$('#lbl_satuan_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_satuan_brg_' + no).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    }
                } else {
                    $('#' + arr_id).css({
                        "background": "#FFCECE"
                    })
                    if (!$('#' + arr_id).next().is('br#br_' + no)) {
                        $('#' + arr_id).after('<br id="br_' + no + '" /><small id="pesan_error_' + no + '" style="margin-top:0px;color:red;">Harus diisi</small>');
                    }
                }
            }
        }
    }

    function simpanAll() {
        var jumlah = document.getElementById("tableRinciBarang").rows.length;
        console.log(jumlah - 1);
        for (var i = 1; i <= jumlah - 1; i++) {
            var tes = document.getElementById("tableRinciBarang").rows[i].cells[i].innerHTML;
            console.log(tes);
        }
    }

    function saveRinci(no) {
        var isValid = true;
        $('#hidden_kode_brg_' + no + ',#hidden_nama_brg_' + no + ',#txt_qty_' + no + ',#hidden_stok_' + no + ',#hidden_satuan_brg_' + no).each(function(e) {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                validasi($(this).attr("id"), no);
            } else {
                if ($(this).attr('id') == 'hidden_kode_brg_' + no) {
                    $('#lbl_kode_brg_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_kode_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_kode_brg_' + no).next().remove();
                        $('#lbl_kode_brg_' + no).next().remove();
                    }
                } else if ($(this).attr('id') == 'hidden_nama_brg_' + no) {
                    $('#lbl_nama_brg_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_nama_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_nama_brg_' + no).next().remove();
                        $('#lbl_nama_brg_' + no).next().remove();
                    }
                } else if ($(this).attr('id') == 'hidden_stok_' + no) {
                    $('#lbl_stok_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_stok_' + no).next().is('br#br_' + no)) {
                        $('#lbl_stok_' + no).next().remove();
                        $('#lbl_stok_' + no).next().remove();
                    }
                } else if ($(this).attr('id') == 'hidden_satuan_brg_' + no) {
                    $('#lbl_satuan_brg_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_satuan_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_satuan_brg_' + no).next().remove();
                        $('#lbl_satuan_brg_' + no).next().remove();
                    }
                } else {
                    $(this).css({
                        "background": ""
                    });
                    if ($(this).next().is('br#br_' + no)) {
                        $(this).next().remove();
                        $(this).next().remove();
                    }
                }

            }
        });
        if (isValid == true) {
            var nilstok = $('#hidden_stok_' + no + '').val();
            var nilqty = $('#txt_qty_' + no + '').val();
            if (nilqty == 0 || nilqty == null) {
                console.log('Nilai Qty Tidak Boleh Kosong');
                swal('Nilai Qty Tidak Boleh Kosong');
            } else {
                console.log('silahkan input bro!');
                saveData(no);
            }

        }
        // $('#hidden_no_save').val(no);
        // $('#modalKonfirmasiSimpan').modal('show');
    }

    function saveData(no) {
        // var no = $('#hidden_no_save').val();
        // $('#modalKonfirmasiSimpan').modal('hide');

        var form_data = new FormData();

        // form_data.append('cmb_divisi',$('#cmb_divisi :selected').text());
        // form_data.append('cmb_kode_divisi',$('#cmb_divisi').val());
        form_data.append('cmb_jenis_permohonan', $('#cmb_jenis_permohonan').val());
        form_data.append('cmb_alokasi', $('#cmb_alokasi').val());
        // form_data.append('cmb_estate', $('#cmb_estate').val());
        // form_data.append('txt_no_ref',$('#txt_no_ref').val());
        form_data.append('txt_tgl_ref', $('#txt_tgl_ref').val());
        form_data.append('txt_tanggal', $('#txt_tanggal').val());
        form_data.append('txt_tgl_terima', $('#txt_tgl_terima').val());
        form_data.append('txt_kode_departemen', $('#txt_kode_departemen').val());
        form_data.append('cmb_departemen', $('#cmb_departemen :selected').text());
        form_data.append('txt_keterangan', $('#txt_keterangan').val());
        form_data.append('hidden_no_spp', $('#hidden_no_spp').val());

        form_data.append('txt_cari_kode_brg', $('#txt_cari_kode_brg_' + no).val());
        form_data.append('txt_qty', $('#txt_qty_' + no).val());
        // form_data.append('txt_merk_type_jenis',$('#txt_merk_type_jenis_'+no).val());
        form_data.append('txt_keterangan_rinci', $('#txt_keterangan_rinci_' + no).val());

        form_data.append('hidden_kode_brg', $('#hidden_kode_brg_' + no).val());
        form_data.append('hidden_nama_brg', $('#hidden_nama_brg_' + no).val());
        form_data.append('hidden_satuan_brg', $('#hidden_satuan_brg_' + no).val());
        form_data.append('hidden_stok', $('#hidden_stok_' + no).val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/simpan_rinci_spp'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
                if ($.trim($('#hidden_no_spp').val()) == '') {
                    $('#lbl_spp_status').empty();
                    $('#lbl_spp_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
                }
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                if (data == "kodebar_exist") {
                    swal('Tidak bisa ditambahkan. Barang sudah ada pada SPP yang sama !');
                    $('#lbl_status_simpan_' + no).empty();
                    $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                } else {
                    if (data.status == true) {
                        $('#a_spp_baru').show();

                        $('.div_form_1').find('select').attr('disabled', '');

                        $('.div_form_2').find('text,textarea').not('#txt_tanggal,#txt_tgl_terima').attr('readonly', '');
                        $('.div_form_2').find('#txt_tanggal,#txt_tgl_terima').attr('disabled', '');

                        $('#tableRinciBarang tbody #tr_' + no + ' td').find('input,textarea,select').not('#txt_cari_kode_brg_' + no).attr('readonly', '');
                        $('#tableRinciBarang tbody #tr_' + no + ' td').find('#txt_cari_kode_brg_' + no + ', #btn_simpan_' + no).attr('disabled', '');

                        $('#lbl_status_simpan_' + no).empty();
                        $('#lbl_status_simpan_' + no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

                        $('#lbl_spp_status').empty();
                        $('#h4_no_spp').html('No. SPP : ' + data.no_spp);
                        $('#hidden_no_spp').val(data.no_spp);

                        $('#h4_no_ref_spp').html('No. Ref. SPP : ' + data.no_ref_ppo);
                        $('#hidden_no_ref_ppo').val(data.no_ref_ppo);

                        $('#hidden_id_ppo').val(data.id_ppo);
                        $('#hidden_id_ppo_item_' + no).val(data.id_ppo_item);

                        $('#btn_hapus_row_' + no).css('display', 'none');
                        $('#btn_simpan_' + no).css('display', 'none');
                        $('#btn_ubah_' + no).css('display', 'block');
                        $('#btn_hapus_' + no).css('display', 'block');
                    } else {
                        alert('Error Save Data : ' + request.responseText);
                        $('#lbl_status_simpan_' + no).empty();
                        $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                    }
                }
            },
            error: function(request) {
                alert('Error Save Data : ' + request.responseText);

                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');

                if ($.trim($('#hidden_no_spp').val()) == '') {
                    $('#lbl_spp_status').empty();
                    $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
                }
            }
        });
    }

    function ubahRinci(no) {
        $('.div_form_1').find('select').removeAttr('disabled', '');

        $('.div_form_2').find('text,textarea').not('#txt_tanggal,#txt_tgl_terima').removeAttr('readonly', '');
        $('.div_form_2').find('#txt_tanggal,#txt_tgl_terima').removeAttr('disabled', '');

        $('#tableRinciBarang tbody #tr_' + no + ' td').find('input,textarea,select').not('#txt_cari_kode_brg_' + no).removeAttr('readonly');
        $('#tableRinciBarang tbody #tr_' + no + ' td').find('#txt_cari_kode_brg_' + no + ', #btn_simpan_' + no).removeAttr('disabled');
        $('#lbl_status_simpan_' + no).empty();
        $('#btn_ubah_' + no).css('display', 'none');
        $('#btn_update_' + no).css('display', 'block');
        $('#btn_cancel_update_' + no).css('display', 'block');
        $('#btn_hapus_' + no).attr('disabled', '');

        $('#hidden_proses_status_' + no).empty();
        $('#hidden_proses_status_' + no).val('update');
    }

    function cancelUpdate(no) {
        $('.div_form_1').find('select').attr('disabled', '');

        $('.div_form_2').find('text,textarea').not('#txt_tanggal,#txt_tgl_terima').attr('readonly', '');
        $('.div_form_2').find('#txt_tanggal,#txt_tgl_terima').attr('disabled', '');

        $('#tableRinciBarang tbody #tr_' + no + ' td').find('input,textarea,select').not('#txt_cari_kode_brg_' + no).attr('readonly', '');
        $('#tableRinciBarang tbody #tr_' + no + ' td').find('#txt_cari_kode_brg_' + no + ', #btn_simpan_' + no).attr('disabled', '');

        $('#btn_cancelUpdate_ubah_' + no).css('display', 'block');
        $('#btn_update_' + no).css('display', 'none');
        $('#btn_cancel_update_' + no).css('display', 'none');
        $('#btn_hapus_' + no).removeAttr('disabled');

        $('#hidden_proses_status_' + no).empty();
        $('#hidden_proses_status_' + no).val('');
        getPreviousData(no);
    }

    function getPreviousData(no) {
        var form_data = new FormData();

        // form_data.append('hidden_id_ppo',$('#hidden_id_ppo_'+no).val());
        form_data.append('hidden_id_ppo', $('#hidden_id_ppo').val());
        form_data.append('hidden_id_ppo_item', $('#hidden_id_ppo_item_' + no).val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/cancel_ubah_rinci'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                $('#lbl_kode_brg_' + no).empty();
                $('#lbl_nama_brg_' + no).empty();

                $('#lbl_kode_brg_' + no).append("Kode : " + data[0].kodebartxt);
                $('#lbl_nama_brg_' + no).append("Nama Barang : " + data[0].nabar);

                $('#lbl_stok_' + no).empty();
                $('#lbl_satuan_brg_' + no).empty();

                if (typeof data[0].stok == "undefined") {
                    data[0].stok = "-";
                }

                if (typeof data[0].sat == "undefined") {
                    data[0].sat = "-";
                }

                $('#lbl_stok_' + no).append("Stok : " + data[0].stok);
                $('#lbl_satuan_brg_' + no).append("Satuan : " + data[0].sat);

                $('#hidden_stok_' + no).val(data[0].stok);
                $('#hidden_satuan_brg_' + no).val(data[0].sat);

                $('#hidden_kode_brg_' + no).val(data[0].kodebartxt);
                $('#hidden_nama_brg_' + no).val(data[0].nabar);
                $('#txt_qty_' + no).val(data[0].qty);
                // $('#txt_merk_type_jenis_'+no).val(data[0].merk);
                $('#txt_keterangan_rinci_' + no).val(data[0].ket);

                //   	$('#tableRinciBarang tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_cari_kode_brg_'+no).attr('readonly','');
                //   	$('#tableRinciBarang tbody #tr_'+no+' td').find('#txt_cari_kode_brg_'+no+', #btn_simpan_'+no).attr('disabled','');

                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');

                $('#btn_ubah_' + no).css('display', 'block');
                $('#btn_update_' + no).css('display', 'none');
                $('#btn_cancel_update_' + no).css('display', 'none');
                $('#btn_hapus_' + no).removeAttr('disabled');

                $('#hidden_proses_status_' + no).empty();
                $('#hidden_proses_status_' + no).val('');
            },
            error: function(request) {
                alert('Error Get Data : ' + request.responseText);

                //  	$('#lbl_status_simpan_'+no).empty();
                // $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
            }
        });
    }

    function updateRinci(no) {
        var isValid = true;
        $('#hidden_kode_brg_' + no + ',#hidden_nama_brg_' + no + ',#txt_qty_' + no + ',#hidden_stok_' + no + ',#hidden_satuan_brg_' + no).each(function(e) {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                validasi($(this).attr("id"), no);
            } else {
                if ($(this).attr('id') == 'hidden_kode_brg_' + no) {
                    $('#lbl_kode_brg_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_kode_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_kode_brg_' + no).next().remove();
                        $('#lbl_kode_brg_' + no).next().remove();
                    }
                } else if ($(this).attr('id') == 'hidden_nama_brg_' + no) {
                    $('#lbl_nama_brg_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_nama_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_nama_brg_' + no).next().remove();
                        $('#lbl_nama_brg_' + no).next().remove();
                    }
                } else if ($(this).attr('id') == 'hidden_stok_' + no) {
                    $('#lbl_stok_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_stok_' + no).next().is('br#br_' + no)) {
                        $('#lbl_stok_' + no).next().remove();
                        $('#lbl_stok_' + no).next().remove();
                    }
                } else if ($(this).attr('id') == 'hidden_satuan_brg_' + no) {
                    $('#lbl_satuan_brg_' + no).css({
                        "background": ""
                    });
                    if ($('#lbl_satuan_brg_' + no).next().is('br#br_' + no)) {
                        $('#lbl_satuan_brg_' + no).next().remove();
                        $('#lbl_satuan_brg_' + no).next().remove();
                    }
                } else {
                    $(this).css({
                        "background": ""
                    });
                    if ($(this).next().is('br#br_' + no)) {
                        $(this).next().remove();
                        $(this).next().remove();
                    }
                }
            }
        });
        if (isValid == true) {
            var nilstok = $('#hidden_stok_' + no + '').val();
            var nilqty = $('#txt_qty_' + no + '').val();
            if (nilqty == 0 || nilqty == null) {
                console.log('Nilai Qty Tidak Boleh Kosong');
                swal('Nilai Qty Tidak Boleh Kosong');
            } else {
                console.log('silahkan input bro!');
                updateData(no);
            }

        }
        // $('#hidden_no_update').val(no);
        // $('#modalKonfirmasiUbah').modal('show');
    }

    function updateData(no) {
        // var no = $('#hidden_no_update').val();
        // $('#modalKonfirmasiUbah').modal('hide');

        var form_data = new FormData();

        // form_data.append('cmb_divisi',$('#cmb_divisi :selected').text());
        // form_data.append('cmb_kode_divisi',$('#cmb_divisi').val());
        form_data.append('cmb_jenis_permohonan', $('#cmb_jenis_permohonan').val());
        form_data.append('cmb_alokasi', $('#cmb_alokasi').val());
        // form_data.append('txt_no_ref',$('#txt_no_ref').val());
        form_data.append('txt_tgl_ref', $('#txt_tgl_ref').val());
        form_data.append('txt_tanggal', $('#txt_tanggal').val());
        form_data.append('txt_tgl_terima', $('#txt_tgl_terima').val());
        form_data.append('txt_kode_departemen', $('#txt_kode_departemen').val());
        form_data.append('cmb_departemen', $('#cmb_departemen :selected').text());
        form_data.append('txt_keterangan', $('#txt_keterangan').val());
        form_data.append('hidden_no_spp', $('#hidden_no_spp').val());

        form_data.append('txt_cari_kode_brg', $('#txt_cari_kode_brg_' + no).val());
        form_data.append('txt_qty', $('#txt_qty_' + no).val());
        // form_data.append('txt_merk_type_jenis',$('#txt_merk_type_jenis_'+no).val());
        form_data.append('txt_keterangan_rinci', $('#txt_keterangan_rinci_' + no).val());

        form_data.append('hidden_kode_brg', $('#hidden_kode_brg_' + no).val());
        form_data.append('hidden_nama_brg', $('#hidden_nama_brg_' + no).val());
        form_data.append('hidden_satuan_brg', $('#hidden_satuan_brg_' + no).val());
        form_data.append('hidden_stok', $('#hidden_stok_' + no).val());

        // form_data.append('hidden_id_ppo',$('#hidden_id_ppo_'+no).val());
        form_data.append('hidden_id_ppo', $('#hidden_id_ppo').val());
        form_data.append('hidden_no_ref_ppo', $('#hidden_no_ref_ppo').val());
        form_data.append('hidden_id_ppo_item', $('#hidden_id_ppo_item_' + no).val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/ubah_rinci_spp'); ?>",
            dataType: "JSON",
            beforeSend: function() {
                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                if (data == "kodebar_exist") {
                    swal('Tidak bisa ditambahkan. Barang sudah ada pada SPP yang sama !');
                    $('#lbl_status_simpan_' + no).empty();
                    $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
                } else {
                    $('.div_form_1').find('select').attr('disabled', '');

                    $('.div_form_2').find('text,textarea').not('#txt_tanggal,#txt_tgl_terima').attr('readonly', '');
                    $('.div_form_2').find('#txt_tanggal,#txt_tgl_terima').attr('disabled', '');
                    $('.div_form_2').find('select').attr('disabled', '');

                    $('#tableRinciBarang tbody #tr_' + no + ' td').find('input,textarea,select').not('#txt_cari_kode_brg_' + no).attr('readonly', '');
                    $('#tableRinciBarang tbody #tr_' + no + ' td').find('#txt_cari_kode_brg_' + no + ', #btn_simpan_' + no).attr('disabled', '');

                    $('#lbl_status_simpan_' + no).empty();
                    $('#lbl_status_simpan_' + no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil diubah</label>');

                    $('#btn_ubah_' + no).css('display', 'block');
                    $('#btn_update_' + no).css('display', 'none');
                    $('#btn_cancel_update_' + no).css('display', 'none');
                    $('#btn_hapus_' + no).removeAttr('disabled');

                    $('#hidden_proses_status_' + no).empty();
                    $('#hidden_proses_status_' + no).val('');
                }
            },
            error: function(request) {
                alert('Error Update Data : ' + request.responseText);

                $('#lbl_status_simpan_' + no).empty();
                $('#lbl_status_simpan_' + no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
            }
        });
    }

    function hapusRinci(no) {
        $('#hidden_no_delete').val(no);
        $('#modalKonfirmasiHapus').modal('show');
    }

    function deleteData() {
        var no = $('#hidden_no_delete').val();
        $('#modalKonfirmasiHapus').modal('hide');

        var rowCount = $("#tableRinciBarang td").closest("tr").length;

        if (rowCount != 1) {
            var form_data = new FormData();

            // form_data.append('hidden_id_ppo',$('#hidden_id_ppo_'+no).val());
            form_data.append('hidden_id_ppo', $('#hidden_id_ppo').val());
            form_data.append('hidden_id_ppo_item', $('#hidden_id_ppo_item_' + no).val());

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('spp/hapus_rinci'); ?>",
                dataType: "JSON",
                beforeSend: function() {

                },
                cache: false,
                contentType: false,
                processData: false,

                data: form_data,
                success: function(data) {
                    $('#tr_' + no).remove();
                    swal('Data Berhasil dihapus');
                    // $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
                    // $('.modal-success').modal('show');
                },
                error: function(request) {
                    alert(request.responseText);
                }
            });
        } else {

            hapus_temp(no);
            $('#btn_hapus_row_' + no).css('display', 'block');
            $('#btn_ubah_' + no).css('display', 'none');
            $('#btn_hapus_' + no).css('display', 'none');
            $('#btn_simpan_' + no).css('display', 'block');
            $('#btn_simpan_' + no).removeAttr('disabled');
            $('#txt_cari_kode_brg_' + no).removeAttr('disabled');
            $('#txt_qty_' + no).removeAttr('readonly');
            $('#txt_keterangan_rinci_' + no).removeAttr('readonly');
            $('#txt_keterangan').removeAttr('readonly');
            $('#cmb_jenis_permohonan').removeAttr('disabled');
            $('#cmb_alokasi').removeAttr('disabled');

            $('#lbl_kode_brg_' + no).empty();
            $('#lbl_nama_brg_' + no).empty()
            $('#lbl_satuan_brg_' + no).empty();
            $('#lbl_stok_' + no).empty();
            $('#lbl_status_simpan_' + no).empty();
            $('#lbl_spp_status').empty();
            $('#h4_no_spp').html('No. SPP : ...');
            $('#h4_no_ref_spp').html('No. Ref. SPP : ...');
            $('#hidden_no_spp').val('');
            $('#hidden_no_ref_ppo').val('');
            $('#hidden_id_ppo').val('');

            $('#hidden_kode_brg_' + no).empty();
            $('#hidden_nama_brg_' + no).empty();
            $('#hidden_satuan_brg_' + no).empty();

            $('#lbl_kode_brg_' + no).append('Kode : ...');
            $('#lbl_nama_brg_' + no).append('Nama Barang : ...');
            $('#lbl_satuan_brg_' + no).append('Satuan : ...');
            $('#lbl_stok_' + no).append('Stok : ...');
            $('#h4_no_spp' + no).append('No.SPP : ...');
            $('#h4_no_ref_spp' + no).append('No. Ref. SPP : ...');
            $('#txt_qty_' + no).val('');
            $('#txt_keterangan_rinci_' + no).val('');
        }
    }

    function hapus_temp(no) {
        var form_data = new FormData();
        form_data.append('hidden_id_ppo', $('#hidden_id_ppo').val());
        form_data.append('hidden_id_ppo_item', $('#hidden_id_ppo_item_' + no).val());

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('spp/hapus_temp'); ?>",
            dataType: "JSON",
            beforeSend: function() {

            },
            cache: false,
            contentType: false,
            processData: false,

            data: form_data,
            success: function(data) {
                swal('Data Berhasil dihapus');
            },
            error: function(request) {
                alert(request.responseText);
            }
        });
    }
</script>