<?php

namespace App\Controllers;

use App\Models\pku_model;

class PKU extends BaseController
{
    public function halamanform2()
    {
        return view('pku/halamanobsteric');
    }

    public function form1()
    {
        return view('pku/obsteric');
    }

    public function form2()
    {
        return view('pku/assessment_saraf');
    }

    public function form3()
    {
        return view('pku/assessment_tht');
    }

    public function form4()
    {
        return view('pku/assessment_pasien_terminal');
    }

    public function form5()
    {
        return view('pku/assessment_gizi_anak');
    }

    public function form6()
    {
        return view('pku/assessment_gizi_dewasa');
    }
}
