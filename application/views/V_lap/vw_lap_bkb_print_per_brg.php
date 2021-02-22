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
    <h2 style="margin-bottom: 0;">PT. MULIA SAWIT AGRO LESTARI</h2>
    <h5 style="margin-top: 5px;"> JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, Kebayoran Baru, Jakarta Selatan, DKI Jakarta Raya - 12140</h5>
    <div style="text-align: center;">
        <h3><u>REGISTER KELUAR BARANG (BKB)</u></h3>
    </div>
    <br>
    PERIODE : <?= date_format(date_create($tgl1), "d/m/Y") . ' - ' . date_format(date_create($tgl2), "d/m/Y"); ?>
    <?php foreach ($bkb_brg as $bb) { ?>
        <table border="0" width="100%">
            <thead>
                <tr>
                    <td style="text-align: left;"><b><?= $bb->kodebar . ' - ' . $bb->nabar . ' (' . $bb->satuan . ')'; ?></b></td>
                </tr>
            </thead>
        </table>
        <table class="singleborder" width="100%" border="1">
            <thead style="text-align: center;">
                <tr>
                    <td style="font-weight: bold; width: 7%;">Tgl</td>
                    <td style="font-weight: bold; width: 8%;">No BKB</td>
                    <td style="font-weight: bold; width: 10%;">Bagian</td>
                    <td style="font-weight: bold; width: 7%;">Qty</td>
                    <td style="font-weight: bold; width: 10%;">Kode PT/ Devisi</td>
                    <td style="font-weight: bold; width: 5%;">AFD</td>
                    <td style="font-weight: bold; width: 5%;">Blok</td>
                    <td style="font-weight: bold; width: 12%;">Kode Beban</td>
                    <td style="font-weight: bold; width: 21%;">Nama Beban</td>
                    <td style="font-weight: bold; width: 15%;">Keterangan</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                $bagian = $bb->bag;
                if ($bagian == 'Semua') {
                    $q_bag = '';
                } else {
                    $q_bag = "AND b.bag = '" . $bagian . "'";
                }
                $query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND kodebar = '$bb->kodebar' AND  a.periode BETWEEN '$tgl1' AND '$tgl2' AND a.batal = '0' AND a.pt LIKE '%$lokasi%' $q_bag";
                $per_brg = $this->db_logistik_pt->query($query)->result();
                foreach ($per_brg as $list_per_brg) {
                    $total += $list_per_brg->qty;
                ?>
                    <tr>
                        <td style="text-align: center;"><?= date_format(date_create($list_per_brg->tgl), "d/m/Y"); ?></td>
                        <td style="text-align: center;"><?= $list_per_brg->skb; ?></td>
                        <td style="text-align: center;"><?= $list_per_brg->bag; ?></td>
                        <td style="text-align: right;"><?= number_format($list_per_brg->qty, 2); ?></td>
                        <td style="text-align: center;"><?= $list_per_brg->kodept; ?></td>
                        <td style="text-align: center;"><?= $list_per_brg->afd; ?></td>
                        <td style="text-align: center;"><?= $list_per_brg->blok; ?></td>
                        <td style="text-align: center;"><?= $list_per_brg->kodebeban; ?></td>
                        <td><?= $list_per_brg->ketsub; ?></td>
                        <td><?= $list_per_brg->ket; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="2"></td>
                    <td style="text-align: left; background-color: grey;">Total</td>
                    <td style="text-align: right; background-color: grey;"><?= number_format($total, 2) ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>