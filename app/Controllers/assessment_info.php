<?php

namespace App\Controllers;

use App\Models\assessment_info_model;

class assessment_info extends BaseController
{


    public function add_data()
    {
        $tambahdata = new assessment_info_model();
        $tambahdata->save($this->request->getVar());

        return redirect()->to('pasien/tampildata1');
    }

    public function assessment1()
    {
        $datatampil = new assessment_info_model();
        $viewdata = $datatampil->getDataByValue('Form1');

        return view('tabledata/tableform1', ['viewdata' => $viewdata]);
    }

    public function assessment2()
    {
        $datatampil = new assessment_info_model();
        $viewdata = $datatampil->getDataByValue('Form2');

        return view('tabledata/tableform2', ['viewdata' => $viewdata]);
    }

    public function assessment3()
    {
        $datatampil = new assessment_info_model();
        $viewdata = $datatampil->getDataByValue('Form3');

        return view('tabledata/tableform3', ['viewdata' => $viewdata]);
    }

    public function assessment4()
    {
        $datatampil = new assessment_info_model();
        $viewdata = $datatampil->getDataByValue('Form4');

        return view('tabledata/tableform4', ['viewdata' => $viewdata]);
    }
}
