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
      background-color: black;
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
    <a class="btn" href="<?= site_url('pasien/tampildata1') ?>"><i class="fa fa-arrow-left"></i></a>
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

        <form action="<?= site_url('assessment_info/add_data') ?>" method="post" autocomplete="off">
          <?php csrf_field() ?>
          <input type="hidden" id="FORM" name="FORM" value="Form1">
          <td width="60%">
            <div class="row">
              <div class="col-5">
                <label>No RM</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="NO_REGISTRATION" id="NO_REGISTRATION" value="<?= $data['NO_REGISTRATION']; ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Nama Lengkap</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="THENAME" id="THENAME" value="<?= $data['THENAME']; ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Tanggal Lahir</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?= $data['DATE_OF_BIRTH']; ?>" readonly>
              </div>
              <div class="col-md-1">
                <label>Umur</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="text" name="AGEYEAR" id="AGEYEAR" value="<?= $data['AGEYEAR']; ?>Y <?= $data['AGEMONTH']; ?>M <?= $data['AGEDAY']; ?>D" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Jenis Kelamin</label><br>
              </div>
              <div class="col-2">
                <div class="form-input">
                  <input type="text" class="form-control" name="GENDER" id="GENDER" value="<?= $data['GENDER']; ?>" readonly>
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Alamat</label>
              </div>
              <div class="col-7">
                <textarea class="form-control" name="THEADDRESS" id="THEADDRESS" cols="6" rows="2" readonly><?= $data['THEADDRESS'] ?></textarea>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Dokter Penanggung Jawab Pasien</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="V_01" id="V_01">
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Ruangan</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="CLASS_ROOM_ID" id="CLASS_ROOM_ID" value="<?= $data['CLASS_ROOM_ID'] ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <label>Tanggal dan Pukul</label>
              </div>
              <div class="col-5">
                <input class="form-control" type="datetime-local" name="EXAMINATION_DATE" id="EXAMINATION_DATE" value="<?= $data['EXAMINATION_DATE'] ?>" readonly>
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
        <input class="form-control" type="text" name="V_02" id="V_02">
      </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <label>Penanggung Jawab *</label>
        <select class="form-control" name="T_01" id="T_01_penanggungjawab">
          <option selected>Pilih</option>
          <option value="1">Penerima Informasi</option>
          <option value="2">Pemberi Persetujuan</option>
        </select>
      </div>
      <div class="col-md-7">
        <label></label>
        <input class="form-control" type="text" name="V_03" id="V_03">
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
              <input class="form-control" type="text" name="V_04" id="V_04">
            </div>
          </td>
          <td class="text-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_02_diagnosiswddd" name="T_02" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Dasar Diagnosis</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_05" id="V_05">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_03_dasardiagnosis" name="T_03" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Tindakan Kedokteran</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_06" id="V_06">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_04_tindakankedokteran" name="T_04" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Indikasi Tindakan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" id="V_07" name="V_07">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_05_indikasitindakan" name="T_05" value="1">
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
              <input class="form-control" type="text" name="V_08" id="V_08">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_06_tipesedasi" name="T_06" value="1">
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
              <input class="form-control" type="text" name="V_09" id="V_09">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_07_uraiansingkat" name="T_07" value="2">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">6</th>
          <td>Tujuan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_10" id="V_10">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_08_tujuan" name="T_08" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">7</th>
          <td>Risiko</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_11" id="V_11">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_09_risiko" name="T_09" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">8</th>
          <td>Komplikasi</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="V_12" id="V_12">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_010_komplikasi" name="T_010" value="1">
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
              <input class="form-control" type="text" name="V_13" id="V_13">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_011_prognosisvital" name="T_011" value="1">
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
              <input class="form-control" type="text" name="V_14" id="V_14">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_012_prognosisfungsi" name="T_012" value="2">
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
              <input class="form-control" type="text" name="V_15" id="V_15">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_013_prognosiskesembuhan" name="T_013" value="3">
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
              <input class="form-control" type="text" name="V_16" id="V_16">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_014_pilihanpengobatan" name="T_014" value="1">
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
              <input class="form-control" type="text" name="V_17" id="V_17">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_015_perluasantindakan" name="T_015" value="1">
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
              <input class="form-control" type="text" name="V_18" id="V_18">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_016_konsultasiselamatindakan" name="T_016" value="2">
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
              <input class="form-control" type="text" name="V_19" id="V_19">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="T_017_resusitasi" name="T_017" value="3">
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
            Yang bertanda tangan dibawah ini, Saya, Nama <input type="text" id="V_20" name="V_20">
            Umur <input type="text" id="V_31" name="V_31">
            tahun,
            <input type="radio" class="form-check-input" id="T_019_lk" name="T_019" value="1">
            <label class="form-check-label" for="T_019_lk">Laki-laki</label>
            <input type="radio" class="form-check-input" id="T_019_pr" name="T_019" value="2">
            <label class="form-check-label" for="T_019_pr">Perempuan</label>,<br>
            Alamat <input type="text" id="v_21" name="v_21">
            dengan ini menyatakan <b>PERSETUJUAN</b> untuk dilakukannya tindakan <input type="text" id="v_22" name="v_22">
            terhadap <input type="radio" class="form-check-input" id="T_020_saya" name="T_020" value="1"> <label class="form-check-label" for="T_020_saya">Saya</label>
            /
            <input type="radio" class="form-check-input" id="T_020_atau" name="T_020" value="2"> <input type="text" id="V_23" name="V_23" disabled="disabled">
            saya bernama <input type="text" id="V_24" name="V_24" disabled="disabled">
            Umur <input type="text" id="T_021" name="T_021" disabled="disabled">
            tahun,
            <input type="radio" class="form-check-input" id="T_022_lk" name="T_022" disabled="disabled">
            <label class="form-check-label" for="T_022_lk">Laki-laki</label>
            <input type="radio" class="form-check-input" id="T_022_pr" name="T_022" disabled="disabled">
            <label class="form-check-label" for="T_022_pr">Perempuan</label>,<br>
            Alamat <input type="text" id="V_25" name="V_25" disabled="disabled">
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
          <p>Bengkulu, <input type="datetime-local" name="V_26" id="V_26"></p>
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
            <input type="text" name="V_27" id="V_27">
          </td>
          <td>
            <input type="text" name="V_28" id="V_28">
          </td>
          <td>
            <input type="text" name="V_29" id="V_29">
          </td>
          <td>
            <input type="text" name="V_30" id="V_30">
          </td>
        </tr>
      </table>

    </div>
    <div class="mb-3">
      <input type="submit" name="submit" class="btn form-control"></input>
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