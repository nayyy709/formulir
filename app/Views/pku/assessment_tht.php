<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment THT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <p class="text-end">RM.2.1.7</p>
            <h6 class="text-center">REKAM MEDIS RAWAT INAP</h6>
        </div>
        <form action="" method="">
            <table class="table table-bordered" style="border: 1px;">
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-3" align='middle'>
                                <img src="<?= base_url('uploads/pku.png') ?>" alt="Gambar" width="90px">
                                <p style="font-size: 12px;">SEhat-aMANah-<br>tanGGungjawab-Islami</p>
                            </div>
                            <div class="col-6">
                                <h5><b>RS PKU MUHAMMADIYAH SAMPANGAN</b></h5>
                                <h6><b>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta</b></h6>
                                <p>Telp 0271-633894 Fax. : 0271-630229
                                    <br>Jawa Tengah 57117
                                </p>
                            </div>
                            <div class="col-3">
                                <div class="container" style="height:150px; border: 1px solid black; border-radius:5px">
                                    <h5 style="text-align:center; margin-top:60px">Label Identitas Pasien</h5>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6 style="text-align: center;">ASESMEN MEDIS PASIEN THT</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: center;">Diisi oleh Dokter</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-3">
                                <label for="V_01">Tanggal:</label>
                                <input type="date" id="V_01" name="V_01">
                            </div>
                            <div class="col-5"></div>
                            <div class="col-3">
                                <label for="V_02">Jam:</label>
                                <input type="time" id="V_02" name="V_02">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>ANAMNESIS:</strong></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_01" id="T_01_Autoanamnesis" value="1">
                                    <label class="form-check-label" for="T_01_Autoanamnesis">Autoanamnesis</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="T_01" id="T_01_Alloanamnesis" value="2">
                                    <label class="form-check-label" for="T_01_Alloanamnesis">Alloanamnesis</label>
                                </div>
                                <span style="margin-left:10px;">dengan:</span>
                                <input type="text" name="V_03" id="V_03" style="width: 120px;">
                                <span style="margin-left: 10px;">Hubungan dengan Pasien:</span>
                                <input type="text" name="V_04" id="V_03" style="width: 222px;">
                            </div>
                        </div>

                        <div class="mt-3">
                            <ul>
                                <li class="row align-items-center">
                                    <label for="V_05" class="col-3 col-form-label">Keluhan Utama:</label>
                                    <div class="col-9">
                                        <input type="text" id="V_05" name="V_05" style="width: 656px;">
                                    </div>
                                </li>
                                <li class="row align-items-center">
                                    <label for="V_06" class="col-3 col-form-label">Riwayat Penyakit Sekarang:</label>
                                    <div class="col-9">
                                        <input type="text" id="V_06" name="V_06" style="width: 656px;">
                                    </div>
                                </li>
                                <li class="row align-items-center">
                                    <label for="V_07" class="col-3 col-form-label">Alloanamesis dengan:</label>
                                    <div class="col-3">
                                        <input type="text" id="V_07" name="V_07">
                                    </div>
                                    <label for="V_08" class="col-3 col-form-label">Hubungan dengan pasien:</label>
                                    <div class="col-3">
                                        <input type="text" id="V_08" name="V_08" style="width: 200px;">
                                    </div>
                                </li>
                                <li class="row align-items-center">
                                    <label for="V_09" class="col-3 col-form-label">Riwayat Penyakit Dahulu:</label>
                                    <div class="col-9">
                                        <input type="text" id="V_09" name="V_09" style="width: 656px;">
                                    </div>
                                </li>
                                <li class="row align-items-center">
                                    <label for="V_10" class="col-3 col-form-label">Obat-obatan yang Dikonsumsi:</label>
                                    <div class="col-9">
                                        <input type="text" id="V_10" name="V_10" style="width: 656px;">
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <p><strong>PEMERIKSAAN FISIK</strong></p>
                            <div class="row">
                                <div class="col-3">
                                    <p><strong>A. Keadaan Umum:</strong></p>
                                </div>
                                <div class="col">
                                    <input type="text" id="V_69" name="V_69" style="width: 50%;">
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <span><strong>GCS</strong></span>
                                        <label for="V_70">E:</label>
                                        <input type="text" id="V_70" name="V_70" style="width: 5%;">
                                        <label for="V_71">M:</label>
                                        <input type="text" id="V_71" name="V_71" style="width: 5%;">
                                        <label for="V_72">V:</label>
                                        <input type="text" id="V_72" name="V_72" style="width: 5%;">
                                        <span>=</span>
                                        <input type="text" id="V_73" name="V_73" style="width: 5%;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <p>Tanda vital:</p>
                                    </div>
                                    <div class="col-3">
                                        <span style="margin-left: 10px;">TD:</span>
                                        <input type="text" id="V_11" name="V_11" style="width: 50px;">
                                        <span>/</span>
                                        <input type="text" id="V_12" name="V_12" style="width: 50px;">
                                        <span>mmHg</span>
                                    </div>
                                    <div class="col-2">
                                        <span>N:</span>
                                        <input type="text" id="V_13" name="V_13" style="width: 50px;">
                                        <span>x/menit</span>
                                    </div>
                                    <div class="col-2">
                                        <span>R:</span>
                                        <input type="text" id="V_14" name="V_14" style="width: 50px;">
                                        <span>x/menit</span>
                                    </div>
                                    <div class="col-2">
                                        <span style="margin-left: 10px;">S:</span>
                                        <input type="text" id="V_15" name="V_15" style="width: 50px;">
                                        <span>°C</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p><strong>B. Status General</strong></p>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <label for="V_16" class="col-form-label">1. Kepala</label>
                                    </div>
                                    <div class="col-9">
                                        <span>:</span>
                                        <input type="text" id="V_16" name="V_16" style="width: 650px;">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <label for="V_17" class="col-form-label">2. Leher</label>
                                    </div>
                                    <div class="col-9">
                                        <span>:</span>
                                        <input type="text" id="V_17" name="V_17" style="width: 650px;">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <label for="V_18" class="col-form-label">3. <i>Thorax</i></label>
                                    </div>
                                    <div class="col-9">
                                        <span>:</span>
                                        <input type="text" id="V_18" name="V_18" style="width: 650px;">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <label for="V_19" class="col-form-label">4. <i>Abdomen</i></label>
                                    </div>
                                    <div class="col-9">
                                        <span>:</span>
                                        <input type="text" id="V_19" name="V_19" style="width: 650px;">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <label for="V_20" class="col-form-label">5. <i>Genitalia</i></label>
                                    </div>
                                    <div class="col-9">
                                        <span>:</span>
                                        <input type="text" id="V_20" name="V_20" style="width: 650px;">
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <label for="V_21" class="col-form-label">6. <i>Extremitas</i></label>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <ol type="a">
                                            <div class="container">
                                                <li>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label for="V_21" class="col-form-label"><i>Extremitas</i> atas</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <span>:</span>
                                                            <input type="text" id="V_21" name="V_21" style="width: 614px;">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label for="V_22" class="col-form-label"><i>Extremitas</i> bawah</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <span>:</span>
                                                            <input type="text" id="V_22" name="V_22" style="width: 614px;">
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <p><strong>C. Status Lokalis</strong></p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <table class="table table-bordered" style="border: 1px;">
                                        <tr>
                                            <td>
                                                <span>a. Telinga</span>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Telinga Luar</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_23" name="V_23" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Daun Telinga</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_24" name="V_24" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Liang Telinga</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_25" name="V_25" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Telinga Tengah</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_26" name="V_26" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Membran tympani</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_27" name="V_27" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Audiometri</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_28" name="V_28" style="width: 100%;">
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="text-center">
                                                <img src="<?= base_url('uploads/telinga.png') ?>" alt="Telinga" width="180px" style="margin-top: 100px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>b. Hidung</span>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span><b>Hidung Luar</b> Cavum Nasi</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_29" name="V_29" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span><b>Hidung Dalam</b> Cavum Nasi</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_30" name="V_30" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Concae</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_31" name="V_31" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Septum Nasi</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_32" name="V_32" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Concae Inferior</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_33" name="V_33" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <img src="<?= base_url('uploads/hidung.png') ?>" alt="Hidung" width="170px" style="margin-top: 50px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>c. Tenggorokan</span>
                                            </td>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Tonsil</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_34" name="V_34" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-5">
                                                        <span>Daerah Posterior Farinx</span>
                                                    </div>
                                                    <div class="col-7">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Epiglotis</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_35" name="V_35" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Larinx</span>
                                                    </div>
                                                    <div class="col-9">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row align-items-center">
                                                    <div class="col-3">
                                                        <span>Pita Suara</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" id="V_36" name="V_36" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <img src="<?= base_url('uploads/tenggorokan.png') ?>" alt="Tenggorokan" width="170px" style="margin-top: 30px;">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p><strong>PEMERIKSAAN PENUNJANG</strong></p>
                                <ul>
                                    <li>
                                        <div class="row align-items-center mb-2">
                                            <div class="col-3">
                                                <label for="V_60">Laboratorium</label>
                                            </div>
                                            <div class="col-9">
                                                <span>:</span>
                                                <input type="text" id="V_60" name="V_60" style="width: 98%;">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center mb-2">
                                            <div class="col-3">
                                                <label for="V_61">Radiologi</label>
                                            </div>
                                            <div class="col-9">
                                                <span>:</span>
                                                <input type="text" id="V_61" name="V_61" style="width: 98%;">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center mb-2">
                                            <div class="col-3">
                                                <label for="V_37">ECG</label>
                                            </div>
                                            <div class="col-9">
                                                <span>:</span>
                                                <input type="text" id="V_37" name="V_37" style="width: 98%;">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="V_62">Lain-lain</label>
                                            </div>
                                            <div class="col-9">
                                                <span>:</span>
                                                <textarea name="V_62" id="V_62" cols="85" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <p><strong>DIAGNOSIS KERJA:</strong></p>
                                <textarea name="V_63" id="V_63" cols="125" rows="10"></textarea>
                            </div>
                            <div class="mt-2">
                                <p><strong>DIAGNOSIS BANDING:</strong></p>
                                <textarea name="V_64" id="V_64" cols="125" rows="4"></textarea>
                            </div>
                            <div class="mt-2">
                                <p><strong>MASALAH:</strong></p>
                                <ol type="1">
                                    <li>
                                        <span>Medis :</span>
                                        <input type="text" name="V_65" id="V_65" style="width: 100%;">
                                    </li>
                                    <li>
                                        <span>Keperawatan :</span>
                                        <input type="text" name="V_66" id="V_66" style="width: 100%;">
                                    </li>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <p><strong>SASARAN:</strong></p>
                                <textarea name="V_67" id="V_67" cols="125" rows="4"></textarea>
                            </div>
                            <div class="mt-2">
                                <p><strong>RENCANA ASUHAN/ TERAPI/INSTRUKSI <i>(standing order)</i>:</strong></p>
                                <textarea name="V_68" id="V_68" cols="125" rows="10"></textarea>
                            </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>