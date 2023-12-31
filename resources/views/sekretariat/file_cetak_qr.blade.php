<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TRACKING SURAT/<?php echo $surat['no_surat']; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

    <link rel="stylesheet" type="text/css" href="<?php echo asset("css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset("css/surat.css") ?>">
</head>

<body style="font-family: arial;">

    <div class="container p-3">
        <div class="mb-3">
            <h1 class="fw-bold text-center">TRACKING SURAT KWARDA</h1>
            <br>
            <table>
                <tr>
                    <th>Nomor</th>
                    <td> :
                        <?php echo $surat['no_surat']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td> :
                        <?php echo date("d M Y",strtotime($surat['tanggal'])); ?>
                    </td>
                </tr>
                <tr>
                    <th>Lampiran</th>
                    <td> :
                        <?php echo $surat['lampiran']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Perihal</th>
                    <td> :
                        <?php echo $surat['perihal']; ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="visible-print text-center">
            {!! $qrcode !!}
            <p><br>Scan QRCode untuk melihat posisi surat.</p>
        </div>
    </div>

    <script type="text/javascript">
        print();
    </script>

</body>

</html>