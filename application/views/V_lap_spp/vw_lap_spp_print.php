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
  <table class="singleborder" border="1" width="100%">
    <thead>
      <tr>
        <th align="center">No</th>
        <th align="center">Kode Barang</th>
        <th align="center">Part Number</th>
        <th align="center">Nama Barang</th>
        <th align="center">Satuan</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $no = 1;
        foreach ($data_barang as $listbarang) {
      ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $listbarang->kodebartxt; ?></td>
        <td><?= $listbarang->nopart; ?></td>
        <td><?= $listbarang->nabar; ?></td>
        <td><?= $listbarang->satuan; ?></td>
      </tr>
    <?php 
        $no++;
      } 
    ?>
    </tbody>
  </table>
  <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small><br />
  <small>Print generated by MMOP Website</small>
</body>