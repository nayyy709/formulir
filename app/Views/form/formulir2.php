<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Pengkajian Pra Pembedahan</title>

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
  <!-- Signature1 -->
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
  <!-- Style submit & back -->
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
</head>

<body>
  <div class="container mt-3">
    <a class="btn" href="<?= site_url('pasien/tampildata2') ?>"><i class="fa fa-arrow-left"></i></a>
    <div style="text-align: right;">
      <h2>RM 10</h2>
    </div>
    <table class="table table-bordered mb-0" style="border: 1px solid black;">
      <tr>
        <td width="40%">
          <br>
          <br>
          <h2 class="text-center mb-5">PENGKAJIAN PRA PEMBEDAHAN</h2>
        </td>
        <form action="<?= site_url('assessment_info/add_data') ?>" method="post" autocomplete="off">
          <?php csrf_field() ?>
          <input type="hidden" id="FORM" name="FORM" value="Form2">
          <td width="60%">
            <div class="row align-items-center">
              <div class="col-4">
                <label>No. RekamMedis :</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" name="NO_REGISTRATION" id="NO_REGISTRATION" value="<?= $data['NO_REGISTRATION']; ?>" readonly>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Nama Lengkap,(Nama Keluarga) :</label>
              </div>
              <div class="col-4">
                <input class="form-control" type="text" name="THENAME" id="THENAME" value="<?= $data['THENAME']; ?>" readonly>
              </div>
              <div class="col-3">
                <input class="form-control" type="text" name="ALLOANAMNESIS_CONTACT" id="ALLOANAMNESIS_CONTACT" value="<?= $data['ALLOANAMNESIS_CONTACT']; ?>" readonly>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-4">
                <label>Tanggal Lahir :</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?= $data['DATE_OF_BIRTH']; ?>" readonly>
              </div>
              <div class="col-2">
                <label>JenisKelamin</label><br>
              </div>
              <div class="col-2">
                <input type="text" class="form-control" name="GENDER" id="GENDER" value="<?= $data['GENDER']; ?>" readonly>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-4">
                <label>Ruangan :</label>
              </div>
              <div class="col-8">
                <input class="form-control" type="text" name="CLASS_ROOM_ID" id="CLASS_ROOM_ID" value="<?= $data['CLASS_ROOM_ID']; ?>" readonly>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-4">
                <form action="upload_img" method="post" enctype="multipart/form-data">
                  <label>(stikerpasien)</label>
              </div>
              <div class="col-8">
                <input type="file" name="upload" id="upload">
                <input type="submit" name="upload" value="Submit">
              </div>
            </div>
          </td>
      </tr>
    </table>

    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td>
          <div class="row align-items-center">
            <div class="col-4">
              <label>1. Anamnesa (*)</label>
            </div>
            <div class="col-8">
              <textarea class="form-control" name="ANAMNASE" id="ANAMNASE" cols="6" rows="2" readonly><?= $data['ANAMNASE']; ?></textarea>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label>2. Pemeriksaan (*)</label>
            </div>
            <div class="col-8">
              <textarea class="form-control" name="PEMERIKSAAN" id="PEMERIKSAAN" cols="6" rows="3" readonly><?= $data['PEMERIKSAAN']; ?></textarea>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col">
              <label>3. PemeriksaanPenunjang (*)</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Laboratorium :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_02" id="V_02">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. USG :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_03" id="V_03">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. CT Scan/MRI/MRCP/Rontgen :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_04" id="V_04">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Lain-lain :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_05" id="V_05">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label>4. Diagnosa pre anestesi :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_06" id="V_06">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col">
              <label>5. Rencana Operasi</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Tindakan/Prosedur :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_07" id="V_07">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Waktu:</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="time" name="V_08" id="V_08">
            </div>
            <div class="col-1">
              <label>Tempat</label>
            </div>
            <div class="col-5">
              <input class="form-control" type="text" name="V_09" id="V_09">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">6. Alternatif :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_10" id="V_10">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">7. Resiko dan rencana prosedur operasi :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_11" id="V_11">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">8. Potensial Komplikasi :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_12" id="V_12">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">9. Keuntungan dari prosedur operasi ini :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_13" id="V_13">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-4">
              <label class="align-items-center">10. Transfusi(optional) :</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_14" id="V_14">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col">
              <label class="align-items-center">11. Catatan</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.Telah dijelaskan kepada</label>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-1">
              <label class="align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.Sebagai</label>
            </div>
            <div class="col-2">
              <select class="form-select" id="T_01_sebagai" name="T_01">
                <option selected>Pilih</option>
                <option value="1">Pasien</option>
                <option value="2">Wali</option>
                <option value="3">Keluarga</option>
              </select>
            </div>
            <div class="col-1">
              <label class="align-items-center">,hubungan</label>
            </div>
            <div class="col-8">
              <input class="form-control" type="text" name="V_15" id="V_15">
            </div>
          </div>


          <div class="row align-items-center">
            <div class="col">
              <label>&nbsp;&nbsp;&nbsp;&nbsp;c.Tentang diagnosis,rencana operasi,berikut resiko,alernatif,komplikasi keuntungan prosedur</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col">
              <textarea class="form-control" name="V_16" id="V_16" cols="6" rows="2"></textarea>
            </div>
          </div>
          <br>
          <br>
          <div class="text start">
            <p>Dokter Operator</p>
            <div id="sig"></div>
          </div>
          <div>
            <br>
            <input class="mb-3" type="text" name="V_17" id="V_17" placeholder="Tanda tangan dan nama lengkap" size="25">
          </div>

          <div>
            <p class="mb-5">(*) Ditulis yang mendukung diagnosis saja</p>
          </div>

        </td>
      </tr>
    </table>
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