<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SURAT KELUAR/<?php echo $surat['no_surat']; ?></title>
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

<body style="font-family: arial;">
    <div class="rangkasurat">
        <div class="p-3 table-responsive">
            <table width="100%" class="kepala table-sm small">
                <tr>
                    <td>
                        <img src="<?php echo asset("kiri.jpg") ?>" width="100">
                    </td>
                    <td class="tengah">
                        <h5 class="fw-bold">GERAKAN PRAMUKA KWARTIR DAERAH</h5>
                        <h3 class="fw-bold">DAERAH ISTIMEWA YOGYAKARTA</h3>
                        <p class="mt-2 fw-bold small">
                            Kompleks Bumi Perkemahan "Taman Tunas Wiguna"Babarsari, Caturtunggal, Depok, Sleman 55281
                        </p>
                        <p class="fw-bold small">
                            (0274) 485753 sekretariat@pramukadiy.or.id https://pramukadiy.or.id
                            
                        </p>
                    </td>
                    <td>
                        <img src="<?php echo asset("kanan.png") ?>" width="100">
                    </td>
                </tr>
            </table>
            <div class="row">
                <div class="col-6">
                    <table>
                        <tr>
                            <th>Nomor</th>
                            <td> : <?php echo $surat['no_surat']; ?>/1200-<?php echo $surat['kode_unit'] ?></td>
                        </tr>
                        <tr>
                            <th>Perihal</th>
                            <td> : <b><?php echo $surat['perihal']; ?></b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-6 text-end">
                    <p><?php echo date("d M Y",strtotime($surat['tanggal'])); ?></p>
                </div>
            </div>
            
            <div class="my-5">
                <p>
                    Kepada Yth. <br>
                    <b><?php echo $surat['tujuan']; ?></b> <br>
                    
                    <?php echo $surat['isi_surat']; ?>
                    
                    <br>
                    Demikian kami sampaikan, atas perhatian dan kerjasamanya, diucapkan terima kasih

                </p>
            </div>
            <div class="">
                <div class="row">
                    <div class=" col-6 mb-5">
                        <p>Kwartir Daerah Gerakan Pramuka <br> Daerah Istimewa Yogyakarta</p>
                        <p>Sekretaris</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>..........................</p>
                    </div>
                </div>
                <br>
                <p>
                    Tembusan ini disampaikan kepada : 
                    <ol>
                        <li>
                            Yth.Ketua Kwartir Daerah Gerakan Pramuka Daerah Istimewa Yogyakarta sebagai laporan.
                        </li>
                        <li>
                            <?php echo $surat['nama_unit']; ?>
                        </li>
                    </ol>
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        print();
    </script>
</body>
</html>