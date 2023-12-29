<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien_model extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'NOID';
    protected $returnType = 'array';
    protected $allowedFields = ['NO_REGISTRATION', 'CLASS_ROOM_ID', 'EXAMINATION_DATE', 'ANAMNASE', 'PEMERIKSAAN', 'AGEYEAR', 'AGEMONTH', 'AGEDAY', 'THENAME', 'THEADDRESS', 'GENDER', 'ALLOANAMNESIS_CONTACT', 'THENIK', 'DATE_OF_BIRTH'];
}
