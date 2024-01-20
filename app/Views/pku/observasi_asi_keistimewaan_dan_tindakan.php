<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORMULIR OBSERVASI, KEISITIMEWAAN, DAN TINDAKAN</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

</head>

<body>

    <div class="container-fluid flex mt-5">
        <form action="<?= site_url('#') ?>" method="post" autocomplete="off">
            <?php csrf_field(); ?>
            <h6 align="right">RM 7.4</h6>
            <table class="table mb-2">
                <tr>
                    <td align="center" width="20%">
                        <img class="mt-2" src="<?= base_url('uploads/pku.png') ?>" width="90px">
                        <p class="mt-2">Sehat-Amanah <br> Tanggung Jawab-Islami</p>
                    </td>
                    <td width="60%">
                        <h5 class="mt-4">RS. PKU MUHAMMADIYAH SAMPANGAN</h5>
                        <p>Semanggi RT 002 / RW 020 Pasar Kliwon, Surakarta <br> Telp 0271-633894 Fax. : 0271-630229 <br> Jawa Tengah 57117</p>
                    </td>
                    <td width="20%">
                        <div class="col-md-12 align-items-center" style="padding-top:30px">
                            <div class="container mt-1" style="border:1px solid black; padding-top:40px; height:100px; border-radius: 10px">
                                <p class="text-center">Label Identitas Pasien</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h6 class="text-center ">FORMULIR OBSERVASI, KEISITIMEWAAN, DAN TINDAKAN</h6>
                    </td>
                </tr>
            </table>
            <div class="bd-example">
                <div class="table-responsive">
                    <button class="btn btn-success" type="button" onclick="addRow('addTable')">Tambah Baris</button>
                    <table class="table table-bordered mt-3" style="border:1px solid black">
                        <tr class="text-center" style="vertical-align: middle">
                            <td rowspan="2">Tanggal/Jam</td>
                            <td colspan="4">Tanda Vital</td>
                            <td rowspan="2">Kesadaran</td>
                            <td rowspan="2">SPO2 (Saturasi)</td>
                            <td rowspan="2">Pupil</td>
                            <td colspan="2">Reflek</td>
                            <td rowspan="2">Oral Hygiene</td>
                            <td rowspan="2">Mandi</td>
                            <td rowspan="2">Buang Air Kecil</td>
                            <td rowspan="2">Buang Air Besar</td>
                            <td rowspan="2">Mobilisasi</td>
                            <td rowspan="2">Nutrisi</td>
                            <td rowspan="2">Nama/TTD</td>
                            <td rowspan="2">Jam</td>
                            <td rowspan="2">Observasi, Keistimewaan, Tindakan</td>
                            <td rowspan="2">Nama/TTD</td>
                        </tr>
                        <tr class="text-center" style="vertical-align: middle">
                            <td>TENSI</td>
                            <td>NADI</td>
                            <td>SUHU</td>
                            <td>PERNAFASAN</td>
                            <td>MOTORIK</td>
                            <td>SENSORIK</td>
                        </tr>
                        <tbody id="addTable">
                            <tr>
                                <td>
                                    <input class="form-control" type="datetime-local" name="V_01" id="V_01">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_02" id="V_02">
                                    <p style="vertical-align: middle;" class="text-center mb-0">/</p>
                                    <input class="form-control" type="text" name="V_03" id="V_03">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_04" id="V_04">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_05" id="V_05">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_06" id="V_06">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_07" id="V_07">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_08" id="V_08">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_09" id="V_09">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_10" id="V_10">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_11" id="V_11">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_12" id="V_12">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_13" id="V_13">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_14" id="V_14">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_15" id="V_15">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_16" id="V_16">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_17" id="V_17">
                                </td>
                                <td>
                                    <canvas id="canvas" width="150" height="75" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" id="ttd" name="ttd">
                                    <input class="form-control" type="text" name="V_18" id="V_18">
                                </td>
                                <td>
                                    <input class="form-control" type="time" name="V_19" id="V_19">
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="V_20" id="V_20">
                                </td>
                                <td>
                                    <canvas id="canvas1" width="150" height="75" style="border:1px solid #000;"></canvas>
                                    <input type="hidden" id="ttd_1" name="ttd_1">
                                    <input class="form-control" type="text" name="V_21" id="V_21">
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="20">

                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
    // JavaScript Document
    var i = 22;
    var canvas = 2;
    var TTD = 2;

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
        i10 = i + 10;
        i11 = i + 11;
        i12 = i + 12;
        i13 = i + 13;
        i14 = i + 14;
        i15 = i + 15;
        i16 = i + 16;
        i17 = i + 17;
        i18 = i + 18;
        i19 = i + 19;
        i20 = i + 20;
        canvas1 = canvas + 1;
        canvas2 = canvas + 2;
        TTD1 = TTD + 1;
        TTD2 = TTD + 2;

        $("#" + tableID).append($("<tr>")
            .append($("<td>").html('<div class="form-group"><input type="datetime-local" class="form-control" id="V_' + i + '" name="V_' + i + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i1 + '" name="V_' + i1 + '"></div> <p style="vertical-align: middle;" class="text-center mb-0">/</p> <input type="text" class="form-control" id="V_' + i2 + '" name="V_' + i2 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i3 + '" name="V_' + i3 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i4 + '" name="V_' + i4 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i5 + '" name="V_' + i5 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i6 + '" name="V_' + i6 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i7 + '" name="V_' + i7 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i8 + '" name="V_' + i8 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i9 + '" name="V_' + i9 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i10 + '" name="V_' + i10 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i11 + '" name="V_' + i11 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i12 + '" name="V_' + i12 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i13 + '" name="V_' + i13 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i14 + '" name="V_' + i14 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i15 + '" name="V_' + i15 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i16 + '" name="V_' + i15 + '"></div>'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas1 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD1 + '"></div> <div class="form-group"><input type="text" class="form-control" id="V_' + i17 + '" name="V_' + i17 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i18 + '" name="V_' + i18 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i19 + '" name="V_' + i19 + '"></div>'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas2 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD2 + '"></div> <div class="form-group"><input type="text" class="form-control" id="V_' + i20 + '" name="V_' + i20 + '"></div>'))
        )
        i += 20;
        canvas += 2;
        TTD += 2;
    }
</script>

<script>
    var canvas = document.getElementById('canvas');
    const canvasDataInput = document.getElementById('ttd');
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

        // Draw a line
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
    const canvasDataInput1 = document.getElementById('ttd_1');
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

</html>