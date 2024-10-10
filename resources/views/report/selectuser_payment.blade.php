<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select User Payment Report</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            position: relative;
        }
        .header-section {
            width: 100%;
            position: relative;
            margin-bottom: 20px;
        }
        .left-info, .right-info {
            width: 48%;
            position: absolute;
        }
        .left-info {
            top: 0;
            left: 40;
            text-align: left;
        }
        .right-info {
            top: 0;
            left: 290;
            text-align: left;
        }
        .left-info p, .right-info p {
            margin: 0;
        }
        h1 {
            text-align: center;
            margin-top: 90px;
        }
        .table-section {
            margin-bottom: 20px;
            margin-top: 90px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            height: 40px;
        }
        th {
            padding: 4px;  
        }
        .footer {
            text-align: right;
            margin-top: 40px;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer .signature {
            margin-top: 50px;
        }
        .notes {
            margin-top: 20px;
            font-size: 12px;
        }
        td {
            height: 80px;  
            padding: 10px;  
        }
        .directur {
            position: absolute;
            left: 420;
            text-align: right;
        }
        .novi-setia-nurviat {
            left: 180;
            text-align: right;
        }

        /* CSS untuk cetakan */
        @media print {
            .page-break {
                page-break-before: always; /* Memulai halaman baru */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Informasi Header untuk Raisya -->
        <div class="header-section">
            <div class="left-info">
                <p><strong>Nama:</strong> Raisya Wulannari</p>
                <p><strong>NIS/NIM:</strong> 211082038</p>
                <p><strong>Asal:</strong> Politeknik Negeri Padang</p>
            </div>
            <div class="right-info">
                <p><strong>Periode:</strong> 2023</p>
                <p><strong>Awal Prakerin:</strong> Januari</p>
                <p><strong>Akhir Prakerin:</strong> Desember</p>
            </div>
        </div>

        <div class="table-section">
            <table>
                <tr>
                    <th>Januari</th>
                    <th>Februari</th>
                    <th>Maret</th>
                </tr>
                <tr>
                    <td>05-01-2024</td>
                    <td>05-02-2024</td>
                    <td>05-03-2024</td>
                </tr>
                <tr>
                    <th>April</th>
                    <th>Mei</th>
                    <th>Juni</th>
                </tr>
                <tr>
                    <td>05-04-2024</td>
                    <td>05-05-2024</td>
                    <td>05-06-2024</td>
                </tr>
                <tr>
                    <th>Juli</th>
                    <th>Agustus</th>
                    <th>September</th>
                </tr>
                <tr>
                    <td>05-07-2024</td>
                    <td>05-08-2024</td>
                    <td>05-09-2024</td>
                </tr>
                <tr>
                    <th>Oktober</th>
                    <th>November</th>
                    <th>Desember</th>
                </tr>
                <tr>
                    <td>05-10-2024</td>
                    <td>05-11-2024</td>
                    <td>05-12-2024</td>
                </tr>
            </table>
        </div>
    </body>

    <body>
          <!-- Memaksa pemisahan halaman -->
          <div class="page-break"></div>
        <div>
            <!-- Informasi Header untuk Jesica -->
        <div class="header-section">
            <div class="left-info">
                <p><strong>Nama:</strong> Jesica</p>
                <p><strong>NIS/NIM:</strong> 211082038</p>
                <p><strong>Asal:</strong> Politeknik Negeri Padang</p>
            </div>
            <div class="right-info">
                <p><strong>Periode:</strong> 2023</p>
                <p><strong>Awal Prakerin:</strong> Januari</p>
                <p><strong>Akhir Prakerin:</strong> Desember</p>
            </div>
        </div>

        <div class="table-section">
            <table>
                <tr>
                    <th>Januari</th>
                    <th>Februari</th>
                    <th>Maret</th>
                </tr>
                <tr>
                    <td>05-01-2024</td>
                    <td>05-02-2024</td>
                    <td>05-03-2024</td>
                </tr>
                <tr>
                    <th>April</th>
                    <th>Mei</th>
                    <th>Juni</th>
                </tr>
                <tr>
                    <td>05-04-2024</td>
                    <td>05-05-2024</td>
                    <td>05-06-2024</td>
                </tr>
                <tr>
                    <th>Juli</th>
                    <th>Agustus</th>
                    <th>September</th>
                </tr>
                <tr>
                    <td>05-07-2024</td>
                    <td>05-08-2024</td>
                    <td>05-09-2024</td>
                </tr>
                <tr>
                    <th>Oktober</th>
                    <th>November</th>
                    <th>Desember</th>
                </tr>
                <tr>
                    <td>05-10-2024</td>
                    <td>05-11-2024</td>
                    <td>05-12-2024</td>
                </tr>
            </table>
        </div>
        </div>

              <!-- Footer dengan tanda tangan -->
              <div class="footer">
            <p>PT. Inovindo Digital Media</p>
            <div class="signature">
                <p class="novi-setia-nurviat">Novi Setia Nurviat, S.Si</p>
                <p class="directur">Direktur</p>
            </div>
        </div>

        <!-- Catatan Pembayaran -->
        <div class="notes">
            <p>✔ Pembayaran setiap tanggal 05 paling lambat akhir bulan di tanggal 25.</p>
            <p>✔ Setiap melakukan pembayaran kartu harap dibawa.</p>
        </div>
    </div>
</html>
    </body>

      

        

  
