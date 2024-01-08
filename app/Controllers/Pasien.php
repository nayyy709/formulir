<?php

namespace App\Controllers;

use App\Models\Pasien_model;

class Pasien extends BaseController
{

    public function halaman()
    {
        return view('halamanutama');
    }

    public function halamandata()
    {
        return view('halamandatatampil');
    }

    public function halamanform1()
    {
        return view('dashboard');
    }

    public function tampildata1()
    {
        $datapasien = new Pasien_model();
        $all_data = $datapasien->findAll();

        return view('tampildata/tampildataform1', ['all_data' => $all_data]);
    }

    public function tampildata2()
    {
        $datapasien = new Pasien_model();
        $all_data = $datapasien->findAll();

        return view('tampildata/tampildataform2', ['all_data' => $all_data]);
    }

    public function tampildata3()
    {
        $datapasien = new Pasien_model();
        $all_data = $datapasien->findAll();

        return view('tampildata/tampildataform3', ['all_data' => $all_data]);
    }

    public function tampildata4()
    {
        $datapasien = new Pasien_model();
        $all_data = $datapasien->findAll();

        return view('tampildata/tampildataform4', ['all_data' => $all_data]);
    }

    public function form1($NOID)
    {
        $datapasien = new Pasien_model();
        $data = $datapasien->find($NOID);

        return view('form/formulir1', ['data' => $data]);
    }

    public function form2($NOID)
    {
        $datapasien = new Pasien_model();
        $data = $datapasien->find($NOID);

        return view('form/formulir2', ['data' => $data]);
    }

    public function form3($NOID)
    {
        $datapasien = new Pasien_model();
        $data = $datapasien->find($NOID);

        return view('form/formulir3', ['data' => $data]);
    }

    public function form4($NOID)
    {
        $datapasien = new Pasien_model();
        $data = $datapasien->find($NOID);

        return view('form/formulir4', ['data' => $data]);
    }
}
