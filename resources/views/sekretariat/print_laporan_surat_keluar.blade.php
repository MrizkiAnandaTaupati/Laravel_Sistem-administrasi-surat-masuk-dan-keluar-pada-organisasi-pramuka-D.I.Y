<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laporan Surat Masuk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

  <link rel="stylesheet" type="text/css" href="<?php echo asset("css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo asset("css/surat.css") ?>">
</head>             

    <!-- Tambahkan media query untuk cetak landscape -->
    <style type="text/css" media="print">
        @page {
            size: landscape;
        }

        /* Agar semua data dapat ditampilkan tanpa dipotong */
        table {
            width: 100%;
        }

        /* Hilangkan batasan lebar pada kolom */
        th, td {
            white-space: nowrap;
        }
    </style>  
<body style="font-family: arial;" class="mt-5">
    <h5 class="fw-bold text-center">KWARTIR DAERAH GERAKAN PRAMUKA DIY</h5>
    <h3 class="fw-bold text-center">DAERAH ISTIMEWA YOGYAKARTA</h3>
    <p class="mt-2 small text-center">
        Kompleks Bumi Perkemahan "Taman Tunas Wiguna"Babarsari, Caturtunggal, Depok, Sleman 55281
    </p>
    <hr>
    <h5 class="fw-bold text-center">Laporan Surat Masuk</h5>
    <h6 class="text-center">Periode : <?php echo date("d M Y",strtotime($mulai)) ?> - <?php echo date('d M Y',strtotime($selesai)) ?></h6>
	<table class="table table-bordered table-hover mt-2" id="laporan-surat-masuk">
    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Tanggal</th>
                            <th>Tujuan</th>
                            <th>Pengirim</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat_keluar as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            
                            <td><?php echo $value['no_surat']; ?>/1200-<?php echo $value['kode_unit'] ?></td>
                            <td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
                            <td><?php echo $value['tujuan']; ?></td>
                            <td><?php echo $value['nama_unit']; ?></td>
                            <td><?php echo $value["status_surat"]; ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
        <tfoot class="text-center">
            <th colspan="6">Jumlah</th>
            <th> <?php echo $keluar; ?> </th>
        </tfoot>
	</table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#laporan-surat-masuk').DataTable();
        });
    </script>
        <script type="text/javascript">
        print();
    </script>
</body>
</html>