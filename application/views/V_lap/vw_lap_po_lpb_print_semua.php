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
        <h4>TAHUN : 2020</h4>
    </div>
    <div style="text-align: right;">
        <small>Date : <?= date('d/m/Y'); ?></small><br>
        <small>Time : <?= date('h:i:s'); ?></small>
    </div>
    <br>
    <hr>
    <hr>
    <table roles="rows">
        <thead>
            <tr>
                <td>No</td>
                <td>Nomor PO</td>
                <td>Tanggal PO</td>
                <td>Nomor Ref. SPP</td>
                <td>Tanggal Ref. SPP</td>
                <td>Keterangan</td>
                <td>Kode - Nama Supplier</td>
                <td>Kode - Nama Pemesan</td>
                <td>Lokasi Pengiriman</td>
                <td colspan="2">Pembayaran</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PO 6100026</td>
                <td>02/07/2020</td>
                <td>EST-SPP/SWJ/04/20/00519</td>
                <td>20/04/2020</td>
                <td>U/ CANTER 125 STOCK GUDANG</td>
                <td>FUUTINDO UTAMAJAYA TEKNIK</td>
                <td>IRVAN</td>
                <td>HO</td>
                <td>CREDIT</td>
                <td>30</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td style="font-weight: bold;">Kode Barang</td>
                <td style="font-weight: bold;">Nama Barang</td>
                <td style="font-weight: bold;">Satuan</td>
                <td style="font-weight: bold;">Kuantitas</td>
                <td style="font-weight: bold;">Tgl LPB</td>
                <td style="font-weight: bold;">No LPB</td>
                <td style="font-weight: bold;">Qty Diterima</td>
                <td style="font-weight: bold;">Selisih</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="9"><hr></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>102505410000126</td>
                <td>PAD SET FR SUSP SPRING MR 631166</td>
                <td>PCS</td>
                <td>50</td>
                <td>01/08/2020</td>
                <td>6210304</td>
                <td>50.00</td>
                <td>0.00</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>102505410000153</td>
                <td>STOPER RR SUSP SPRING MB 161571</td>
                <td>PCS</td>
                <td>50</td>
                <td>01/08/2020</td>
                <td>6210304</td>
                <td>50.00</td>
                <td>0.00</td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>2</td>
                <td>PO 6100027</td>
                <td>02/07/2020</td>
                <td>EST-SPP/SWJ/04/20/00519</td>
                <td>20/04/2020</td>
                <td>U/ CANTER 125 STOCK GUDANG</td>
                <td>RAJWALI BENUA SAMUDRA, PT</td>
                <td>IRVAN</td>
                <td>HO</td>
                <td>CREDIT</td>
                <td>30</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td style="font-weight: bold;">Kode Barang</td>
                <td style="font-weight: bold;">Nama Barang</td>
                <td style="font-weight: bold;">Satuan</td>
                <td style="font-weight: bold;">Kuantitas</td>
                <td style="font-weight: bold;">Tgl LPB</td>
                <td style="font-weight: bold;">No LPB</td>
                <td style="font-weight: bold;">Qty Diterima</td>
                <td style="font-weight: bold;">Selisih</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="9"><hr></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>102505410000381</td>
                <td>BEARING RR WHELL HUB MB 161132</td>
                <td>PCS</td>
                <td>20.00</td>
                <td>01/08/2020</td>
                <td>6210307</td>
                <td>20.00</td>
                <td>0.00</td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>3</td>
                <td>PO 6100028</td>
                <td>02/07/2020</td>
                <td>EST-SPP/SWJ/04/20/00519</td>
                <td>20/04/2020</td>
                <td>U/ CANTER 125 STOCK GUDANG</td>
                <td>HOLINDO, CV</td>
                <td>IRVAN</td>
                <td>HO</td>
                <td>CREDIT</td>
                <td>30</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td style="font-weight: bold;">Kode Barang</td>
                <td style="font-weight: bold;">Nama Barang</td>
                <td style="font-weight: bold;">Satuan</td>
                <td style="font-weight: bold;">Kuantitas</td>
                <td style="font-weight: bold;">Tgl LPB</td>
                <td style="font-weight: bold;">No LPB</td>
                <td style="font-weight: bold;">Qty Diterima</td>
                <td style="font-weight: bold;">Selisih</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="9"><hr></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>102505410000293</td>
                <td>CABLE PARKING</td>
                <td>PCS</td>
                <td>5.00</td>
                <td>25/07/2020</td>
                <td>6210265</td>
                <td>5.00</td>
                <td>0.00</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>