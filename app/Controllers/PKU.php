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
}
