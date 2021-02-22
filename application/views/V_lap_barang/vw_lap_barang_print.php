<?php // var_dump('iya '.$data_barang);exit(); ?>
<head>
<style type="text/css">
    /*body{
      padding-top:1000px;
      margin-top:1000px;
    }*/
    h4 {
      font-size: 14px;
    }
    table tr td {
      font-size: 10px;
    }
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      /*width: 50%;*/
    }
    .singleborder {
      border-collapse: collapse;
      border: 1px solid black;
    }
    body{
      font-size: 10px;
    }
</style>
<title>Master Kode Barang</title>
</head>
<body>
  <div id="div_load_data"></div>
  <table class="singleborder" border="1" id="tableMasterKodeBarang" width="100%">
    <thead>
      <tr>
        <th align="center">No</th>
        <th align="center">Kode Barang</th>
        <th align="center">Part Number</th>
        <th align="center">Nama Barang</th>
        <th align="center">Satuan</th>
      </tr>
    </thead>
    <tbody id="tbodyMasterKodeBarang">
      <?php 
        $no = 1;
        // $query_grp = "SELECT DISTINCT grp FROM  kodebar ORDER BY grp ASC";
        // $data_grp = $this->db_logistik->query($query_grp)->result();
              
        // $query = "SELECT id, kodebartxt, nabar, nopart, satuan FROM kodebar ORDER BY nabar ASC";
        // $data_barang = $this->db_logistik->query($query)->result();

        foreach ($data_barang as $value) {
        // var_dump($data_barang);exit();

        // foreach ($data_barang as $listbarang=>$value) {
          // var_dump($value);exit();
      ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $value->kodebartxt; ?></td>
          <td><?= $value->nopart; ?></td>
          <td><?= $value->nabar; ?></td>
          <td><?= $value->satuan; ?></td>
        </tr>
      <?php 
          $no++;
          } 
      ?>
    </tbody>
  </table>
</body>

<script type="text/javascript">
  // $(document).ready(function(){
  //   listLapBarang();

  // });

  // function listLapBarang(){
  //   $.ajax({
  //         type    : "POST",
  //         url     : "<?php // echo site_url('lap_barang/list_barang'); ?>",
  //         dataType  : "JSON",
  //         beforeSend: function(){
  //           $('#div_load_data').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Loading Data</label>');
  //         },
  //         cache   : false,
  //         // contentType : false,
  //         // processData : false,
          
  //         data    : '',
  //         success: function(data){
  //           $('#tbodyMasterKodeBarang').empty();
  //           console.log(data);

  //           $.each(data, function(index) {
  //             // var opsi_cmb_bagian = '<option value="'+data[index].kode+'">'+data[index].nama+'</option>';
  //               // $('#cmb_bagian').append(opsi_cmb_bagian);
  //           });
  //         },
  //         error   : function(request){
  //           alert(request.responseText);
  //         }
  //     });
  // }
</script>