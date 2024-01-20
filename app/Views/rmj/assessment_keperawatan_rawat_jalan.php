<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment Keperawatan RAJAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        ol {
            list-style-type: lower-alpha;
            font-weight: bold;
        }

        li span {
            font-weight: normal;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="<?= base_url('pku/halamanform2') ?>" class="btn btn-success mt-3"><i class="bi bi-arrow-left"></i></a>
        <div class="row align-items-center">
            <p class="text-end">RMJ 3</p>
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
                        <h6 style="text-align: center;">ASESMEN KEPERAWATAN RAWAT JALAN</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <label for="V_01">Tanggal kunjungan</label>
                            </div>
                            <div class="col-2">
                                <input type="date" id="V_01" name="V_01">
                            </div>
                            <div class="col-1">
                                <label for="V_02">Pukul</label>
                            </div>
                            <div class="col-2">
                                <span>:</span>
                                <input type="time" id="V_02" name="V_02">
                            </div>
                            <div class="col-1">
                                <label for="V_03">Unit kerja</label>
                            </div>
                            <div class="col-3">
                                <span>:</span>
                                <input type="text" id="V_03" name="V_03">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <label for="V_04"><strong>ALASAN KUNJUNGAN:</strong></label>
                            </div>
                            <div class="col-3">
                                <input type="text" id="V_04" name="V_04" style="width: 100%;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <label for="V_05"><strong>RIWAYAT PSIKOSOSIAL:</strong></label>
                            </div>
                            <div class="col-3">
                                <input type="text" id="V_05" name="V_05" style="width: 100%;">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <p>Hubungan pasien dengan anggota keluarga</p>
                            </div>
                            <div class="col-1">
                                <input type="radio" class="form-check-input" id="T_01_baik" name="T_01" value="1">
                                <label for="T_01_baik" class="form-check-label">Baik</label>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_01_tidak" name="T_01" value="2">
                                <label for="T_01_tidak" class="form-check-label">Tidak baik</label>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col">
                                <p><strong>Status psikologi:</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_02_tenang" name="T_02" value="1">
                                <label for="T_02_tenang" class="form-check-label">Tenang</label>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_02_cemas" name="T_02" value="2">
                                <label for="T_02_cemas" class="form-check-label">Cemas</label>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_02_takut" name="T_02" value="3">
                                <label for="T_02_takut" class="form-check-label">Takut</label>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_02_marah" name="T_02" value="4">
                                <label for="T_02_marah" class="form-check-label">Marah</label>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_02_sedih" name="T_02" value="5">
                                <label for="T_02_sedih" class="T_02">Sedih</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <input type="radio" class="form-check-input" id="T_02_kecendrungan" name="T_02" value="6">
                                <label for="T_02_kecendrungan" class="form-check-label">Kecendrungan bunuh diri dilaporkan ke</label>
                                <input type="text" id="V_06" name="V_06">
                            </div>
                            <div class="col-6">
                                <input type="radio" class="form-check-input" id="T_02_lain" name="T_02" value="7">
                                <label for="T_02_lain" class="form-check-label">Lain-lain, sebutkan</label>
                                <input type="text" id="V_07" name="V_07">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <p><strong>PEMERIKSAAN FISIK:</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>TD:</span>
                                <input type="text" id="V_07" name="V_07" style="width: 50px;">
                                <span>/</span>
                                <input type="text" id="V_08" name="V_08" style="width: 50px;">
                                <span>mmHg</span>
                            </div>
                            <div class="col-3">
                                <span>Nadi:</span>
                                <input type="text" id="V_09" name="V_09" style="width: 50px;">
                                <span>x/menit</span>
                            </div>
                            <div class="col-3">
                                <span>RR:</span>
                                <input type="text" id="V_10" name="V_10" style="width: 50px;">
                                <span>x/menit</span>
                            </div>
                            <div class="col-3">
                                <span>Suhu:</span>
                                <input type="text" id="V_11" name="V_11" style="width: 50px;">
                                <span>°C</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <span>TB:</span>
                                <input type="text" id="V_12" name="V_12" style="width: 50px;">
                                <span>cm</span>
                            </div>
                            <div class="col-3">
                                <span>BB:</span>
                                &nbsp;&nbsp;&nbsp;<input type="text" id="V_13" name="V_13" style="width: 50px;">
                                <span>kg</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Asesmen Gizi</strong></p>
                        <ol>
                            <li>
                                <span><strong>Asesmen Nutrisi Pasien Dewasa (<i>Malnutrition Universal Screening Tool</i>)</strong></span>
                                <div class="row">
                                    <div class="col">
                                        <span>TB</span>
                                        <input type="text" id="V_14" name="V_14" style="width: 50px;">
                                        <span>cm</span>
                                        &emsp;
                                        <span>BB</span>
                                        <input type="text" id="V_15" name="V_15" style="width: 50px;">
                                        <span>kg</span>
                                        &emsp;
                                        <span>LLA</span>
                                        <input type="text" id="V_16" name="V_16" style="width: 50px;">
                                        <span>cm</span>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <table class="table table-bordered" style="border: 1px;">
                                        <tr>
                                            <td class="text-center" width="40%">PENILAIAN</td>
                                            <td class="text-center" width="20%">SKOR</td>
                                            <td rowspan="5" class="text-center">
                                                <span>Resiko Malnutrisi:</span>
                                                <br>
                                                <input type="radio" class="form-check-input" id="T_03_rendah" name="T_03" value="1">
                                                <label for="T_03_rendah" class="form-check-label">Resiko rendah, skor: 0</label>
                                                <br>
                                                <input type="radio" class="form-check-input" id="T_03_sedang" name="T_03" value="2">
                                                <label for="T_03_sedang" class="form-check-label">Resiko sedang, skor: 1</label>
                                                <br>
                                                <input type="radio" class="form-check-input" id="T_03_tinggi" name="T_03" value="3">
                                                <label for="T_03_tinggi" class="form-check-label">Resiko tinggi, skor: >=2</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>IMT</span>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Presentase Kehilangan BB yang tidak diharapkan</span>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Efek dari penyakit yang diderita</span>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Total Skor</span>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </li>
                            <li>
                                <span><strong>Asesmen Nutrisi Pasien Anak</strong> </span>
                                <div class="row">
                                    <div class="col">
                                        <span>TB/PB</span>
                                        <input type="text" id="V_17" name="V_17" style="width: 50px;">
                                        <span>cm</span>
                                        &emsp;
                                        <span>BB</span>
                                        <input type="text" id="V_18" name="V_18" style="width: 50px;">
                                        <span>kg</span>
                                        &emsp;
                                        <span>IMT</span>
                                        <input type="text" id="V_19" name="V_19" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <table class="table table-bordered" style="border: 1px;">
                                        <tr>
                                            <td rowspan="5" class="text-center" style="vertical-align: middle;">
                                                <span>Anak<br>0-60 bulan</span>
                                            </td>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_buruk" name="T_04" value="1">
                                                <label for="T_04_buruk" class="form-check-label">Gizi buruk <-3 SD</label>
                                            </td>
                                            <td rowspan="5" class="text-center" style="vertical-align: middle;">
                                                <span>Anak<br>61 bulan - 18 tahun</span>
                                            </td>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_sangat" name="T_04" value="2">
                                                <label for="T_04_sangat" class="form-check-label">Sangat kurus <-3 SD</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_kurang" name="T_04" value="3">
                                                <label for="T_04_kurang" class="form-check-label">Gizi kurang -3 s/d -2 SD</label>
                                            </td>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_kurus" name="T_04" value="4">
                                                <label for="T_04_kurus" class="form-check-label">Kurus -3 s/d < -2 SD</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_baik" name="T_04" value="5">
                                                <label for="T_04_baik" class="form-check-label">Gizi baik skor -2 SD s/d 2 SD</label>
                                            </td>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_normal" name="T_04" value="6">
                                                <label for="T_04_normal" class="form-check-label">Normal -2 s/d 1 SD</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_lebih" name="T_04" value="7">
                                                <label for="T_04_lebih" class="form-check-label">Gizi lebih skor >2 SD</label>
                                            </td>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_gemuk" name="T_04" value="8">
                                                <label for="T_04_gemuk" class="form-check-label">Gemuk >1 s/d 2 SD</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="radio" class="form-check-input" id="T_04_obesitas" name="T_04" value="9">
                                                <label for="T_04_obesitas" class="form-check-label">Obesitas >SD</label>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span><strong>Asesmen Risiko Jatuh Rawat Jalan</strong></span>
                        <ol>
                            <li>
                                <span>Perhatikan cara berjalan pasien saat akan duduk di kursi. Apakah pasien tampak tidak seimbang<br>(sempoyongan/limbung)?</span>
                                <input type="radio" class="form-check-input" id="T_05_ya" name="T_05" value="1">
                                <label for="T_05_ya" class="form-check-label">Ya</label>
                                <input type="radio" class="form-check-input" id="T_05_tidak" name="T_05" value="2">
                                <label for="T_05_tidak" class="form-check-label">Tidak</label>
                            </li>
                            <li>
                                <span>Jalan dengan menggunakan alat bantu (kruk, tripot, kursi roda, atau bantuan orang lain)</span>
                                <input type="radio" class="form-check-input" id="T_06_ya" name="T_06" value="1">
                                <label for="T_06_ya" class="form-check-label">Ya</label>
                                <input type="radio" class="form-check-input" id="T_06_tidak" name="T_06" value="2">
                                <label for="T_06_tidak" class="form-check-label">tidak</label>
                            </li>
                            <li>
                                <span>Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang saat akan duduk?</span>
                                <br>
                                <input type="radio" class="form-check-input" id="T_07_ya" name="T_07" value="1">
                                <label for="T_07_ya" class="form-check-label">Ya</label>
                                <input type="radio" class="form-check-input" id="T_07_tidak" name="T_07" value="2">
                                <label for="T_07_tidak" class="form-check-label">tidak</label>
                            </li>
                        </ol>
                        <span><strong>Hasil:</strong></span>
                        <br>
                        <input type="radio" class="form-check-input" id="T_08_tidak" name="T_08" value="1">
                        <label for="T_08_tidak" class="form-check_label">Tidak berisiko (tidak ditemukan a dan b)</label>
                        <br>
                        <input type="radio" class="form-check-input" id="T_08_rendah" name="T_08" value="2">
                        <label for="T_08_rendah" class="form-check_label">Risiko Rendah (ditemukan a atau b)</label>
                        <br>
                        <input type="radio" class="form-check-input" id="T_08_tinggi" name="T_08" value="3">
                        <label for="T_08_tinggi" class="form-check_label">Risiko Tinggi (a dan b ditemukan)</label>
                        <br>
                        <span><strong>Risiko Jatuh (Diisi bila pasien rawat inap)</strong></span>
                        <br>
                        <div class="row">
                            <div class="col-1">
                                <label for="V_20">Skor:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" id="V_20" name="V_20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <label for="V_21">Kategori:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" id="V_21" name="V_21">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Anak (Humpty Dumpty)</span>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_09_low" name="T_09" value="1">
                                <label for="T_09_low" class="form-check-label">Low, skor: 7-11</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" class="form-check-input" id="T_09_high" name="T_09" value="2">
                                <label for="T_09_high" class="form-check-label">High Risk skor: >= 12</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Dewasa (Fall Morse)</span>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_010_rendah" name="T_010" value="1">
                                <label for="T_010_rendah" class="form-check-label">Rendah, skor: 0-24</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" class="form-check-input" id="T_010_sedang" name="T_010" value="2">
                                <label for="T_010_sedang" class="form-check-label">Sedang, skor: > 22-44</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" class="form-check-input" id="T_010_tinggi" name="T_010" value="3">
                                <label for="T_010_tinggi" class="form-check-label">Tinggi, skor: >= 45</label>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span><strong>NYERI</strong></span>
                        <div class="row">
                            <div class="col-1">
                                <input type="radio" class="form-check-input" id="T_011_tidak" name="T_011" value="1">
                                <label for="T_011_tidak" class="form-check-label">Tidak</label>
                            </div>
                            <div class="col-3">
                                <input type="radio" class="form-check-input" id="T_011_ya" name="T_011" value="2">
                                <label for="T_011_ya" class="form-check-label">Ya, Lanjutkan asesmen</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <span>Onset:</span>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_012_akut" name="T_012" value="1">
                                <label for="T_012_akut" class="form-check-label">Akut</label>
                            </div>
                            <div class="col-2">
                                <input type="radio" class="form-check-input" id="T_012_kronik" name="T_012" value="2">
                                <label for="T_012_kronik" class="form-check-label">Kronik</label>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <table class="table table-bordered" style="border: 1px;">
                <tr>
                    <td rowspan="2" style="vertical-align: middle;">
                        <span>Kelompok Umur</span>
                    </td>
                    <td rowspan="2" style="vertical-align: middle;" width="5%">
                        <span>Skala</span>
                    </td>
                    <td colspan="5" class="text-center">
                        <span>Katrgori nyeri</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Tidak</span>
                    </td>
                    <td>
                        <span>Ringan</span>
                    </td>
                    <td>
                        <span>Sedang</span>
                    </td>
                    <td>
                        <span>Berat</span>
                    </td>
                    <td>
                        <span>Tidak Tertahankan</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Pasien tidak sadar, anak, dan dewasa (CPOT)</span>
                    </td>
                    <td>
                        <input type="text" id="V_22" name="V_22" style="width: 50px;">
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Pasien demensia (PAINAD)</span>
                    </td>
                    <td>
                        <input type="text" id="V_23" name="V_23" style="width: 50px;">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td rowspan="9"></td>
                </tr>
                <tr>
                    <td>Pasien Neonatus usia 0-28 hari (NIPS)</td>
                    <td>
                        <input type="text" id="V_24" name="V_24" style="width: 50px;">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pasien Anak usia 29 hari – 3 tahun (FLACCS)</td>
                    <td>
                        <input type="text" id="V_25" name="V_25" style="width: 50px;">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pasien Anak usia 3-9 tahun (WONG BAKER)</td>
                    <td>
                        <input type="text" id="V_26" name="V_26" style="width: 50px;">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pasien Dewasa sadar dan Anak > 9 tahun (Numeric Scale)</td>
                    <td>
                        <input type="text" id="V_27" name="V_27" style="width: 50px;">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-6">P (Provoging)</div>
                            <div class="col-md-auto">:</div>
                            <div class="col-md-auto"><input type="text" id="V_28" name="V_28"></div>
                        </div>
                    </td>
                    <td rowspan="4" colspan="5"></td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-6">Q (Quality and Quantity)</div>
                            <div class="col-md-auto">:</div>
                            <div class="col-md-auto"><input type="text" id="V_29" name="V_29"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-6">R (Regio and Radiation)</div>
                            <div class="col-md-auto">:</div>
                            <div class="col-md-auto"><input type="text" id="V_30" name="V_30"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-6">T (Timing and Type of Onset)</div>
                            <div class="col-md-auto">:</div>
                            <div class="col-md-auto"><input type="text" id="V_31" name="V_31"></div>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="row">
                <div class="col-3">
                    <span><strong>Status Fungsional</strong></span>
                </div>
                <div class="col-2">
                    <span>:</span>
                    <input type="radio" class="form-check-input" id="T_013_mandiri" name="T_013" value="1">
                    <label for="T_013_mandiri" class="form-check-label">Mandiri</label>
                </div>
                <div class="col-6">
                    <input type="radio" class="form-check-input" id="T_013_perlu" name="T_013" value="2">
                    <label for="T_013_perlu" class="form-check-label">Perlu bantuan, sebutkan</label>
                    <input type="text" id="V_32" name="V_32">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <span><strong>Masalah keperawatan</strong></span>
                </div>
                <div class="col">
                    <span>:</span>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-chec-input" id="T_014_alergi" name="T_014" value="1">
                        <label for="T_014_alergi" class="form-check-label">Alergi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-chec-input" id="T_014_nyeri" name="T_014" value="2">
                        <label for="T_014_nyeri" class="form-check-label">Nyeri</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-chec-input" id="T_014_resiko" name="T_014" value="3">
                        <label for="T_014_resiko" class="form-check-label">Resiko jatuh</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-chec-input" id="T_014_malnutrisi" name="T_014" value="4">
                        <label for="T_014_malnutrisi" class="form-check-label">Resiko Malnutrisi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-chec-input" id="T_014_psikologis" name="T_014" value="5">
                        <label for="T_014_psikologis" class="form-check-label">Psikologis</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-chec-input" id="T_014_sosial" name="T_014" value="6">
                        <label for="T_014_sosial" class="form-check-label">Sosial</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <span><strong>Masalah keperawatan lainnya</strong></span>
                </div>
                <div class="col-3">
                    <span>:</span>
                    <input type="text" id="V_33" name="V_33">
                </div>
            </div>

            <table class="table table-bordered mt-2" style="border: 1px;">
                <tr>
                    <td class="text-center">
                        Tanggal/Jam
                    </td>
                    <td class="text-center">
                        Renca Tindakan Keperawatan
                    </td>
                    <td class="text-center">
                        Jam diberikan
                    </td>
                    <td class="text-center">
                        Tanda tangan/nama terang
                    </td>
                </tr>
                <tbody id="addTable">
                    <tr>
                        <td>
                            <input type="datetime-local" class="form-control" id="V_35" name="V_36">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_36" name="V_36">
                        </td>
                        <td>
                            <input type="time" class="form-control" id="V_37" name="V_37">
                        </td>
                        <td class="text-center">
                            <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                            <input type="hidden" name="TTD" id="TTD">
                            <br>
                            <input type="text" id="V_38" name="V_38" style="width: 150px; text-align: center;" placeholder="Nama">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <div class="container text-center mt-3">
                                <button class="btn btn-primary" type="button" onclick="addrow1('addTable')">Tambah</button>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="row">
                <div class="col text-center">
                    <span>Tanda tangan dan nama perawat</span>
                    <br>
                    <canvas id="canvas2" width="150" height="90" style="border:1px solid #000;"></canvas>
                    <input type="hidden" name="TTD2" id="TTD2">
                    <br>
                    <input type="text" id="V_39" name="V_39" style="width: 150px; text-align: center;" placeholder="Nama">
                </div>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript">
    var i = 40;
    var canvas = 2;
    var TTD = 2;

    function addrow1(tableID) {

        i1 = i + 1;
        i2 = i + 2;
        i3 = i + 3;
        canvas1 = canvas + 1;
        TTD1 = TTD + 1;

        $("#" + tableID).append($("<tr >")
            .append($("<td>").html('<input type="datetime-local" class="form-control" id="V_' + i + '" name="V_' + i + '" >'))
            .append($("<td>").html('<input type="text" class="form-control" id="V_' + i1 + '" name="V_' + i1 + '" >'))
            .append($("<td>").html('<input type="time" class="form-control" id="V_' + i2 + '" name="V_' + i2 + '" >'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas1 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD1 + '"></div><div class="form-group"><input type="text"  id="V_' + i3 + '" name="V_' + i3 + '" style="width: 150px; text-align: center;" placeholder="Nama"></div>'))
        )

        i += 4;
        canvas += 1;
        TTD += 1;


    }
</script>
<script>
    var canvas = document.getElementById('canvas');
    const canvasDataInput = document.getElementById('TTD');
    var context = canvas.getContext('2d');
    var drawing = false;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = '#000';

        context.lineTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
        context.stroke();
        context.beginPath();
        context.moveTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context.beginPath();
    }

    function saveSignatureData() {
        const canvasData = canvas.toDataURL('image/png');

        canvasDataInput.value = canvasData;
    }
</script>
<script>
    var canvas1 = document.getElementById('canvas1');
    const canvasDataInput1 = document.getElementById('TTD_1');
    var context1 = canvas1.getContext('2d');
    var drawing = false;

    canvas1.addEventListener('mousedown', startDrawing);
    canvas1.addEventListener('mousemove', draw);
    canvas1.addEventListener('mouseup', stopDrawing);
    canvas1.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context1.lineWidth = 2;
        context1.lineCap = 'round';
        context1.strokeStyle = '#000';

        context1.lineTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
        context1.stroke();
        context1.beginPath();
        context1.moveTo(e.clientX - canvas1.getBoundingClientRect().left, e.clientY - canvas1.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context1.beginPath();
    }

    function saveSignatureData1() {
        const canvasData1 = canvas1.toDataURL('image/png');

        canvasDataInput1.value = canvasData1;
    }
</script>
<script>
    var canvas2 = document.getElementById('canvas2');
    const canvasDataInput2 = document.getElementById('TTD_2');
    var context2 = canvas2.getContext('2d');
    var drawing = false;

    canvas2.addEventListener('mousedown', startDrawing);
    canvas2.addEventListener('mousemove', draw);
    canvas2.addEventListener('mouseup', stopDrawing);
    canvas2.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context2.lineWidth = 2;
        context2.lineCap = 'round';
        context2.strokeStyle = '#000';

        context2.lineTo(e.clientX - canvas2.getBoundingClientRect().left, e.clientY - canvas2.getBoundingClientRect().top);
        context2.stroke();
        context2.beginPath();
        context2.moveTo(e.clientX - canvas2.getBoundingClientRect().left, e.clientY - canvas2.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context2.beginPath();
    }

    function saveSignatureData2() {
        const canvasData2 = canvas2.toDataURL('image/png');

        canvasDataInput2.value = canvasData2;
    }
</script>
<script>
    var canvas3 = document.getElementById('canvas3');
    const canvasDataInput3 = document.getElementById('TTD_3');
    var context3 = canvas3.getContext('2d');
    var drawing = false;

    canvas3.addEventListener('mousedown', startDrawing);
    canvas3.addEventListener('mousemove', draw);
    canvas3.addEventListener('mouseup', stopDrawing);
    canvas3.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function draw(e) {
        if (!drawing) return;

        context3.lineWidth = 2;
        context3.lineCap = 'round';
        context3.strokeStyle = '#000';

        context3.lineTo(e.clientX - canvas3.getBoundingClientRect().left, e.clientY - canvas3.getBoundingClientRect().top);
        context3.stroke();
        context3.beginPath();
        context3.moveTo(e.clientX - canvas3.getBoundingClientRect().left, e.clientY - canvas3.getBoundingClientRect().top);
    }

    function stopDrawing() {
        drawing = false;
        context3.beginPath();
    }

    function saveSignatureData3() {
        const canvasData3 = canvas3.toDataURL('image/png');

        canvasDataInput3.value = canvasData3;
    }
</script>

</html>