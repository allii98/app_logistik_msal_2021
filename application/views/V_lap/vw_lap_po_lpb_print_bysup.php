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
    <h3 style="margin-bottom: 0;">PT. MULIA SAWIT AGRO LESTARI</h3>
    <h6 style="z-index: 0; margin-top: 5px;">JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>
    <div style="text-align: center;">
        <h1>MONITORING PO VS LPB</h1>
        <h3>TAHUN : 2020</h3>
    </div>
    <table border="0" width="100%">
        <tr>
            <td colspan="2" style="text-align: right;">Date : <?= date('d/m/Y'); ?></td>
        </tr>
        <tr>
            <td> <i> SORT BY SUPPLIER</i></td>
            <td style="text-align: right;"> <i> By System MIPS</i> &nbsp;&nbsp;&nbsp; Time : <?= date('h:i:s'); ?></td>
        </tr>
    </table>
    <hr>
    <table rules="rows" width="100%">
        <tbody>
            <tr style="background-color: #d6d6c2;">
                <td colspan="9">15 60-HOLINDO, CV</td>
            </tr>
            <tr>
                <td></td>
                <td>Kode Barang</td>
                <td>Nama Barang</td>
                <td>Satuan</td>
                <td>QTY</td>
                <td>Tgl LPB</td>
                <td>No. LPB</td>
                <td>QTY Diterima</td>
                <td>Selisih</td>
            </tr>
            <tr>
                <td colspan="9">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">02/07/2020 &nbsp; 6100028</td>
                <td>EST/SWJ/JKT07/20/6100028</td>
                <td colspan="6">Credit 30 <i>Hari</i></td>
            </tr>
           <tr>
                <td colspan="9"><hr></td>
            </tr>
            <tr>
                <td>1</td>
                <td>102505410000293</td>
                <td>CABLE PARKING BRAKE MK 599571</td>
                <td>PCS</td>
                <td>5.00</td>
                <td>25/07/2020</td>
                <td>6210265</td>
                <td>5.00</td>
                <td>0.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>102505410000742</td>
                <td>OIL SHEAL RR DIFf MH 034205</td>
                <td>PCS</td>
                <td>10.00</td>
                <td>25/07/2020</td>
                <td>6210265</td>
                <td>10.00</td>
                <td>0.00</td>
            </tr>
            <tr>
                <td colspan="9">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">02/07/2020 &nbsp; 6100035</td>
                <td>EST/SWJ/JKT07/20/6100035</td>
                <td colspan="6">Credit 30 <i>Hari</i></td>
            </tr>
           <tr>
                <td colspan="9"><hr></td>
            </tr>
        </tbody>
    </table>
</body>

</html>