<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Verdana;
            font-size: 9px;
            font-style: normal;
            font-variant: normal;
            font-weight: 300;
            line-height: 10px;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }

        hr {
            margin-top: 0px;
            margin-bottom: 3px;
        }

        td {
            vertical-align: middle;
        }

        .singleborder {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table border="0">
        <tr>
            <td><img height="55px" src="<?= base_url(); ?>assets/img/msal.png" alt="" srcset=""></td>
            <td>
                <h2>PT. MULIA SAWIT AGRO LESTARI</h2>
                Jl. Radio Dalam Raya No. 87 A. RT. 005/RW.014 Gandaria Utara
                <br>Kebayoran Baru, Jakarta Selatan, DKI Jakarta Raya-12140
            </td>
            <td style="padding-left: 25%;">
                Putih&nbsp;&nbsp;&nbsp;&nbsp;: Finance HO <br>
                Merah &nbsp;: Accounting HO <br>
                Kuning : Gudang EST <br>
                Hijau &nbsp;&nbsp;&nbsp;: Accounting EST <br>
                Biru &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Purchasing HO
            </td>
        </tr>
    </table>
    <hr style="height: 3px; color: black;">
    <div style="text-align: center;">
        <h2> <u> Laporan Penerimaan Barang (LPB) Retur</u></h2>
        <h3>No LPB : <?= $retur->noref; ?></h3>
    </div>
    <br>
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td>Nama Supplier</td>
                <td>:</td>
                <td><?= $retur->nama_supply; ?></td>
                <td>Tanggal Pembuatan LPB :</td>
                <td><?= date_format(date_create($retur->tglinput), "d/m/Y"); ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td><?= $retur->lokasi_gudang; ?></td>
            </tr>
            <tr>
                <td>Departemen/Devisi</td>
                <td>:</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" border="1" class="singleborder">
        <thead style="text-align: center;">
            <tr>
                <td>No</td>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Qty</td>
                <td>Satuan</td>
                <td>Keterangan</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = "SELECT * FROM masukitem WHERE noref = '$retur->noref' AND refpo = '$retur->refpo'";
            $item_retur = $this->db_logistik_pt->query($query)->result();
            foreach ($item_retur as $list_lr) { ?>
                <tr>
                    <td style="text-align: center;"><?= $no++;?></td>
                    <td style="text-align: center;"><?= $list_lr->kodebar;?></td>
                    <td style="text-align: center;"><?= $list_lr->nabar;?></td>
                    <td style="text-align: center;"><?= $list_lr->qty;?></td>
                    <td style="text-align: center;"><?= $list_lr->satuan;?></td>
                    <td style="width: 25%;"><?= $list_lr->ket;?> </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <br><br>
    <table border="0" width="100%">
        <thead>
            <tr>
                <td style="text-align: center;">Diperiksa, <br><br><br><br><br>(___________________)</td>
                <td style="text-align: center;">Menyetujui, <br><br><br><br><br>(___________________)</td>
                <td style="text-align: center;">Penerima, <br><br><br><br><br>(___________________)</td>
                <td style="text-align: center;">Pengirim, <br><br><br><br><br>(___________________)</td>
            </tr>
        </thead>
    </table>
    <br>
    *NB : harap dikembalikan ke pemilik barang dan dibawa pada waktu penagihan <br>
    *Coret yang tidak perlu
    <br>
    <br>
    <small> <i> By System MIPS - dicetak : <?= date('d/m/Y H:i:s'); ?></i></small>
</body>

</html>