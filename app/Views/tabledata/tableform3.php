<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pasien</title>


</head>

<body>
    <div class="container">
        <a type="button" class="btn btn-success my-3" href="<?= base_url('pasien/halamandata') ?>"><i class="bi bi-arrow-left"></i></a>
        <h1>Data Pasien</h1>
        <table class="table table-bordered">
            <thead>
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Body ID</th>
                    <th scope="col">No. MR</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($viewdata as $datatampil) : ?>
                    <tr align="center">
                        <td><?= $i++; ?></td>
                        <td><?= $datatampil['BODY_ID'] ?></td>
                        <td><?= $datatampil['NO_REGISTRATION'] ?></td>
                        <td><?= $datatampil['THENAME'] ?></td>
                        <td style='white-space: nowrap'>
                            <a href="<?= base_url('') ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="bi bi-eye-fill"></i></i></a>
                            <a href="<?= base_url('') ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Update"><i class="bi bi-bookmark-plus-fill"></i></a>
                            <a href="<?= base_url('') ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
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