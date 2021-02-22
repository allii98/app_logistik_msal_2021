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
            vertical-align: text-top;
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
        <h3>MONITORING PO VS LPB</h3>
        TAHUN : 2020
    </div>
    <br>
    <table border="0" width="100%">
        <thead>
            <tr>
                <td style="text-align: left;"><small><i><br> Belum LPB / Kurang</i></small></td>
                <td style="text-align: right;"><small><i>Date : <?= date('d/m/Y'); ?> <br> By System MIPS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Time : <?= date('H:i:s'); ?></i></small></td>
            </tr>
        </thead>
    </table>
    <hr>
    <hr>
    <table width="100%" rules="rows">
        <thead>
            <tr>
                <td>Nomor PO</td>
                <td>Tanggal PO</td>
                <td>Nama Supplier</td>
                <td>Nama Barang</td>
                <td>Merk / Jenis</td>
                <td>Pembayaran</td>
                <td>Qty PO</td>
                <td>Tgl LPB</td>
                <td>No LPB</td>
                <td>Qty LPB</td>
                <td>Selisih</td>
            </tr>
            <tr>
                <td colspan="11"><hr></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>EST/SWJ/JKT/07/20/6100035</td>
                <td>02/07/2020</td>
                <td>HALINDO, CV</td>
                <td>102505410000208 FILTER OLI ME01330T (PCS)</td>
                <td>GENUINE</td>
                <td>Credit 30 Hari</td>
                <td>80.00</td>
            </tr>
            <tr>
                <td colspan="11"><hr></td>
            </tr>
            <tr>
                <td>EST/SWJ/JKT/07/20/6100042</td>
                <td>02/07/2020</td>
                <td>BALIMAS MOTOR, CV</td>
                <td>102505410000114 METER ASSY COMB. MK 421128 (PCS)</td>
                <td>GENUINE</td>
                <td>Credit 30 Hari</td>
                <td>3.00</td>
            </tr>
            <tr>
                <td colspan="11"><hr></td>
            </tr>
            <tr>
                <td>EST/SWJ/JKT/07/20/6100042</td>
                <td>02/07/2020</td>
                <td>BALIMAS MOTOR, CV</td>
                <td>102505410000155 TANK ASSY RADTOR CONDENSOR ME 402050 (PCS)</td>
                <td>GENUINE</td>
                <td>Credit 30 Hari</td>
                <td>10.00</td>
            </tr>
            <tr>
                <td colspan="11"><hr></td>
            </tr>
            <tr>
                <td>EST/SWJ/JKT/07/20/6100061</td>
                <td>09/07/2020</td>
                <td>TAUFIK, TOKO</td>
                <td>102505930000010 PANCI (PCS)</td>
                <td>24 JAWA</td>
                <td>Cash 0 Hari</td>
                <td style="color: red;">80.00</td>
                <td>10/07/2020</td>
                <td>6210194</td>
                <td>56.00</td>
                <td style="color: red;">24.00</td>
            </tr>
        </tbody>
    </table>
</body>

</html>