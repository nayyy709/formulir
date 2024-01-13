<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment Pasien Terminal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <p class="text-end">RM.2.1.8</p>
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
                        <h6 style="text-align: center;">ASESMEN MEDIS PASIEN TERMINAL</h6>
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

                        <div class="row">
                            <div class="col-3">
                                <p><strong>Keadaan Umum:</strong></p>
                            </div>
                            <div class="col">
                                <input type="text" id="V_69" name="V_69" style="width: 50%;">
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <span><strong>GCS</strong></span>
                                </div>
                                <div class="col-9">
                                    &emsp;<label for="V_70">E:</label>
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
                                <div class="col-3">
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

                        <div class="mt-3">
                            <p><strong>PEMERIKSAAN FISIK</strong></p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <p><strong>A. Status General</strong></p>
                                    </div>
                                    <div class="row">
                                        <ol type="1" style="margin-left: 35px;">
                                            <li>
                                                <span>Faktor Psikologis</span>
                                            </li>
                                            <input type="checkbox" class="form-check-input" id="T_02_kurang" name="T_02" value="1">
                                            <label for="T_02_kurang" class="form-check-label">Pasien kurang responsif</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_03_kecemasan" name="T_03" value="1">
                                            <label for="T_03_kecemasan" class="form-check-label">Kecemasan individu dan keluarga</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_04_distress" name="T_04" value="1">
                                            <label for="T_04_distress">Distress spiritual yang berhubungan dengan kehilangan anggota keluarga</label>
                                            <li class="mt-2">
                                                <span>Kehilangan tonus otot</span>
                                            </li>
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="checkbox" class="form-check-input" id="T_05_relaksasi" name="T_05" value="1">
                                                    <label for="T_05_relaksasi" class="form-check-label">Relaksasi otot muka</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_06_kesulitan" name="T_06" value="1">
                                                    <label for="T_06_kesulitan" class="form-check-label">Kesulitan bicara</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_07_reflek" name="T_07" value="1">
                                                    <label for="T_07_reflek" class="form-check-label">Reflek menelan</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_08_penurunan" name="T_08" value="1">
                                                    <label for="T_08_penurunan" class="form-check-label">Penurunan kontrol sprinter urinari</label>
                                                </div>
                                                <div class="col-4">
                                                    <input type="checkbox" class="form-check-input" id="T_09_gerakan" name="T_09" value="1">
                                                    <label for="T_09_gerakan" class="form-check-label">Gerakan tubuh yang terbatas</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_010_gangguan" name="T_010" value="1">
                                                    <label for="T_010_gangguan" class="form-check-label">Gangguan menelan</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_011_nausea" name="T_011" value="1">
                                                    <label for="T_011_nausea" class="form-check-label">Nausea</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_012_muntah" name="T_012" value="1">
                                                    <label for="T_012_muntah" class="form-check-label">Muntah</label>
                                                </div>
                                                <div class="col-4">
                                                    <input type="checkbox" class="form-check-input" id="T_013_hilang" name="T_013" value="1">
                                                    <label for="T_013_hilang" class="form-check-label">Hilangnya reflek menelan</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_014_perut" name="T_014" value="1">
                                                    <label for="T_014_perut" class="form-check-label">Perut kembung</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_015_obstipasi" name="T_015" value="1">
                                                    <label for="T_015_obstipasi" class="form-check-label">Obstipasi</label>
                                                    <br>
                                                    <input type="checkbox" class="form-check-input" id="T_016_lainnya" name="T_016" value="1">
                                                    <label for="T_016_lainnya" class="form-check-label">Lainnya</label>
                                                    <input type="text" id="V_16" name="V_16" style="width: 70%;">
                                                </div>
                                            </div>
                                            <li class="mt-2">
                                                <span>Keterlambatan dalam sirkulasi</span>
                                            </li>
                                            <input type="checkbox" class="form-check-input" id="T_017_kemunduran" name="T_017" value="1">
                                            <label for="T_017_kemunduran" class="form-check-label">Kemunduran dalam sensasi</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_018_sianosis" name="T_018" value="1">
                                            <label for="T_018_sianosis" class="form-check-label">Sianosis pada daerah ekstrimitas</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_019_kulit" name="T_019" value="1">
                                            <label for="T_019_kulit" class="form-check-label">Kulit dingin, pertama kali pada daerah kaki, kemudian tangan, telinga dan hidung</label>
                                            <li class="mt-2">
                                                <span>Perubahan-perubahan dalam tanda-tanda vital</span>
                                            </li>
                                            <input type="checkbox" class="form-check-input" id="T_020_nadi" name="T_020" value="1">
                                            <label for="T_020_nadi" class="form-check-label">Nadi lambat dan lemah</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_021_tekanan" name="T_021" value="1">
                                            <label for="T_021_tekanan" class="T_021">Tekanan darah turun</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_022_pernapasan" name="T_022" value="1">
                                            <label for="T_022_tekanan" class="form-check-label">Pernapasan cepat, cepat dangkal, dan tidak teratur</label>
                                            <li class="mt-2">
                                                <span>Gangguan sensori</span>
                                            </li>
                                            <input type="checkbox" class="form-check-input" id="T_023_penglihatan" name="T_023" value="1">
                                            <label for="T_023_penglihatan" class="T_023">Penglihatan kabur</label>
                                            <br>
                                            <input type="checkbox" class="form-check-input" id="T_024_gangguan" name="T_024" value="1">
                                            <label for="T_024_gangguan" class="form-check-label">Gangguan penciuman dan perabaan</label>
                                        </ol>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <p><strong>B. Kebutuhan Medis</strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <ol type="1" style="margin-left: 35px;">
                                        <li>
                                            <span>Peningkatan kenyamanan</span>
                                        </li>
                                        <li>
                                            <span>Pemeliharaan kemandirian</span>
                                        </li>
                                        <li>
                                            <span>Pencegahan kesepian dan isolasi</span>
                                        </li>
                                        <li>
                                            <span>Peningkatan ketenangan spiritual</span>
                                        </li>
                                        <li>
                                            <span>Dukungan untuk keluarga yang berdua</span>
                                        </li>
                                    </ol>
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
                                <textarea name="V_67" id="V_67" cols="125" rows="10"></textarea>
                            </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>