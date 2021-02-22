<?php
  // var_dump(($po->ppn == "Y") ? number_format($po->totalbayar*0.1,2,",",".") : "-");exit();
  // if(!empty($supplier->alamat)){
  //   $alamat_supplier = $supplier->alamat;
  // }
  // else{
  //   $alamat_supplier = "-";
  // }
  $alamat_supplier = (!empty($supplier->alamat)) ? $supplier->alamat : "-";
  $tlp_supplier = (!empty($supplier->tlp)) ? $supplier->tlp : "-";
  $fax_supplier = (!empty($supplier->fax)) ? $supplier->fax : "-";
  $pot_ppn_format = ($po->ppn == "Y") ? number_format($po->totalbayar*0.1,2,",",".") : "0";
  $pot_ppn = ($po->ppn == "Y") ? ($po->totalbayar*0.1) : "0";
  $total_bayar_format = number_format($po->totalbayar,2,",",".");
  // $total_bayar = $po->totalbayar;
?>
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
<title>Pesanan Pembelian</title>
</head>
<body>
  <table>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>PT MULIA SAWIT AGRO LESTARI</td>
    </tr>
    <tr>
      <td>No. NPWP</td>
      <td>:</td>
      <td><?= $pt->npwp; ?></td>
    </tr>
    <tr>
      <td valign="top">Alamat NPWP</td>
      <td valign="top">:</td>
      <td align="justify"><?= $pt->alamatnpwp; ?></td>
    </tr>
  </table>
  <p align="right" style="margin-bottom: 0px;margin-top: 0px;"><small>Jakarta, <?= date('d-m-Y') ?></small></p>
  <h4 align="center" style="margin: 0px;">PESANAN PEMBELIAN</h4>
  <p align="center" style="margin-top: 0px;font-size: 12px;">
    No. PP : <?= $po->noreftxt; ?> <br />
    No. SPP : <?= $po->no_refppo; ?>
  </p>
  <table border="1" class="singleborder" width="100%">
    <tr>
      <td colspan="4" style="padding:5px;">
        Kepada YTH,<br />
        <?= $supplier->supplier; ?><br />
        <?= $alamat_supplier; ?><br />
        Tlp. <?= $tlp_supplier; ?><br />
        Fax. <?= $fax_supplier; ?><br />
      </td>
      <td colspan="6" style="padding: 5px;">
        <br />
        Syarat Pembayaran : <br />
        Jadwal Pengiriman : <?= $po->ket_kirim;?> <br />
        Alamat Penyerahan : <?= $po->lokasikirim; ?> <br />
      </td>
    </tr>
    <tr>
      <td align="center">No</td>
      <td align="center" width="30px">Kode Barang</td>
      <td align="center">Nama Barang</td>
      <td align="center">Merk</td>
      <td align="center" width="100px">No. Part</td>
      <td align="center">Qty</td>
      <td align="center">SAT</td>
      <td align="center">Harga Satuan</td>
      <td align="center">Disc %</td>
      <td align="center">Total Harga</td>
    </tr>
    <?php 
    $no = 1;
    $jumlah_biaya_lain = 0;
    foreach ($item_po as $list_item) { ?>
    <tr>
      <td align="center"><?= $no; ?></td>
      <td align="center"><?= $list_item->kodebartxt; ?></td>
      <td align="center"><?= $list_item->nabar; ?></td>
      <td align="center"><?= $list_item->merek; ?></td>
      <td align="center">-</td>
      <td align="center"><?= $list_item->qty; ?></td>
      <td align="center"><?= $list_item->sat; ?></td>
      <td align="right">Rp. <?= number_format($list_item->harga,2,",","."); ?></td>
      <td align="center"><?= $list_item->disc; ?></td>
      <td align="right">Rp. <?= number_format($list_item->jumharga,2,",","."); ?></td>
    </tr>
    <?php 
      $jumlah_biaya_lain += $list_item->JUMLAHBPO;
      $no++;
      } 
    ?>
    <tr>
      <td colspan="6" rowspan="4">
        <b>Keterangan Pembayaran</b><br />
        Nama Pemilik : <br />
        No. Rekening : <br />
        Uang Muka    : <br />
      </td>
      <td colspan="2">SUB TOTAL</td>
      <td colspan="2" align="right">Rp <?= $total_bayar_format; ?></td>
    </tr>
    <tr>
      <td colspan="2">PPN 10%</td>
      <td colspan="2" align="right">Rp <?= $pot_ppn_format; ?></td>
    </tr>
    <tr>
      <td colspan="2">Biaya Lainnya</td>
      <td colspan="2" align="right">Rp <?= number_format($jumlah_biaya_lain,2,",","."); ?></td>
    </tr>
    <tr>
      <td colspan="2">TOTAL</td>
      <td colspan="2" align="right">
        <br />
        Rp <?= number_format($po->totalbayar+$pot_ppn+$jumlah_biaya_lain,2,",","."); ?> </td>
    </tr>
    <tr>
      <td colspan="10"><b>Terbilang : </b></td>
    </tr>
    <tr>
      <td align="center" colspan="3" height="50">
        Menyetujui,<br />
        <br />
        <br />
        <br />
        <br />
        (Supplier)
      </td>
      <td align="center" colspan="3" height="50">
        Dibuat oleh,<br />
        <br />
        <br />
        <br />
        <br />
        (Purchasing)
      </td>
      <td align="center" colspan="4" height="50">
        Menyetujui,<br />
        <br />
        <br />
        <br />
        <br />
        (Direktur Pembelian)
      </td>
    </tr>
  </table>
  <small><b>Catatan : Mohon dicek kembali pesanan pembelian ini, apabila setuju tolong diteken dan dicap perusahaan/toko lalu difax kembali ke 021-7231819</b></small><br />
  <br />

  <small><i>Tgl Cetak <?= date("d/m/Y H:i:s"); ?> - Client <?= $this->input->ip_address(); ?> <?= $this->platform->agent(); ?></i></small><br />
  <small>Print generated by system</small>
</body>