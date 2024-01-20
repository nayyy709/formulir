<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERAH TERIMA BAYI RAWAT GABUNG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <a href="<?= base_url('pku/halamanform2') ?>" class="btn btn-success mt-3"><i class="bi bi-arrow-left"></i></a>
        <div class="row align-items-center">
            <p class="text-end">RM 7.6</p>
        </div>
        <form action="" method="">
            <table class="table">
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
            </table>
            <h4 class="text-center"><strong>SERAH TERIMA BAYI RAWAT GABUNG</strong></h4>
            <div class="row">
                <div class="col-md-3">
                    <label for="V_01">Kelas/Bangsal :</label>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="V_01" name="V_01">
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-bordered mt-2" style="border: 1px;">
                    <thead>
                        <th class="text-center" style="vertical-align: middle;">
                            TANGGAL
                        </th>
                        <th class="text-center" style="vertical-align: middle;">
                            JAM DISERAHKAN KE IBU
                        </th>
                        <th class="text-center" style="vertical-align: middle;">
                            TANDA TANGAN IBU
                        </th>
                        <th class="text-center" style="vertical-align: middle;">
                            TANDA TANGAN PETUGAS
                        </th>
                        <th class="text-center" style="vertical-align: middle;">
                            JAM DISERAHKAN KE PETUGAS
                        </th>
                        <th class="text-center" style="vertical-align: middle;">
                            TANDA TANGAN IBU
                        </th>
                        <th class="text-center" style="vertical-align: middle;">
                            TANDA TANGAN PETUGAS
                        </th>
                    </thead>
                    <tbody id="addTable">
                        <tr>
                            <td>
                                <input type="date" class="form-control" id="V_10" name="V_10">
                            </td>
                            <td>
                                <input type="time" class="fom-control" id="V_11" name="V_11">
                            </td>
                            <td>
                                <canvas id="canvas" width="150" height="90" style="border:1px solid #000;"></canvas>
                                <input type="hidden" name="TTD" id="TTD">
                            </td>
                            <td>
                                <canvas id="canvas1" width="150" height="90" style="border:1px solid #000;"></canvas>
                                <input type="hidden" name="TTD1" id="TTD1">
                            </td>
                            <td>
                                <input type="time" class="form-control" id="V_12" name="V_12">
                            </td>
                            <td>
                                <canvas id="canvas2" width="150" height="90" style="border:1px solid #000;"></canvas>
                                <input type="hidden" name="TTD2" id="TTD2">
                            </td>
                            <td>
                                <canvas id="canvas3" width="150" height="90" style="border:1px solid #000;"></canvas>
                                <input type="hidden" name="TTD3" id="TTD3">
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="container text-center mt-3">
                                    <button class="btn btn-primary" type="button" onclick="addRow('addTable')">Tambah</button>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    </div>
</body>

<script type="text/javascript">
    // JavaScript Document
    var i = 13;
    var canvas = 3;
    var TTD = 3;

    function addRow(tableID) {

        i1 = i + 1;
        i2 = i + 2;
        canvas1 = canvas + 1;
        canvas2 = canvas + 2;
        canvas3 = canvas + 3;
        canvas4 = canvas + 4;
        TTD1 = TTD + 1;
        TTD2 = TTD + 2;
        TTD3 = TTD + 3;
        TTD4 = TTD + 4;

        $("#" + tableID).append($("<tr>")
            .append($("<td>").html('<div class="form-group"><input type="date" class="form-control" id="V_' + i + '" name="V_' + i + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="text" class="form-control" id="V_' + i1 + '" name="V_' + i1 + '"></div>'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas1 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD1 + '"></div>'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas2 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD2 + '"></div>'))
            .append($("<td>").html('<div class="form-group"><input type="time" class="form-control" id="V_' + i2 + '" name="V_' + i2 + '"></div>'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas3 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD3 + '"></div>'))
            .append($("<td class='text-center'>").html('<canvas width="150" height="90" style="border:1px solid #000;" id="canvas' + canvas4 + '"></canvas><div class="form-group"><input type="hidden" class="form-control" id="TTD_' + TTD4 + '"></div>'))
        )
        i += 3;
        canvas += 4;
        TTD += 4;
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