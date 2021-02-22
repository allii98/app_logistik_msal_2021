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
    <?php foreach ($bt as $b) { ?>
        <table border="0" width="100%">
            <thead>
                <tr>
                    <td style="text-align: left;"><b> PERIODE : <?= $periode; ?> </b><br>
                        <b>Devisi : <?= $dev; ?></b><br>
                        <?php if ($bagian == 'TANAMAN' || $bagian == 'TANAMAN UMUM') { ?>
                            <b>AFD : <?= $b->afd; ?></b>
                        <?php } else { ?>
                            <b>Bagian : <?= $bagian; ?></b>
                        <?php } ?>
                    </td>
                    <td style="text-align: right;"><br><br><i>By System MIPS</i></td>
                </tr>
            </thead>
        </table>
        <br>
        <table width="100%" border="1" class="singleborder">
            <thead style="text-align: center;">
                <tr>
                    <td style="text-align: center; font-weight: bold; width: 5%;">Blok</td>
                    <td style="text-align: center; font-weight: bold; width: 8%;">Tgl</td>
                    <td style="text-align: center; font-weight: bold; width: 8%;">No. BKB</td>
                    <td style="text-align: center; font-weight: bold; width: 5%;">Sat</td>
                    <td style="text-align: center; font-weight: bold; width: 10%;">Qty</td>
                    <td style="text-align: center; font-weight: bold; width: 10%;">Nominal (Rp)</td>
                    <td style="text-align: center; font-weight: bold; width: 14%;">Kode Beban</td>
                    <td style="text-align: center; font-weight: bold; width: 20%;">Nama Beban</td>
                    <td style="text-align: center; font-weight: bold; width: 20%;">Keterangan</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($bagian == 'TANAMAN' || $bagian == 'TANAMAN UMUM') {
                    $query = "SELECT DISTINCT a.kodebar, a.nabar, a.satuan, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.pt = '$dev' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = '$bagian' AND a.afd ='$b->afd' ORDER BY a.nabar ASC";
                } else {
                    $query = "SELECT DISTINCT a.kodebar, a.nabar, a.satuan, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.pt = '$dev' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = '$bagian' ORDER BY a.nabar ASC";
                }
                $no = 1;
                $btn = $this->db_logistik_pt->query($query)->result();
                foreach ($btn as $bn) { ?>
                    <tr>
                        <td colspan="9"><b><?= $bn->kodebar; ?> &nbsp;&nbsp;&nbsp; <?= $bn->nabar; ?></b></td>
                    </tr>
                    <?php
                    if ($bagian == 'TANAMAN' || $bagian == 'TANAMAN UMUM') {
                        $query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.kodebar = '$bn->kodebar' AND a.NO_REF = b.NO_REF AND a.pt = '$dev' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = '$bagian' AND a.afd ='$b->afd'";
                    } else {
                        $query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.kodebar = '$bn->kodebar' AND a.NO_REF = b.NO_REF AND a.pt = '$dev' AND a.periode BETWEEN '$p1' AND '$p2' AND a.batal = '0' AND b.bag = '$bagian'";
                    }
                    $bpr = $this->db_logistik_pt->query($query)->result();
                    $query1 = "SELECT HARGAPORAT FROM stockawal WHERE kodebar = '$bn->kodebar' AND satuan = '$bn->satuan' AND periode  BETWEEN '$p1' AND '$p2' ORDER BY periode DESC LIMIT 1";
                    $bsa = $this->db_logistik_pt->query($query1)->row();
                    $t_qty = 0;
                    $t_hrg = 0;
                    foreach ($bpr as $bp) {
                        $t_qty += $bp->qty;
                        $t_hrg += ($bsa->HARGAPORAT * $bp->qty);
                    ?>
                        <tr>
                            <td style="text-align: center;"><?= $bp->blok; ?></td>
                            <td style="text-align: center;"><?= date_format(date_create($bp->tgl), 'd/m/Y'); ?></td>
                            <td style="text-align: center;"><?= $bp->skb; ?></td>
                            <td style="text-align: center;"><?= $bp->satuan; ?></td>
                            <td style="text-align: right;"><?= number_format($bp->qty, 2); ?></td>
                            <td style="text-align: right;"><?= number_format(($bsa->HARGAPORAT * $bp->qty), 2); ?></td>
                            <td style="text-align: center;"><?= $bp->kodesub; ?></td>
                            <td style="text-align: left;"><?= $bp->ketsub; ?></td>
                            <td style="text-align: left;"><?= $bp->ket; ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="4"> <b>Total :</b></td>
                        <td style="text-align: right;"> <b><?= number_format($t_qty, 2); ?></b></td>
                        <td style="text-align: right;"> <b><?= number_format($t_hrg, 2); ?></b></td>
                        <td colspan="3"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>