<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Formulir Persetujuan Tindakan Kedokteran</title>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>jQuery UI Signature Basics</title>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">
  <style>
    .kbw-signature {
      width: 150px;
      height: 75px;
    }
  </style>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

  <!-- Signature1 Function -->
  <script>
    $(function() {
      var sig = $('#sig').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature2 Function -->
  <script>
    $(function() {
      var sig = $('#sig1').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature3 Function -->
  <script>
    $(function() {
      var sig = $('#sig2').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature4 Function -->
  <script>
    $(function() {
      var sig = $('#sig3').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature5 Function -->
  <script>
    $(function() {
      var sig = $('#sig4').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature6 Function -->
  <script>
    $(function() {
      var sig = $('#sig5').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Style btn submit & back -->
  <style>
    .btn {
      background-color: green;
      /* Blue background */
      border: none;
      /* Remove borders */
      color: white;
      /* White text */
      padding: 12px 16px;
      /* Some padding */
      font-size: 16px;
      /* Set a font size */
      cursor: pointer;
      /* Mouse pointer on hover */
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
  </style>
  <!-- function1 -->
  <script type="text/javascript">
    $(function f1() {
      $("input[name='T_020']").click(function f1() {
        if ($("#T_020_atau").is(":checked")) {
          $("#V_23").removeAttr("disabled");
          $("#V_24").removeAttr("disabled");
          $("#T_021").removeAttr("disabled");
          $("#T_022_lk").removeAttr("disabled");
          $("#T_022_pr").removeAttr("disabled");
          $("#V_25").removeAttr("disabled");
          $("#V_23").focus();
        } else {
          $("#T_022_lk").attr("disabled", true);
          $("#T_022_lk").prop("checked", false);
          $("#T_022_pr").attr("disabled", true);
          $("#T_022_pr").prop("checked", false);
          $("#V_23").attr("disabled", true);
          $("#V_23").val("");
          $("#V_24").attr("disabled", true);
          $("#V_24").val("");
          $("#V_25").attr("disabled", true);
          $("#V_25").val("");
          $("#T_021").attr("disabled", true);
          $("#T_021").val("");

        }
      });
    });
  </script>

</head>

<body>

  <div class="container mt-3">
    <a class="btn" href="<?= site_url('pasien/halamandata') ?>"><i class="fa fa-arrow-left"></i></a>
    <div style="text-align: right;">
      <h2>RM 08</h2>
    </div>

    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td width="40%">
          <br>
          <br>
          <br>
          <br>
          <br>
          <h2 class="text-center mb-5">FORMULIR PERSETUJUAN TINDAKAN DOKTER</h2>
        </td>

        <form action="<?= site_url('assessment_info/detail1') ?>" method="post" autocomplete="off">
          <?php csrf_field() ?>
          <input type="hidden" id="FORM" name="FORM" value="Form1">
          <td width="60%">
            <div class="row">
              <div class="col-5">
                <label>No RM</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="NO_REGISTRATION" id="NO_REGISTRATION" value="<?= $detail['NO_REGISTRATION']; ?>" readonly>

              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Nama Lengkap</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="THENAME" id="THENAME" value="<?= $detail['THENAME']; ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Tanggal Lahir</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?= $detail['DATE_OF_BIRTH']; ?>" readonly>
              </div>
              <div class="col-md-1">
                <label>Umur</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="text" name="AGEYEAR" id="AGEYEAR" value="<?= $detail['AGEYEAR']; ?>Y <?= $detail['AGEMONTH']; ?>M <?= $detail['AGEDAY']; ?>D" readonly>
                <input type="hidden" id="AGEMONTH" name="AGEMONTH" value="<?php echo $detail['AGEMONTH']  ?>">
                <input type="hidden" id="AGEDAY" name="AGEDAY" value="<?php echo $detail['AGEDAY']  ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Jenis Kelamin</label><br>
              </div>
              <div class="col-2">
                <div class="form-input">
                  <input type="text" class="form-control" name="GENDER" id="GENDER" value="<?= $detail['GENDER']; ?>" readonly>
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Alamat</label>
              </div>
              <div class="col-7">
                <textarea class="form-control" name="THEADDRESS" id="THEADDRESS" cols="6" rows="2" readonly><?= $detail['THEADDRESS'] ?></textarea>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Dokter Penanggung Jawab Pasien</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="V_01" id="V_01" value="<?= $detail['V_01']; ?>" readonly>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Ruangan</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="CLASS_ROOM_ID" id="CLASS_ROOM_ID" value="<?= $detail['CLASS_ROOM_ID'] ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <label>Tanggal dan Pukul</label>
              </div>
              <div class="col-5">
                <input class="form-control" type="datetime-local" name="EXAMINATION_DATE" id="EXAMINATION_DATE" value="<?= $detail['EXAMINATION_DATE'] ?>" readonly>
              </div>
            </div>

          </td>
      </tr>
    </table>
    <div>
      <h3 class="text-center">Pemberian Informasi</h3>
    </div>
    <div class="row">
      <div class="col-md-5">
        <label>Dokter Pelaksana Tindakan</label>
      </div>
      <div class="col-7">
        <input class="form-control" type="text" name="V_02" id="V_02" value="<?= $detail['V_02'] ?>" readonly>
      </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <label>Penanggung Jawab *</label>
        <select class="form-control" name="T_01" id="T_01" disabled>
          <?php
          $detail['T_01'] = ($detail['T_01'] == 'Penerima Informasi' ? 'selected' : '');
          echo "<option value='1' " . $detail['T_01'] . ">Penerima Informasi</option>";
          $detail['T_01'] = ($detail['T_01'] == 'Pemberi Persetujuan' ? 'selected' : '');
          echo "<option value='2' " . $detail['T_01'] . ">Pemberi Persetujuan</option>";
          ?>
        </select>
      </div>
      <div class="col-md-7">
        <label></label>
        <input class="form-control" type="text" name="V_03" id="V_03" value="<?= $detail['V_03'] ?>" readonly>
      </div>
    </div>

    <table class="table table-bordered mt-3" style="border: 1px solid black;">
      <thead>
        <tr>
          <td width="5%"></td>
          <td width="35%"></td>
          <td width="45%"></td>
          <td width="15%"></td>
        </tr>
        <tr>
          <th scope="col" style="text-align: center;">No</th>
          <th scope="col">Jenis Informasi</th>
          <th scope="col" style="text-align: center;">Isi Informasi</th>
          <th scope="col" style="text-align: center;">Tanda (v)</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Diagnosis (WD & DD)</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_04" id="V_04" value="<?= $detail['V_04'] ?>" readonly>
            </div>
          </td>
          <td class="text-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_02" name="T_02" <?= ($detail['T_02'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Dasar Diagnosis</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_05" id="V_05" value="<?= $detail['V_05'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_03_dasardiagnosis" name="T_03" <?= ($detail['T_03'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Tindakan Kedokteran</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_06" id="V_06" value="<?= $detail['V_06'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_04_tindakankedokteran" name="T_04" <?= ($detail['T_04'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Indikasi Tindakan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" id="V_07" name="V_07" value="<?= $detail['V_07'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_05_indikasitindakan" name="T_05" <?= ($detail['T_05'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
        <tr>

        <tr>
          <th scope="row">5</th>
          <td>
            <h6>Tata Cara :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Tipe Sedasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_08" id="V_08" value="<?= $detail['V_08'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_06_tipesedasi" name="T_06" <?= ($detail['T_06'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Uraian singkat prosedur dan <br>Tahapan yang penting</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_09" id="V_09" value="<?= $detail['V_09'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_07_uraiansingkat" name="T_07" <?= ($detail['T_07'] == "2" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">6</th>
          <td>Tujuan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_10" id="V_10" value="<?= $detail['V_10'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_08_tujuan" name="T_08" <?= ($detail['T_08'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">7</th>
          <td>Risiko</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_11" id="V_11" value="<?= $detail['V_11'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_09_risiko" name="T_09" <?= ($detail['T_09'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">8</th>
          <td>Komplikasi</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_12" id="V_12" value="<?= $detail['V_12'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_010_komplikasi" name="T_010" <?= ($detail['T_010'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">9</th>
          <td>
            <h6>Prognosis :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Prognosis Vital</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_13" id="V_13" value="<?= $detail['V_13'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_011_prognosisvital" name="T_011" <?= ($detail['T_011'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Prognosis Fungsi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_14" id="V_14" value="<?= $detail['V_14'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_012_prognosisfungsi" name="T_012" <?= ($detail['T_012'] == "2" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>

            <p>Prognosis Kesembuhan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_15" id="V_15" value="<?= $detail['V_15'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_013_prognosiskesembuhan" name="T_013" <?= ($detail['T_013'] == "3" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">10</th>
          <td>
            <h6>Alternatif dan Risiko</h6>
            <p>Pilihan Pengobatan/Penatalaksanaan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_16" id="V_16" value="<?= $detail['V_16'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_014_pilihanpengobatan" name="T_014" <?= ($detail['T_014'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">11</th>
          <td>
            <h6>Hal lain yang akan dilakukan untuk :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Perluasan Tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_17" id="V_17" value="<?= $detail['V_17'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_015_perluasantindakan" name="T_015" <?= ($detail['T_015'] == "1" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Konsultasi selama tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_18" id="V_18" value="<?= $detail['V_18'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_016_konsultasiselamatindakan" name="T_016" <?= ($detail['T_016'] == "2" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Resusitasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_19" id="V_19" value="<?= $detail['V_19'] ?>" readonly>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_017_resusitasi" name="T_017" <?= ($detail['T_017'] == "3" ? 'checked' : ''); ?> disabled>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td>
          <p>Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas,
            dan memberikan kesempatan untuk bertanya dan berdiskusi
          </p>
        </td>
        <td>
          <p>Tanda Tangan</p>
          <div id="sig"></div>
        </td>
      </tr>
      <tr>
        <td>
          <p>Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana diatas
            kemudian yang saya berikan tanda paraf di kolom kanannya, dan telah memahaminya
          </p>
        </td>
        <td>
          <p>Tanda Tangan</p>
          <div id="sig1"></div>
        </td>
      </tr>
      <tr>
        <th>* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</th>
        <td></td>
      </tr>
    </table>


    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td>
          <h5 class="text-center">PERSETUJUAN TINDAKAN KEDOKTERAN</h5>
        </td>
      </tr>
      <tr>
        <td>
          <p>
            Yang bertanda tangan dibawah ini, Saya, Nama <input type="text" id="V_20" name="V_20" value="<?= $detail['V_20'] ?>" readonly>
            Umur <input type="text" id="V_31" name="V_31" value="<?= $detail['V_31'] ?>" readonly>
            tahun,
            <input type="radio" class="form-check-input" id="T_018_lk" name="T_018" <?= ($detail['T_018'] == "1" ? 'checked' : ''); ?> disabled>
            <label class="form-check-label" for="T_019_lk">Laki-laki</label>
            <input type="radio" class="form-check-input" id="T_018_pr" name="T_018" <?= ($detail['T_018'] == "2" ? 'checked' : ''); ?> disabled>
            <label class="form-check-label" for="T_019_pr">Perempuan</label>,<br>
            Alamat <input type="text" id="V_21" name="V_21" value="<?= $detail['V_21'] ?>" readonly>
            dengan ini menyatakan <b>PERSETUJUAN</b> untuk dilakukannya tindakan <input type="text" id="V_22" name="V_22" value="<?= $detail['V_22'] ?>" readonly>
            terhadap <input type="radio" class="form-check-input" id="T_020_saya" name="T_020" <?= ($detail['T_020'] == "1" ? 'checked' : ''); ?> disabled> <label class="form-check-label" for="T_020_saya">Saya</label>






            /





            <input type="radio" class="form-check-input" id="T_020_atau" name="T_020" <?= ($detail['T_020'] == "2" ? 'checked' : ''); ?> disabled> <input type="text" id="V_23" name="V_23" value="<?= $detail['V_23'] ?>" readonly>
            saya bernama <input type="text" id="V_24" name="V_24" value="<?= $detail['V_24'] ?>" readonly>
            Umur <input type="text" id="V_32" name="V_32" value="<?= $detail['V_32'] ?>" readonly>
            tahun,
            <input type="radio" class="form-check-input" id="T_022_lk" name="T_022" <?= ($detail['T_022'] == "1" ? 'checked' : ''); ?> disabled>
            <label class="form-check-label" for="T_022_lk">Laki-laki</label>
            <input type="radio" class="form-check-input" id="T_022_pr" name="T_022" <?= ($detail['T_022'] == "2" ? 'checked' : ''); ?> disabled>
            <label class="form-check-label" for="T_022_pr">Perempuan</label>,<br>
            Alamat <input type="text" id="V_25" name="V_25" value="<?= $detail['V_25'] ?>" readonly>
          </p>
          <p>
            Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti diatas kepada saya termasuk risiko dan komplikasi yang mungkin timbul.
            Saya juga menyadari bahwa dokter melakukan suatu upaya dan oleh karena ilmu kedokteran bukanlah ilmu pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.
          </p>
        </td>
      </tr>
    </table>

    <div class="container mt-5">
      <table class="table text-center">
        <tr>
          <p>Bengkulu, <input type="datetime-local" name="V_26" id="V_26" value="<?= $detail['V_26'] ?>" readonly></p>
        </tr>
        <tr>
          <td>Yang Menyatakan</td>
          <td>Dokter</td>
          <td>Saksi 1</td>
          <td>Saksi 2</td>
        </tr>
        <tr>
          <td>
            <div id="sig2"></div>
          </td>
          <td>
            <div id="sig3"></div>
          </td>
          <td>
            <div id="sig4"></div>
          </td>
          <td>
            <div id="sig5"></div>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="V_27" id="V_27" value=" <?= $detail['V_27'] ?>" readonly">
          </td>
          <td>
            <input type="text" name="V_28" id="V_28" value="<?= $detail['V_28'] ?>" readonly>
          </td>
          <td>
            <input type="text" name="V_29" id="V_29" value="<?= $detail['V_29'] ?>" readonly>
          </td>
          <td>
            <input type="text" name="V_30" id="V_30" value="<?= $detail['V_30'] ?>" readonly>
          </td>
        </tr>
      </table>

    </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>