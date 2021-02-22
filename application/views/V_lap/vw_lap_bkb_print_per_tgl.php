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
    PERIODE : <?= $tgl1; ?>-<?= $tgl2; ?>
    <?php
    foreach ($p_tgl as $lp_tgl) { ?>
        <table border="0" width="100%">
            <thead>
                <tr>
                    <td style="text-align: left;"><b>Tgl BKB : <?= date_format(date_create($lp_tgl->tgl), "d M Y") ?></b></td>
                    <td style="text-align: right;"><i>By System MIPS</i></td>
                </tr>
            </thead>
        </table>
        <table class="singleborder" width="100%" border="1">
            <thead style="text-align: center;">
                <tr>
                    <td rowspan="2" style="font-weight: bold; width: 5%;">No BKB</td>
                    <td rowspan="2" style="font-weight: bold; width: 10%;">Kode Barang</td>
                    <td rowspan="2" style="font-weight: bold; width: 17%;">Nama Barang</td>
                    <td rowspan="2" style="font-weight: bold; width: 3%;">Sat</td>
                    <td rowspan="2" style="font-weight: bold; width: 5%;">Qty</td>
                    <td style="font-weight: bold; width: 21%;" colspan="3">Alokasi</td>
                    <td rowspan="2" style="font-weight: bold; width: 10%;">Kode Beban</td>
                    <td rowspan="2" style="font-weight: bold; width: 16%;">Nama Beban</td>
                    <td rowspan="2" style="font-weight: bold; width: 13%;">Keterangan</td>
                </tr>
                <tr>
                    <td>AFD</td>
                    <td>Blok</td>
                    <td>Bagian/Devisi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $thisDate = date_format(date_create($lp_tgl->tgl),'Y-m-d');
                if($bag == 'HRD.-.UMUM') $bag = 'UMUM.-.HRD';
                $bag = str_replace('.',' ', $bag);
                $bag = str_replace('-','&', $bag);
                if ($bag == 'Semua') {
                    $q_bag = '';
                } else {
                    $q_bag = "AND b.bag = '$bag'";
                }
                $tgltxt1 = str_replace('/', '-', $tgl1);
                $tgltxt2 = str_replace('/', '-', $tgl2);
                $tgltxt1 = date_format(date_create($tgltxt1), "Y-m-d");
                $tgltxt2 = date_format(date_create($tgltxt2), "Y-m-d");
                
                $query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.tgl BETWEEN '$tgltxt1' AND '$tgltxt2' AND a.pt LIKE '%$lokasi%' $q_bag AND a.batal='0' AND a.tgl LIKE '%$thisDate%'";
                $bkb_tgl = $this->db_logistik_pt->query($query)->result();
                foreach ($bkb_tgl as $bt) { ?>
                    <tr>
                        <td><?= $bt->skb; ?></td>
                        <td><?= $bt->kodebar; ?></td>
                        <td><?= $bt->nabar; ?></td>
                        <td><?= $bt->satuan; ?></td>
                        <td style="text-align: right;"><?= number_format($bt->qty, 2); ?></td>
                        <td style="text-align: center;"><?= $bt->afd;?></td>
                        <td style="text-align: center;"><?= $bt->blok;?></td>
                        <td style="text-align: center;"><?= $bt->bag;?></td>
                        <td><?= $bt->kodebeban;?></td>
                        <td><?= $bt->ketsub;?></td>
                        <td><?= $bt->ket;?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</body>

</html>