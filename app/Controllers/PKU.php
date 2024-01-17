<?php

namespace App\Controllers;

use App\Models\pku_model;

class PKU extends BaseController
{
    public function halamanform2()
    {
        return view('pku/halamanpku');
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

    public function form7()
    {
        return view('rmj/assessment_gigi_dan_mulut');
    }

    public function form8()
    {
        return view('rmj/assessment_keperawatan_rawat_jalan');
    }

    public function form9()
    {
        return view('pku/assessment_early_warning_scoring_system');
    }

    public function form10()
    {
        return view('pku/evaluasi_awal_case_manager');
    }
}
