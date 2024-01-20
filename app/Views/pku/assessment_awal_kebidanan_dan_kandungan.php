<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>ASSESMEN AWAL KEBIDANAN DAN KANDUNGAN</title>
</head>

<body>
    <div class="container">
        <a href="<?= base_url('pku/halamanform2') ?>" class="btn btn-success mt-3"><i class="bi bi-arrow-left"></i></a>
        <h6 style="text-align:right">RM 5 OG 1</h6>
        <form action="" autocomplete="off" style="vertical-align:middle">
            <table class="table table-bordered border-black mb-0">
                <tr style="vertical-align:middle; margin:0px; font-family:'Times New Roman'">
                    <td style="text-align:center; width:20%">
                        <img src="<?= base_url('uploads/pku.png') ?>" alt="Gambar" style="width:90px"><br>
                        <p>SEHAT AMANAH<br>Tanggungjawab-Islami</p>
                    </td>
                    <td>
                        <h4><b>RS PKU MUHAMMADIYAH SAMPANGAN</b></h4>
                        <h5><b>Semanggi RT 002 / RW 020 Pasar Kliwon<br>
                                Telp 0271-533894 Fax. : 0271-630229 Surakarta</b>
                        </h5>
                    </td>
                    <td style="width:35%">
                        <div class="container" style="height:150px; border: 1px solid black; border-radius:10px">
                            <h5 style="text-align:center; margin-top:60px">Label Identitas Pasien</h5>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered border-black mt-0 mb-0">
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <label for="V_01" class="col-sm-auto col-form-label">DPJP :</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="V_01" name="V_01">
                            </div>
                            <label for="V_02" class="col-sm-auto col-form-label">Ruang/Kelas :</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="V_02" name="V_02">
                            </div>
                            <label for="V_03" class="col-sm-1 col-form-label">Jam :</label>
                            <div class="col-sm-2">
                                <input type="datetime-local" class="form-control" id="V_03" name="V_03">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <b>ASSESMEN AWAL KEBIDANAN DAN KANDUNGAN</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <b>DIISI OLEH BIDAN KAMAR BERSALIN</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row mb-1" style="text-align:center">
                            <div class="col"><b>ALERGI</b></div>
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_01_1" id="T_01" value="1">
                                    <label class="form-check-label" for="T_01_1">Obat (Sebutkan)</label>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <input type="text" class="form-control" id="V_04" name="V_04">
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="T_02_1" id="T_02" value="1">
                                    <label class="form-check-label" for="T_02_1">Bukan Obat (Sebutkan)</label>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <input type="text" class="form-control" id="V_05" name="V_05">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="T_03_1" id="T_03" value="1">
                                    <label class="form-check-label" for="T_03_1">Tidak diketahui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="T_04_1" id="T_04" value="1">
                                    <label class="form-check-label" for="T_04_1">Tidak Ada Alergi</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>A. DATA PASIEN MASUK RAWAT INAP</b></td>
                </tr>
                <tr>
                    <td width="50%">
                        <div class="container">
                            <div class="row">
                                <div class="col"><b>Identitas Pasien</b></div>
                            </div>
                            <div class="row mb-1">
                                <label for="V_06" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_06" name="V_06">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="V_07" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_07" name="V_07">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="V_08" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_08" name="V_08">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="V_09" class="col-sm-3 col-form-label">Pendidikan</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_09" name="V_09">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="V_10" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-auto col-form-label">:</div>
                                <div class="col">
                                    <input type="text" class="form-control" id="V_10" name="V_10">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col"><b>Identitas Suami</b></div>
                        </div>
                        <div class="row mb-1">
                            <label for="V_11" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-auto col-form-label">:</div>
                            <div class="col">
                                <input type="text" class="form-control" id="V_11" name="V_11">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="V_12" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-auto col-form-label">:</div>
                            <div class="col">
                                <input type="text" class="form-control" id="V_12" name="V_12">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="V_13" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-auto col-form-label">:</div>
                            <div class="col">
                                <input type="text" class="form-control" id="V_13" name="V_13">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="V_14" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-auto col-form-label">:</div>
                            <div class="col">
                                <input type="text" class="form-control" id="V_14" name="V_14">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="V_15" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-auto col-form-label">:</div>
                            <div class="col">
                                <input type="text" class="form-control" id="V_15" name="V_15">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">Jenis Kunjungan</div>
                                <div class="col-auto">:</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_05" id="T_05_0" value="0">
                                    <label class="form-check-label" for="T_05_0">Datang sendiri</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_05" id="T_05_1" value="1">
                                    <label class="form-check-label" for="T_05_1">Lainnya</label>
                                    <input type="text" id="V_16" name="V_16" style="width:150px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Rujukan dari</div>
                                <div class="col-auto">:</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_06" id="T_06_0" value="0">
                                    <label class="form-check-label" for="T_06_0">Puskesmas</label>
                                    <input type="text" id="V_17" name="V_17" style="width:130px">
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_06" id="T_06_1" value="1">
                                    <label class="form-check-label" for="T_06_1">Bidan</label>
                                    <input type="text" id="V_18" name="V_18" style="width:165px">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_06" id="T_06_2" value="2">
                                    <label class="form-check-label" for="T_06_2">Lainnya</label>
                                    <input type="text" id="V_19" name="V_19" style="width:130px">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Pasien masuk dari</div>
                                <div class="col-auto">:</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_07" id="T_07_0" value="0">
                                    <label class="form-check-label" for="T_07_0">IGD</label>
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_07" id="T_07_1" value="1">
                                    <label class="form-check-label" for="T_07_1">Poliklinik</label>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Cara Masuk</div>
                                <div class="col-auto">:</div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_08" id="T_08_0" value="0">
                                    <label class="form-check-label" for="T_08_0">Jalan</label>
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input" type="radio" name="T_08" id="T_08_1" value="1">
                                    <label class="form-check-label" for="T_08_1">Kursi roda</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="T_08" id="T_08_2" value="2">
                                    <label class="form-check-label" for="T_08_2">Brancart</label>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">Membawa obat sendiri</div>
                                <div class="col-auto">:</div>
                                <div class="col-2">
                                    <input class="form-check-input" type="radio" name="T_09" id="T_09_0" value="0">
                                    <label class="form-check-label" for="T_09_0">Tidak</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-check-input" type="radio" name="T_09" id="T_09_1" value="1">
                                    <label class="form-check-label" for="T_09_1">Ya, bila ya diberikan ke petugas</label>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_09" id="T_09_0" value="0">
                                        <label class="form-check-label" for="T_09_0">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_09" id="T_09_1" value="1">
                                        <label class="form-check-label" for="T_09_1">Ya</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="V_20" class="col-form-label">Obat-obatan yang dibawa</label>
                                </div>
                                <div class="col-auto col-form-label">:</div>
                                <div class="col">
                                    <textarea class="form-control" name="V_20" id="V_20" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>B. DATA SUBYEKTIF</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="V_21" class="col-form-label">1. KELUHAN UTAMA</label>
                                </div>
                                <div class="col-auto col-form-label">:</div>
                                <div class="col">
                                    <textarea class="form-control" name="V_21" id="V_21" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">2. RIWAYAT HAID :</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <label for="V_22" class="col-sm-3 col-form-label">Menarche</label>
                                    <div class="col-sm-auto col-form-label">:</div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="V_22" name="V_22">
                                    </div>
                                    <label for="V_23" class="col-sm-1 col-form-label">HPHT</label>
                                    <div class="col-sm-auto col-form-label">:</div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="V_23" name="V_23">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="V_24" class="col-sm-3 col-form-label">Siklus : Teratur / Tidak :</label>
                                    <div class="col-sm-auto col-form-label">:</div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="V_24" name="V_24">
                                    </div>
                                    <label for="V_25" class="col-sm-1 col-form-label">HPL</label>
                                    <div class="col-sm-auto col-form-label">:</div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="V_25" name="V_25">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="V_26" class="col-sm-3 col-form-label">Lama . Jumlah</label>
                                    <div class="col-sm-auto col-form-label">:</div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="V_26" name="V_26">
                                    </div>
                                    <label for="V_27" class="col-sm-1 col-form-label">KELUHAN</label>
                                    <div class="col-sm-auto col-form-label">:</div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="V_27" name="V_27">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">3. STATUS PERKAWINAN</div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="V_28">Kawin</label>
                                        <input type="text" id="V_28" name="V_28" style="width:400px">
                                    </div>
                                    <div class="col-6">
                                        <label for="V_29">Lama</label>
                                        <input type="text" id="V_29" name="V_29" style="width:300px"> Bulan/tahun
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">4. RIWAYAT KEHAMILAN</div>
                            </div>
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-3">
                                        <label for="V_30">G</label>
                                        <input type="text" id="V_30" name="V_30">
                                    </div>
                                    <div class="col-3">
                                        <label for="V_31">P</label>
                                        <input type="text" id="V_31" name="V_31">
                                    </div>
                                    <div class="col-3">
                                        <label for="V_32">A</label>
                                        <input type="text" id="V_32" name="V_32">
                                    </div>
                                    <div class="col-3">
                                        <label for="V_33">Hidup</label>
                                        <input type="text" id="V_33" name="V_33" style="width:150px">
                                    </div>
                                </div>
                                <table id="tbody" class="table table-bordered border-black">
                                    <thead style="text-align: center; vertical-align:middle">
                                        <tr>
                                            <td width="5%">No.</td>
                                            <td>Tgl Tahun Partus</td>
                                            <td>Tempat Partus</td>
                                            <td>Umur Hamil</td>
                                            <td>Jenis Persalinan</td>
                                            <td>Penolong Persalinan</td>
                                            <td>Penyulit</td>
                                            <td>Anak JK / BB</td>
                                            <td>Keadaan anak sekarang</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <input type="date" class="form-control" id="V_34" name="V_34">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_35" name="V_35">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_36" name="V_36">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_37" name="V_37">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_38" name="V_38">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_39" name="V_39">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_40" name="V_40">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_41" name="V_41">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <input type="date" class="form-control" id="V_42" name="V_42">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_43" name="V_43">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_44" name="V_44">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_45" name="V_45">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_46" name="V_46">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_47" name="V_47">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_48" name="V_48">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_49" name="V_49">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <input type="date" class="form-control" id="V_50" name="V_50">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_51" name="V_51">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_52" name="V_52">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_53" name="V_53">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_54" name="V_54">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_55" name="V_55">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_56" name="V_56">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_57" name="V_57">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <input type="date" class="form-control" id="V_58" name="V_58">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_59" name="V_59">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_60" name="V_60">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_61" name="V_61">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_62" name="V_62">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_63" name="V_63">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_64" name="V_64">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="V_65" name="V_65">
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="text-align:center">
                                        <td colspan="9">
                                            <button type="button" class="btn btn-primary" onclick="addRow('tbody')">Tambah Baris</button>
                                        </td>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col">5. RIWAYAT PENYAKIT YANG LALU</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col">Pernah dirawat/operasi</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="V_66">Kapan :</label>
                                        <input type="text" id="V_66" name="V_66" style="width:200px">
                                    </div>
                                    <div class="col-4">
                                        <label for="V_67">Dimana :</label>
                                        <input type="text" id="V_67" name="V_67" style="width:200px">
                                    </div>
                                    <div class="col-4">
                                        <label for="V_68">Sakit apa :</label>
                                        <input type="text" id="V_68" name="V_68" style="width:200px">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">6. RIWAYAT PENYAKIT PADA KEHAMILAN SEKARANG</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col">
                                        Penyakit Penyerta Kehamilan sekarang :
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_010" id="T_010_0" value="0">
                                            <label class="form-check-label" for="T_010_0">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_010" id="T_010_1" value="1">
                                            <label class="form-check-label" for="T_010_1">Ada, (lihat pilihan di bawah ini)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_011" id="T_011_1" value="1">
                                            <label class="form-check-label" for="T_011">Asma</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <label for="V_69">Mulai tahun </label>
                                        <input type="text" id="V_69" name="V_69" style="width:200px">
                                    </div>
                                    <div class="col-5">
                                        <label for="V_70">Dalam terapi </label>
                                        <input type="text" id="V_70" name="V_70" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_012" id="T_012_1" value="1">
                                            <label class="form-check-label" for="T_012_1">Penyakit jantung</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <label for="V_71">Mulai tahun </label>
                                        <input type="text" id="V_71" name="V_71" style="width:200px">
                                    </div>
                                    <div class="col-5">
                                        <label for="V_72">Dalam terapi </label>
                                        <input type="text" id="V_72" name="V_72" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_013" id="T_013_1" value="1">
                                            <label class="form-check-label" for="T_013_1">Diabetes</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <label for="V_73">Mulai tahun </label>
                                        <input type="text" id="V_73" name="V_73" style="width:200px">
                                    </div>
                                    <div class="col-5">
                                        <label for="V_74">Dalam terapi </label>
                                        <input type="text" id="V_74" name="V_74" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_014" id="T_014_1" value="1">
                                            <label class="form-check-label" for="T_014_1">Hipertensi</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <label for="V_75">Mulai tahun </label>
                                        <input type="text" id="V_75" name="V_75" style="width:200px">
                                    </div>
                                    <div class="col-5">
                                        <label for="V_76">Dalam terapi </label>
                                        <input type="text" id="V_76" name="V_76" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_015" id="T_015_1" value="1">
                                            <label class="form-check-label" for="T_015_1">Lain-lain</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="V_77" name="V_77" style="width:760px">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">7. RIWAYAT PENYAKIT KELUARGA</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_016" id="T_016_1" value="1">
                                            <label class="form-check-label" for="T_016_1">Hamil kembar</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_017" id="T_017_1" value="1">
                                            <label class="form-check-label" for="T_017_1">Asma</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_018" id="T_018_1" value="1">
                                            <label class="form-check-label" for="T_018_1">Hipertensi</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_019" id="T_019_1" value="1">
                                            <label class="form-check-label" for="T_019_1">Lainnya</label>
                                            <input type="text" id="V_78" name="V_78" style="width:100px">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_020" id="T_020_1" value="1">
                                            <label class="form-check-label" for="T_020_1">Diabetes</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_021" id="T_021_1" value="1">
                                            <label class="form-check-label" for="T_021_1">Penyakit Jantung</label>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">8. RIWAYAT GYNEKOLOGI</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_022" id="T_022_1" value="1">
                                            <label class="form-check-label" for="T_022_1">Kanker Kandungan</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_023" id="T_023_1" value="1">
                                            <label class="form-check-label" for="T_023_1">Myoma/Kista</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_024" id="T_024_1" value="1">
                                            <label class="form-check-label" for="T_024_1">Cervisitis Kronis</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="T_025" id="T_025_1" value="1">
                                            <label class="form-check-label" for="T_025_1">Lainnya</label>
                                            <input type="text" id="V_79" name="V_79" style="width:100px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">9. RIWAYAT KB</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <label for="V_80">Metode KB yang dipakai :</label>
                                        <input type="text" id="V_80" name="V_80" style="width:400px">
                                    </div>
                                    <div class="col-6">
                                        <label for="V_81">Lama :</label>
                                        <input type="text" id="V_81" name="V_81" style="width:300px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3">Komplikasi dari KB</div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_026" id="T_026_0" value="0">
                                        <label class="form-check-label" for="T_026_0">Pendarahan</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="T_026" id="T_026_1" value="1">
                                        <label class="form-check-label" for="T_026_1">Lainnya</label>
                                        <input type="text" id="V_82" name="V_82" style="width:200px">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">10. POLA MAKAN/MINUM/ELIMINASI/PSIKOSOSIAL</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <label for="T_027">Pola makan</label>
                                    </div>
                                    <div class="col-4">
                                        : <input type="text" id="T_027" name="T_027" style="width:230px"> kali/hari
                                    </div>
                                    <div class="col-2">
                                        <label for="V_83">Makan terakhir jam</label>
                                    </div>
                                    <div class="col-4">
                                        : <input type="time" id="V_83" name="V_83" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">
                                        <label for="T_028">Pola minum</label>
                                    </div>
                                    <div class="col-4">
                                        : <input type="text" id="T_028" name="T_028" style="width:230px"> cc/hari
                                    </div>
                                    <div class="col-2">
                                        <label for="V_84">Minum terakhir jam</label>
                                    </div>
                                    <div class="col-4">
                                        : <input type="time" id="V_84" name="V_84" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-1">Pola Eliminasi</div>
                                    <div class="col">
                                        <div class="row mb-1">
                                            <div class="col-1">
                                                <label for="T_029">: BAK</label>
                                            </div>
                                            <div class="col-3">
                                                : <input type="text" id="T_029" name="T_029" style="width:100px"> kali/hari
                                            </div>
                                            <div class="col-2">
                                                <label for="V_85">Warna</label>
                                            </div>
                                            <div class="col-2">
                                                : <input type="text" id="V_85" name="V_85" style="width:100px">
                                            </div>
                                            <div class="col-2">
                                                <label for="V_86">BAK terakhir jam</label>
                                            </div>
                                            <div class="col-2">
                                                : <input type="time" id="V_86" name="V_86" style="width:100px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1">
                                                <label for="T_030">: BAB</label>
                                            </div>
                                            <div class="col-3">
                                                : <input type="text" id="T_030" name="T_030" style="width:100px"> kali/hari
                                            </div>
                                            <div class="col-2">
                                                <label for="V_87">Karakteristik</label>
                                            </div>
                                            <div class="col-2">
                                                : <input type="text" id="V_87" name="V_87" style="width:100px">
                                            </div>
                                            <div class="col-2">
                                                <label for="V_88">BAB terakhir jam</label>
                                            </div>
                                            <div class="col-2">
                                                : <input type="time" id="V_88" name="V_88" style="width:100px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-1">Pola Istirahat</div>
                                    <div class="col">
                                        <div class="row mb-1">
                                            <div class="col-1">
                                                <label for="T_031">: Tidur</label>
                                            </div>
                                            <div class="col-3">
                                                : <input type="text" id="T_031" name="T_031" style="width:100px"> jam/hari
                                            </div>
                                            <div class="col-2">
                                                <label for="V_89">Tidur terakhir jam</label>
                                            </div>
                                            <div class="col">
                                                : <input type="time" id="V_89" name="V_89" style="width:100px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">11. DATA PSIKOLOGIS DAN SOSIAL</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-3">Rumah Tinggal</div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_032" id="T_032_0" value="0">
                                        <label class="form-check-label" for="T_032_0">Rumah milik sendiri</label>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_032" id="T_032_1" value="1">
                                        <label class="form-check-label" for="T_032_1">Kost/Kontrak</label>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_032" id="T_032_2" value="2">
                                        <label class="form-check-label" for="T_032_2">Lainnya:</label>
                                        <input type="text" id="V_90" name="V_90" style="width:100px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3">Tinggal Bersama</div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_0" value="0">
                                        <label class="form-check-label" for="T_033_0">Sendiri</label>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_1" value="1">
                                        <label class="form-check-label" for="T_033_1">Suami/anak</label>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_033" id="T_033_2" value="2">
                                        <label class="form-check-label" for="T_033_2">Lainnya:</label>
                                        <input type="text" id="V_91" name="V_91" style="width:100px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <label for="V_92">Penanggungjawab dalam kondisi darurat :</label>
                                        <input type="text" id="V_92" name="V_92" style="width:170px">
                                    </div>
                                    <div class="col-6">
                                        <label for="V_93">Hubungan dengan pasien :</label>
                                        <input type="text" id="V_93" name="V_93" style="width:250px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <label for="V_94">Telepon Rumah/kantor :</label>
                                        <input type="text" id="V_94" name="V_94" style="width:300px">
                                    </div>
                                    <div class="col-6">
                                        <label for="V_95">Hp :</label>
                                        <input type="text" id="V_95" name="V_95" style="width:410px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3">Status Emosional</div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_034" id="T_034_0" value="0">
                                        <label class="form-check-label" for="T_034_0">Cemas</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_034" id="T_034_1" value="1">
                                        <label class="form-check-label" for="T_034_1">Kooperatif</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_034" id="T_034_2" value="2">
                                        <label class="form-check-label" for="T_034_2">Depresi</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="T_034" id="T_034_3" value="3">
                                        <label class="form-check-label" for="T_034_3">Lainnya:</label>
                                        <input type="text" id="V_96" name="V_96" style="width:100px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3">Aktifitas</div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_035" id="T_035_0" value="0">
                                        <label class="form-check-label" for="T_035_0">Mandiri</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_035" id="T_035_1" value="1">
                                        <label class="form-check-label" for="T_035_1">Dibantu</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="T_035" id="T_035_2" value="2">
                                        <label class="form-check-label" for="T_035_2">Lainnya:</label>
                                        <input type="text" id="V_97" name="V_97" style="width:270px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3">Social Support dari</div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_036" id="T_036_0" value="0">
                                        <label class="form-check-label" for="T_036_0">Suami</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_036" id="T_036_1" value="1">
                                        <label class="form-check-label" for="T_036_1">Orang Tua</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_036" id="T_036_2" value="2">
                                        <label class="form-check-label" for="T_036_2">Mertua</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="T_036" id="T_036_3" value="3">
                                        <label class="form-check-label" for="T_036_3">Lainnya:</label>
                                        <input type="text" id="V_98" name="V_98" style="width:100px">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-5">Penerimaan klien terdapat kehamilan/persalinan ini</div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_037" id="T_037_0" value="0">
                                        <label class="form-check-label" for="T_037_0">Diharapkan</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="T_037" id="T_037_1" value="1">
                                        <label class="form-check-label" for="T_037_1">Tidak diharapkan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>C. DATA OBYEKTIF</b></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="container">
                            <div class="row mb-1">
                                <div class="col">1. PEMERIKSAAN UMUM</div>
                            </div>
                            <div class="container">
                                <div class="mb-4">
                                    <label class="col-3" for="">KEADAAN UMUM : </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_038" id="T_038_0" value="0">
                                        <label class="form-check-label" for="T_038_0">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_038" id="T_038_1" value="1">
                                        <label class="form-check-label" for="T_038_1">Cukup</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_038" id="T_038_2" value="2">
                                        <label class="form-check-label" for="T_038_2">Lemah kesadaran</label>
                                        <input type="text" id="V_99" name="V_99" style="width: 120px">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="input-group mb-3" style="width: 300px">
                                                <span class="input-group-text">TD</span>
                                                <input type="text" class="form-control" id="tension_upper" name="tension_upper">
                                                <span class="input-group-text">/</span>
                                                <input type="text" class="form-control" id="tension_below" name="tension_below">
                                                <span class="input-group-text">mmHg</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3" style="width: 200px">
                                                <span class="input-group-text">N</span>
                                                <input type="text" class="form-control" id="nadi" name="nadi">
                                                <span class="input-group-text">x/menit</span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group mb-3" style="width: 150px">
                                                <span class="input-group-text">S</span>
                                                <input type="text" class="form-control" id="temperature" name="temperature">
                                                <span class="input-group-text">oC </span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3" style="width: 200px">
                                                <span class="input-group-text">R</span>
                                                <input type="text" class="form-control" id="nafas" name="nafas">
                                                <span class="input-group-text">x/menit</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="input-group mb-3" style="width: 225px">
                                                <span class="input-group-text">Tinggi Badan</span>
                                                <input type="text" class="form-control" id="height" name="height">
                                                <span class="input-group-text">cm</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3" style="width: 220px">
                                                <span class="input-group-text">Berat Badan</span>
                                                <input type="text" class="form-control" id="weight" name="weight">
                                                <span class="input-group-text">kg</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3" style="width: 220px">
                                                <span class="input-group-text">Berat badan sebelum lahir</span>
                                                <input type="text" class="form-control" id="V_100" name="V_100">
                                                <span class="input-group-text">kg</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3" style="width: 150px">
                                                <span class="input-group-text">LILA</span>
                                                <input type="text" class="form-control" id="V_101" name="V_101">
                                                <span class="input-group-text">cm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    Pemakaian alat bantu , Kaca mata (+)/(-) <input type="text" id="V_102" name="V_102">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_039" id="T_039_0" value="0">
                                        <label class="form-check-label" for="T_039_0">lensa kontak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_039" id="T_039_1" value="1">
                                        <label class="form-check-label" for="T_039_1">gigi palsu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_039" id="T_039_2" value="2">
                                        <label class="form-check-label" for="T_039_2">Lainnya</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">2. PEMERIKSAAN FISIK</div>
                            </div>
                            <div class="container">
                                <div class="mb-1">
                                    <label class="col-2" for="">Mata</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_040" id="T_040_0" value="0">
                                        <label class="form-check-label" for="T_040_0">Pandangan kabur</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_040" id="T_040_1" value="1">
                                        <label class="form-check-label" for="T_040_1"> Lainnya</label>
                                        <input type="text" id="V_103" name="V_104">
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Sclera</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_0" value="0">
                                        <label class="form-check-label" for="T_041_0"> Icterik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_1" value="1">
                                        <label class="form-check-label" for="T_041_1"> Anicterik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_2" value="2">
                                        <label class="form-check-label" for="T_041_2"> Konjungtiva</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_3" value="3">
                                        <label class="form-check-label" for="T_041_3"> Anemis</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_041" id="T_041_4" value="4">
                                        <label class="form-check-label" for="T_041_4"> Tak anemis</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Kepala</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_042" id="T_042_0" value="0">
                                        <label class="form-check-label" for="T_042_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_042" id="T_042_1" value="1">
                                        <label class="form-check-label" for="t_042_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Telinga</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_043" id="T_043_0" value="0">
                                        <label class="form-check-label" for="T_043_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_043" id="T_043_1" value="1">
                                        <label class="form-check-label" for="T_043_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Hidung</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_0" value="0">
                                        <label class="form-check-label" for="T_044_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_044" id="T_044_1" value="1">
                                        <label class="form-check-label" for="T_044_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Tenggorok</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_045" id="T_045_0" value="0">
                                        <label class="form-check-label" for="T_045_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_045" id="T_045_1" value="1">
                                        <label class="form-check-label" for="T_045_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Leher</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_046" id="T_046_0" value="0">
                                        <label class="form-check-label" for="T_046_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_046" id="T_046_1" value="1">
                                        <label class="form-check-label" for="T_046_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Dada</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_047" id="T_047_0" value="0">
                                        <label class="form-check-label" for="T_047_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_047" id="T_047_1" value="1">
                                        <label class="form-check-label" for="T_047_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Jantung</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_048" id="T_048_0" value="0">
                                        <label class="form-check-label" for="T_048_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_048" id="T_048_1" value="1">
                                        <label class="form-check-label" for="T_048_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Paru-paru</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_049" id="T_049_0" value="0">
                                        <label class="form-check-label" for="T_049_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_049" id="T_049_1" value="1">
                                        <label class="form-check-label" for="T_049_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Abdomen</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_050" id="T_050_0" value="0">
                                        <label class="form-check-label" for="T_050_0"> Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_050" id="T_050_1" value="1">
                                        <label class="form-check-label" for="T_050_1"> Kelainan</label>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="col-2" for="">Anggota gerak atas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_051" id="T_051_0" value="0">
                                        <label class="form-check-label" for="T_051_0"> Oedema</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_051" id="T_051_1" value="1">
                                        <label class="form-check-label" for="T_051_1"> Tidak Oedema</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_051" id="T_051_2" value="2">
                                        <input type="text" id="V_105" name="V_105">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-2" for="">Anggota gerak bawah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_052" id="T_052_0" value="0">
                                        <label class="form-check-label" for="T_052_0"> oedema</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_052" id="T_052_1" value="1">
                                        <label class="form-check-label" for="T_052_1"> tidak oedema</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="T_052" id="T_052_2" value="1">
                                        <input type="text" id="V_106" name="V_106">
                                    </div>
                                </div>
                            </div>
                            <p>3. PEMERIKSAAN KHUSUS</p>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-2">a. Dada</div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="T_053" id="T_053_0" value="0">
                                        <label class="form-check-label" for="T_053_0">Mammae Simetris / Asimetris</label>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_053" id="T_053_1" value="1">
                                        <label class="form-check-label" for="T_053_1">Areola Hiperpigmentasi</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="T_053" id="T_053_2" value="2">
                                        <label class="form-check-label" for="T_053_2">Putting susu menonjol / Tidak</label>
                                    </div>
                                    <div class="col-3">
                                        <input class="form-check-input" type="radio" name="T_053" id="T_053_3" value="3">
                                        <label class="form-check-label" for="T_053_3">Kolostrum (+) / (-)</label>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col">b. Abdomen</div>
                                </div>
                                <div class="container">
                                    <div class="row mb-1">
                                        <div class="col-2">Inspeksi</div>
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_054" id="T_054_0" value="0">
                                                <label class="form-check-label" for="T_054_0">Luka bekas OP</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_054" id="T_054_1" value="1">
                                                <label class="form-check-label" for="T_054_1">Linea Alba</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_054" id="T_054_2" value="2">
                                                <label class="form-check-label" for="T_054_2">Linea Nigra</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_054" id="T_054_3" value="3">
                                                <label class="form-check-label" for="T_054_3">Striae Lividae</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_054" id="T_054_4" value="4">
                                                <label class="form-check-label" for="T_054_4">Striae Albican</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-2">Palpasi</div>
                                        <div class="col-2">: Leopold I</div>
                                        <div class="col">
                                            <label for="V_107">: TFU</label>
                                            <input type="text" id="V_107" name="V_107" style="width:100px"> cm
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-2"></div>
                                        <div class="col-2">Leopold II</div>
                                        <div class="col">
                                            : <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_055" id="T_055_0" value="0">
                                                <label class="form-check-label" for="T_055_0">Punggung kanan</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_055" id="T_055_1" value="1">
                                                <label class="form-check-label" for="T_055_1">Punggung kiri</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-2"></div>
                                        <div class="col-2">Leopold III</div>
                                        <div class="col">
                                            : <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_056" id="T_056_0" value="0">
                                                <label class="form-check-label" for="T_056_0">Kepala</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_056" id="T_056_1" value="1">
                                                <label class="form-check-label" for="T_056_1">Bokong</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-2"></div>
                                        <div class="col-2">Leopold IV</div>
                                        <div class="col">
                                            : <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_057" id="T_057_0" value="0">
                                                <label class="form-check-label" for="T_057_0">Floating</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_057" id="T_057_1" value="1">
                                                <label class="form-check-label" for="T_057_1">Engageds</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-2">Auskultasi</div>
                                        <div class="col-auto">
                                            <label for="V_108">: Djj : </label>
                                            <input type="text" id="V_108" name="V_108" style="width:100px"> kali/menit
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_058" id="T_058_0" value="0">
                                                <label class="form-check-label" for="T_058_0">teratur</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_058" id="T_058_1" value="1">
                                                <label class="form-check-label" for="T_058_1">tidak teratur</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-2">HIS / Kontraksi</div>
                                        <div class="col-3">
                                            : <input type="text" id="V_109" name="V_109" style="width:100px"> kali/menit
                                        </div>
                                        <div class="col-3">
                                            <label for="V_">Durasi : </label>
                                            <input type="text" id="V_110" name="V_110" style="width:100px"> detik
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_059" id="T_059_0" value="0">
                                                <label class="form-check-label" for="T_059_0">kuat</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_059" id="T_059_1" value="1">
                                                <label class="form-check-label" for="T_059_1">sedang</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="T_059" id="T_059_2" value="2">
                                                <label class="form-check-label" for="T_059_2">lemah</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1">c. Ano Genital</div>
                                <div class="container">
                                    <div class="mb-1">
                                        <label class="col-2" for="">Inspeksi</label>
                                        <label>: Pengeluaran per vagina </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_60" id="T_60_0" value="0">
                                            <label class="form-check-label" for="T_60_0">Darah</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_60" id="T_60_1" value="1">
                                            <label class="form-check-label" for="T_60_1">Lendir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_60" id="T_60_2" value="2">
                                            <label class="form-check-label" for="T_60_2">Air Ketuban</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="T_60" id="T_60_3" value="3">
                                            <label class="form-check-label" for="T_60_3">Lainnya</label>
                                            <input type="text" id="V_111" name="V_111">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-2">
                                            <label for="">Vagina Toucher</label>
                                        </div>
                                        <div class="col">
                                            : <input type="text" id="V_112" name="V_112" style="width: 750px">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-2">
                                            <label for="">Lain-lain</label>
                                        </div>
                                        <div class="col">
                                            : <input type="text" id="V_113" name="V_113" style="width: 750px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">4. PEMERIKSAAAN PENUNJANG</div>
                            </div>
                            <div class="container">
                                <div class="row mb-1">
                                    <div class="col-2">a. Laboraturium</div>
                                    <div class="col-2">
                                        : HB <input type="text" id="V_114" name="V_114" style="width: 100px;">
                                    </div>
                                    <div class="col-1">Leukosit</div>
                                    <div class="col-3">
                                        : <input type="text" id="V_115" name="V_115" style="width: 150px;">
                                    </div>
                                    <div class="col-2">HTC</div>
                                    <div class="col-2">
                                        : <input type="text" id="V_116" name="V_116" style="width: 120px;">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">Eritrosit</div>
                                    <div class="col-2">
                                        : <input type="text" id="V_117" name="V_117" style="width: 120px;">
                                    </div>
                                    <div class="col-1">Trombosit</div>
                                    <div class="col-3">
                                        : <input type="text" id="V_118" name="V_118" style="width: 150px;">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-2">b. Golongan darah</div>
                                    <div class="col-2">
                                        : <input type="text" id="V_119" name="V_119" style="width: 120px;">
                                    </div>
                                    <div class="col-1">PT</div>
                                    <div class="col-3">
                                        : <input type="text" id="V_120" name="V_120" style="width: 150px;">
                                    </div>
                                    <div class="col-2">APTT</div>
                                    <div class="col-2">
                                        : <input type="text" id="V_121" name="V_121" style="width: 120px;">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"></div>
                                    <div class="col-1">HBSAG</div>
                                    <div class="col-3">
                                        : <input type="text" id="V_122" name="V_122" style="width: 150px;">
                                    </div>
                                    <div class="col-2">Protein Urine</div>
                                    <div class="col-2">
                                        : <input type="text" id="V_123" name="V_123" style="width: 120px;">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-2">
                                        <label for="V_124">Lainnya</label>
                                    </div>
                                    <div class="col">
                                        : <input type="text" id="V_124" name="V_124" style="width: 785px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h6>D. RESIKO JATUH</h6>
                        <table class="table table-bordered mt-0 mb-0" style="border:1px solid black">
                            <tr class="text-center">
                                <th rowspan="19" width="3%"></th>
                                <th width="5%">No</th>
                                <th colspan="2">ASESMEN FAKTOR RESIKO JATUH DEWASA</th>
                                <th width="15%">Nilai</th>
                                <th>Skor Pasien</th>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="2" class="text-center">1</td>
                                <td rowspan="2" width="25%">Riwayat jatuh (tidak termasuk) kecelakaan kerja dan lalu lintas</td>
                                <td>Tidak</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_061" name="t_061" value="0"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Ya</td>
                                <td class="text-center">25</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_061" name="t_061" value="25"></td>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="2" class="text-center">2</td>
                                <td rowspan="2" width="25%">Diagnose Sekunder</td>
                                <td>Tidak</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_062" name="t_062" value="0"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Ya</td>
                                <td class="text-center">25</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_062" name="t_062" value="25"></td>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="3" class="text-center">3</td>
                                <td rowspan="3" width="25%">Menggunakan Alat Bantu</td>
                                <td>Tidak ada/Bedrest/dibantu perawat</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_063" name="t_063" value="0"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Kruk/Tungkat</td>
                                <td class="text-center">15</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_063" name="t_063" value="15"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Alat sekitar mis : Kursi Roda (Perabot)</td>
                                <td class="text-center">25</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_063" name="t_063" value="25"></td>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="3" class="text-center">4</td>
                                <td rowspan="3" width="25%">Gaya Berjalan</td>
                                <td>Normal/Bedrest/Kursi roda</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_064" name="t_064" value="0"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Lemah</td>
                                <td class="text-center">10</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_064" name="t_064" value="10"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Terganggu</td>
                                <td class="text-center">20</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_064" name="t_064" value="20"></td>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="2" class="text-center">5</td>
                                <td rowspan="2" width="25%">Status mental</td>
                                <td>Menyadari kemampan</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_065" name="t_065" value="0"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Dimensia(Lupa)/Agitasi/Konfius(gelisah)</td>
                                <td class="text-center">15</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_065" name="t_065" value="15"></td>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="2" class="text-center">6</td>
                                <td rowspan="2" width="25%">Menggunakan infuse/ heparin (pengencer darah)</td>
                                <td>Tidak</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_066" name="t_066" value="0"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Ya</td>
                                <td class="text-center">20</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_066" name="t_066" value="20"></td>
                            </tr>

                            <tr style="vertical-align: middle;">
                                <td rowspan="3" class="text-center">7</td>
                                <td rowspan="3" width="25%">Medikasi</td>
                                <td>Sedative</td>
                                <td class="text-center">10</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_067" name="t_067" value="10"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Post anastesiumum dan reginal dalam 24 jam terakhir</td>
                                <td class="text-center">20</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_067" name="t_067" value="20"></td>
                            </tr>
                            <tr style="vertical-align: middle;">
                                <td>Tidak</td>
                                <td class="text-center">0</td>
                                <td class="text-center"><input class="form-check-input" type="radio" id="t_067" name="t_067" value="0"></td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="3">
                                    <h6>TOTAL SKOR</h6>
                                </td>
                                <td>190</td>
                                <td>
                                    <input class="form-control" type="text" name="t_068" id="t_068" readonly>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="6">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 text-center">
                                            <b>Resiko Jatuh : </b>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_069_1" name="t_069" value="1">
                                                <b><label for="t_069_1">Rendah, skor : 0-24</label></b>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_069_2" name="t_069" value="2">
                                                <b><label for="t_069_2">Sedang, skor : 33-34</label></b>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="t_069_3" name="t_069" value="3">
                                                <b><label for="t_069_3">Tinggi, > 44</label></b>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered mt-0 mb-0" style="border:1px solid black">
                            <tr>
                                <td colspan="6">
                                    <h6>E. ASESMEN NYERI</h6>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-1">
                                                <label>Nyeri : </label>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="t_070_0" name="t_070" value="0">
                                                    <label for="t_070_0">Tidak</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="t_070_1" name="t_070" value="1">
                                                            <label for="t_070_1">Ya, Bila Ya, Skala : </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="V_125" id="V_125">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="5" width="3%"></td>
                                <td>Deskripsi Nyeri</td>
                                <td>P</td>
                                <td>
                                    <input class="form-control" type="text" name="V_126" id="V_126">
                                </td>
                                <td colspan="2">Karakteristik Nyeri</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Q</td>
                                <td>
                                    <input class="form-control" type="text" name="V_127" id="V_127">
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_071_0" name="t_071" value="0">
                                        <label for="t_071_0">Tidak Nyeri</label>
                                    </div>
                                </td>
                                <td>Skor : 0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>R</td>
                                <td>
                                    <input class="form-control" type="text" name="V_128" id="V_128">
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_071_1" name="t_071" value="1">
                                        <label for="t_071_1">Nyeri Ringan</label>
                                    </div>
                                </td>
                                <td>Skor : 1-3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>S</td>
                                <td>
                                    <input class="form-control" type="text" name="V_129" id="V_129">
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_071_2" name="t_071" value="2">
                                        <label for="t_071_2">Nyeri Sedang</label>
                                    </div>
                                </td>
                                <td>Skor : 4-6</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>T</td>
                                <td>
                                    <input class="form-control" type="text" name="V_130" id="V_130">
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="t_071_3" name="t_071" value="3">
                                        <label for="t_071_3">Nyeri Berat</label>
                                    </div>
                                </td>
                                <td>Skor : 7-10</td>
                            </tr>
                        </table>
                        <table class="table table-bordered mt-0 mb-0" style="border:1px solid black">
                            <tr>
                                <td colspan="4">
                                    <h6>F. ASESMEN NUTRISI</h6>
                                    <div class="container">
                                        <p>Asesmen nutrisi pasien dewasa (Malnutrition Universal Scoring Treatment)</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td width="3%" rowspan="5"></td>
                                <th width="45%">PENILAIAN</th>
                                <th width="15%">SKOR</th>
                                <th>Resiko Mal Nutrisi</th>
                            </tr>
                            <tr>
                                <td>IMT</td>
                                <td>
                                    <select class="form-select" name="T_072">
                                        <option selected>Pilih</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </td>
                                <td rowspan="3" style="vertical-align: middle;">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="T_073_0" name="t_073" value="0">
                                        <label for="t_073_0">Resiko rendah Skor : 0</label>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="t_073_1" name="t_073" value="1">
                                        <label for="t_073_1">Resiko sedang skor : 1</label>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="t_073_2" name="t_073" value="2">
                                        <label for="t_073_2">Resiko, tinggi, skor : 2</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Presentasi kehilangan BB yang tidak diharapkan</td>
                                <td>
                                    <select class="form-select" name="t_074">
                                        <option selected>Pilih</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Efek penyakit yang diterima</td>
                                <td>
                                    <select class="form-select" name="t_075">
                                        <option selected>Pilih</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Skor</td>
                                <td><input class="form-control" type="text" name="t_076" id="t_076" readonly></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h6><strong>G. ANALISA DAN PENATALAKSANAAN KEBIDANAN</strong></h6>
                        <textarea name="V_131" id="V_131" class="form-control" rows="3"></textarea>
                    </td>
                </tr>
            </table>
            </table>
            <table class="table table-bordered mt-0" style="border: 1px;">
                <tr>
                    <td class="text-center" style="vertical-align: middle;" width="10px">
                        Tanggal/Jam
                    </td>
                    <td>

                    </td>
                    <td class="text-center" style="vertical-align: middle;" width="10px">
                        Jam Diberikan
                    </td>
                    <td class="text-center" style="vertical-align: middle;">
                        Paraf
                    </td>
                </tr>
                <tbody id="tambah">
                    <tr>
                        <td>
                            <input type="datetime-local" class="form-control" id="V_132" name="V_132">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="V_134" name="V_134">
                        </td>
                        <td>
                            <input type="time" class="form-control" id="V_135" name="V_135">
                        </td>
                        <td class="text-center">
                            <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                            <input type="hidden" name="TTD" id="TTD">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <div class="container text-center mt-3">
                                <button class="btn btn-primary" type="button" onclick="addRow1('tambah')">Tambah</button>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
    <script type="text/javascript">
        // JavaScript Document
        var i = 136;
        var no = 4;

        function addRow(tableID) {

            i1 = i + 1;
            i2 = i + 2;
            i3 = i + 3;
            i4 = i + 4;
            i5 = i + 5;
            i6 = i + 6;
            i7 = i + 7;
            i8 = i + 8;
            i9 = i + 9;
            no1 = no + 1;

            $("#" + tableID).append($("<tr>")
                .append($("<td>").html(no1))
                .append($("<td>").html('<div class="form-group"><input type="date" class="form-control" id="V_' + i2 + '" name="V_' + i2 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i3 + '" name="V_' + i3 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i4 + '" name="V_' + i4 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i5 + '" name="V_' + i5 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i6 + '" name="V_' + i6 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i7 + '" name="V_' + i7 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i8 + '" name="V_' + i8 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i9 + '" name="V_' + i9 + '"></div>'))
            )
            i += 9;
            no += 1;
        }
    </script>

    <script type="text/javascript">
        // JavaScript Document
        var j = 156;
        var canvas = 0;
        var TTD = 0;

        function addRow1(tableID) {

            j1 = j + 1;
            j2 = j + 2;
            canvas1 = canvas + 1;
            TTD1 = TTD + 1

            $("#" + tableID).append($("<tr>")
                .append($("<td>").html('<div class="form-group"><input type="datetime-local" class="form-control" id="V_' + j + '" name="V_' + j + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + j1 + '" name="V_' + j1 + '"></div>'))
                .append($("<td>").html('<div class="form-group"><input type="time" class="form-control" id="V_' + j2 + '" name="V_' + j2 + '"></div>'))
                .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas1 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD1 + '"></div>'))

            )
            j += 4;
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
</body>

</html>