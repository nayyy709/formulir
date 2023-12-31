<?php

namespace App\Controllers;

use App\Models\assessment_info_model;

class assessment_info extends BaseController
{


    public function add_data()
    {
        $tambahdata = new assessment_info_model();
        $id = $tambahdata->generate_id();
        // versi wpu
        $tambahdata->save([
            'FORM' => $this->request->getVar('FORM'),
            'BODY_ID' => $id,
            'ORG_UNIT_CODE' => $this->request->getVar('ORG_UNIT_CODE'),
            'PASIEN_DIAGNOSA_ID' => $this->request->getVar('PASIEN_DIAGNOSA_ID'),
            'DIAGNOSA_ID' => $this->request->getVar('DIAGNOSA_ID'),
            'NO_REGISTRATION' => $this->request->getVar('NO_REGISTRATION'),
            'VISIT_ID' => $this->request->getVar('VISIT_ID'),
            'BILL_ID' => $this->request->getVar('BILL_ID'),
            'CLINIC_ID' => $this->request->getVar('CLINIC_ID'),
            'CLASS_ROOM_ID' => $this->request->getVar('CLASS_ROOM_ID'),
            'BED_ID' => $this->request->getVar('BED_ID'),
            'IN_DATE' => $this->request->getVar('IN_DATE'),
            'EXIT_DATE' => $this->request->getVar('EXIT_DATE'),
            'KELUAR_ID' => $this->request->getVar('KELUAR_ID'),
            'EXAMINATION_DATE' => $this->request->getVar('EXAMINATION_DATE'),
            'TEMPERATURE' => $this->request->getVar('TEMPERATURE'),
            'TENSION_UPPER' => $this->request->getVar('TENSION_UPPER'),
            'TENSION_BELOW' => $this->request->getVar('TENSION_BELOW'),
            'NADI' => $this->request->getVar('NADI'),
            'NAFAS' => $this->request->getVar('NAFAS'),
            'WEIGHT' => $this->request->getVar('WEIGHT'),
            'HEIGHT' => $this->request->getVar('HEIGHT'),
            'ARM_DIAMETER' => $this->request->getVar('ARM_DIAMETER'),
            'ANAMNASE' => $this->request->getVar('ANAMNASE'),
            'PEMERIKSAAN' => $this->request->getVar('PEMERIKSAAN'),
            'TERAPHY_DESC' => $this->request->getVar('TERAPHY_DESC'),
            'INSTRUCTION' => $this->request->getVar('INSTRUCTION'),
            'MEDICAL_TREATMENT' => $this->request->getVar('MEDICAL_TREATMENT'),
            'EMPLOYEE_ID' => $this->request->getVar('EMPLOYEE_ID'),
            'DESCRIPTION' => $this->request->getVar('DESCRIPTION'),
            'MODIFIED_DATE' => $this->request->getVar('MODIFIED_DATE'),
            'MODIFIED_BY' => $this->request->getVar('MODIFIED_BY'),
            'MODIFIED_FROM' => $this->request->getVar('MODIFIED_FROM'),
            'STATUS_PASIEN_ID' => $this->request->getVar('STATUS_PASIEN_ID'),
            'AGEYEAR' => $this->request->getVar('AGEYEAR'),
            'AGEMONTH' => $this->request->getVar('AGEMONTH'),
            'AGEDAY' => $this->request->getVar('AGEDAY'),
            'THENAME' => $this->request->getVar('THENAME'),
            'THEADDRESS' => $this->request->getVar('THEADDRESS'),
            'THEID' => $this->request->getVar('THEID'),
            'ISRJ' => $this->request->getVar('ISRJ'),
            'GENDER' => $this->request->getVar('GENDER'),
            'DOCTOR' => $this->request->getVar('DOCTOR'),
            'KAL_ID' => $this->request->getVar('KAL_ID'),
            'PETUGAS_ID' => $this->request->getVar('PETUGAS_ID'),
            'PETUGAS' => $this->request->getVar('PETUGAS'),
            'ACCOUNT_ID' => $this->request->getVar('ACCOUNT_ID'),
            'SATURASI' => $this->request->getVar('SATURASI'),
            'ALLOANAMNESIS_CONTACT' => $this->request->getVar('ALLOANAMNESIS_CONTACT'),
            'ALLOANAMNESIS_RESULT' => $this->request->getVar('ALLOANAMNESIS_RESULT'),
            'ALLOANAMNESIS_HUB' => $this->request->getVar('ALLOANAMNESIS_HUB'),
            'DIAGNOSA_DESC' => $this->request->getVar('DIAGNOSA_DESC'),
            'DIAGNOSA_HISTORY' => $this->request->getVar('DIAGNOSA_HISTORY'),
            'DIAGNOSA_KERJA' => $this->request->getVar('DIAGNOSA_KERJA'),
            'DIAGNOSA_BANDING' => $this->request->getVar('DIAGNOSA_BANDING'),
            'RIWAYAT_OBAT' => $this->request->getVar('RIWAYAT_OBAT'),
            'RIWAYAT_ALERGI' => $this->request->getVar('RIWAYAT_ALERGI'),
            'T_01' => $this->request->getVar('T_01'),
            'T_02' => $this->request->getVar('T_02'),
            'T_03' => $this->request->getVar('T_03'),
            'T_04' => $this->request->getVar('T_04'),
            'T_05' => $this->request->getVar('T_05'),
            'T_06' => $this->request->getVar('T_06'),
            'T_07' => $this->request->getVar('T_07'),
            'T_08' => $this->request->getVar('T_08'),
            'T_09' => $this->request->getVar('T_09'),
            'T_010' => $this->request->getVar('T_010'),
            'T_011' => $this->request->getVar('T_011'),
            'T_012' => $this->request->getVar('T_012'),
            'T_013' => $this->request->getVar('T_013'),
            'T_014' => $this->request->getVar('T_014'),
            'T_015' => $this->request->getVar('T_015'),
            'T_016' => $this->request->getVar('T_016'),
            'T_017' => $this->request->getVar('T_017'),
            'T_018' => $this->request->getVar('T_018'),
            'T_019' => $this->request->getVar('T_019'),
            'T_020' => $this->request->getVar('T_020'),
            'T_021' => $this->request->getVar('T_021'),
            'T_022' => $this->request->getVar('T_022'),
            'T_023' => $this->request->getVar('T_023'),
            'T_024' => $this->request->getVar('T_024'),
            'T_025' => $this->request->getVar('T_025'),
            'T_026' => $this->request->getVar('T_026'),
            'T_027' => $this->request->getVar('T_027'),
            'T_028' => $this->request->getVar('T_028'),
            'T_029' => $this->request->getVar('T_029'),
            'T_030' => $this->request->getVar('T_030'),
            'T_031' => $this->request->getVar('T_031'),
            'T_032' => $this->request->getVar('T_032'),
            'T_033' => $this->request->getVar('T_033'),
            'T_034' => $this->request->getVar('T_034'),
            'T_035' => $this->request->getVar('T_035'),
            'T_036' => $this->request->getVar('T_036'),
            'T_037' => $this->request->getVar('T_037'),
            'T_038' => $this->request->getVar('T_038'),
            'T_039' => $this->request->getVar('T_039'),
            'T_040' => $this->request->getVar('T_040'),
            'T_041' => $this->request->getVar('T_041'),
            'T_042' => $this->request->getVar('T_042'),
            'T_043' => $this->request->getVar('T_043'),
            'T_044' => $this->request->getVar('T_044'),
            'T_045' => $this->request->getVar('T_045'),
            'T_046' => $this->request->getVar('T_046'),
            'T_047' => $this->request->getVar('T_047'),
            'T_048' => $this->request->getVar('T_048'),
            'T_049' => $this->request->getVar('T_049'),
            'T_050' => $this->request->getVar('T_050'),
            'V_01' => $this->request->getVar('V_01'),
            'V_02' => $this->request->getVar('V_02'),
            'V_03' => $this->request->getVar('V_03'),
            'V_04' => $this->request->getVar('V_04'),
            'V_05' => $this->request->getVar('V_05'),
            'V_06' => $this->request->getVar('V_06'),
            'V_07' => $this->request->getVar('V_07'),
            'V_08' => $this->request->getVar('V_08'),
            'V_09' => $this->request->getVar('V_09'),
            'V_10' => $this->request->getVar('V_10'),
            'V_11' => $this->request->getVar('V_11'),
            'V_12' => $this->request->getVar('V_12'),
            'V_13' => $this->request->getVar('V_13'),
            'V_14' => $this->request->getVar('V_14'),
            'V_15' => $this->request->getVar('V_15'),
            'V_16' => $this->request->getVar('V_16'),
            'V_17' => $this->request->getVar('V_17'),
            'V_18' => $this->request->getVar('V_18'),
            'V_19' => $this->request->getVar('V_19'),
            'V_20' => $this->request->getVar('V_20'),
            'V_21' => $this->request->getVar('V_21'),
            'V_22' => $this->request->getVar('V_22'),
            'V_23' => $this->request->getVar('V_23'),
            'V_24' => $this->request->getVar('V_24'),
            'V_25' => $this->request->getVar('V_25'),
            'V_26' => $this->request->getVar('V_26'),
            'V_27' => $this->request->getVar('V_27'),
            'V_28' => $this->request->getVar('V_28'),
            'V_29' => $this->request->getVar('V_29'),
            'V_30' => $this->request->getVar('V_30'),
            'V_31' => $this->request->getVar('V_31'),
            'V_32' => $this->request->getVar('V_32'),
            'V_33' => $this->request->getVar('V_33'),
            'V_34' => $this->request->getVar('V_34'),
            'V_35' => $this->request->getVar('V_35'),
            'V_36' => $this->request->getVar('V_36'),
            'V_37' => $this->request->getVar('V_37'),
            'V_38' => $this->request->getVar('V_38'),
            'V_39' => $this->request->getVar('V_39'),
            'V_40' => $this->request->getVar('V_40'),
            'V_41' => $this->request->getVar('V_41'),
            'V_42' => $this->request->getVar('V_42'),
            'V_43' => $this->request->getVar('V_43'),
            'V_44' => $this->request->getVar('V_44'),
            'V_45' => $this->request->getVar('V_45'),
            'V_46' => $this->request->getVar('V_46'),
            'V_47' => $this->request->getVar('V_47'),
            'V_48' => $this->request->getVar('V_48'),
            'V_49' => $this->request->getVar('V_49'),
            'V_50' => $this->request->getVar('V_50'),
            'ASSESSMENT_TYPE' => $this->request->getVar('ASSESSMENT_TYPE'),
            'TREAT_IMAGE' => $this->request->getVar('TREAT_IMAGE'),
            'TTD' => $this->request->getVar('TTD'),
            'TTD_1' => $this->request->getVar('TTD_1'),
            'TTD_2' => $this->request->getVar('TTD_2'),
            'TTD_3' => $this->request->getVar('TTD_3'),
            'TTD_4' => $this->request->getVar('TTD_4'),
            'TTD_5' => $this->request->getVar('TTD_5'),
            'LOKALIS' => $this->request->getVar('LOKALIS'),
            'ALLOANAMNESIS_ADDRESS' => $this->request->getVar('ALLOANAMNESIS_ADDRESS'),
            'ALLOANAMNESIS_SEX' => $this->request->getVar('ALLOANAMNESIS_SEX'),
            'ALLOANAMNESIS_AGE' => $this->request->getVar('ALLOANAMNESIS_AGE'),
            'EDUCATION_DATE' => $this->request->getVar('EDUCATION_DATE'),
            'V_51' => $this->request->getVar('V_51'),
            'V_52' => $this->request->getVar('V_52'),
            'V_53' => $this->request->getVar('V_53'),
            'V_54' => $this->request->getVar('V_54'),
            'V_55' => $this->request->getVar('V_55'),
            'V_56' => $this->request->getVar('V_56'),
            'V_57' => $this->request->getVar('V_57'),
            'V_58' => $this->request->getVar('V_58'),
            'V_59' => $this->request->getVar('V_59'),
            'V_60' => $this->request->getVar('V_60'),
            'V_61' => $this->request->getVar('V_61'),
            'V_62' => $this->request->getVar('V_62'),
            'V_63' => $this->request->getVar('V_63'),
            'V_64' => $this->request->getVar('V_64'),
            'V_65' => $this->request->getVar('V_65'),
            'V_66' => $this->request->getVar('V_66'),
            'V_67' => $this->request->getVar('V_67'),
            'V_68' => $this->request->getVar('V_68'),
            'V_69' => $this->request->getVar('V_69'),
            'V_70' => $this->request->getVar('V_70'),
            'V_71' => $this->request->getVar('V_71'),
            'V_72' => $this->request->getVar('V_72'),
            'V_73' => $this->request->getVar('V_73'),
            'V_74' => $this->request->getVar('V_74'),
            'V_75' => $this->request->getVar('V_75'),
            'V_76' => $this->request->getVar('V_76'),
            'V_77' => $this->request->getVar('V_77'),
            'V_78' => $this->request->getVar('V_78'),
            'V_79' => $this->request->getVar('V_79'),
            'V_80' => $this->request->getVar('V_80'),
            'V_81' => $this->request->getVar('V_81'),
            'V_82' => $this->request->getVar('V_82'),
            'V_83' => $this->request->getVar('V_83'),
            'V_84' => $this->request->getVar('V_84'),
            'V_85' => $this->request->getVar('V_85'),
            'V_86' => $this->request->getVar('V_86'),
            'V_87' => $this->request->getVar('V_87'),
            'V_88' => $this->request->getVar('V_88'),
            'V_89' => $this->request->getVar('V_89'),
            'V_90' => $this->request->getVar('V_90'),
            'V_91' => $this->request->getVar('V_91'),
            'V_92' => $this->request->getVar('V_92'),
            'V_93' => $this->request->getVar('V_93'),
            'V_94' => $this->request->getVar('V_94'),
            'V_95' => $this->request->getVar('V_95'),
            'V_96' => $this->request->getVar('V_96'),
            'V_97' => $this->request->getVar('V_97'),
            'V_98' => $this->request->getVar('V_98'),
            'V_99' => $this->request->getVar('V_99'),
            'V_100' => $this->request->getVar('V_100'),
            't_051' => $this->request->getVar('t_051'),
            't_052' => $this->request->getVar('t_052'),
            't_053' => $this->request->getVar('t_053'),
            't_054' => $this->request->getVar('t_054'),
            't_055' => $this->request->getVar('t_055'),
            't_056' => $this->request->getVar('t_056'),
            't_057' => $this->request->getVar('t_057'),
            't_058' => $this->request->getVar('t_058'),
            't_059' => $this->request->getVar('t_059'),
            't_060' => $this->request->getVar('t_060'),
            't_061' => $this->request->getVar('t_061'),
            't_062' => $this->request->getVar('t_062'),
            't_063' => $this->request->getVar('t_063'),
            't_064' => $this->request->getVar('t_064'),
            't_065' => $this->request->getVar('t_065'),
            't_066' => $this->request->getVar('t_066'),
            't_067' => $this->request->getVar('t_067'),
            't_068' => $this->request->getVar('t_068'),
            't_069' => $this->request->getVar('t_069'),
            't_070' => $this->request->getVar('t_070'),
            't_071' => $this->request->getVar('t_071'),
            't_072' => $this->request->getVar('t_072'),
            't_073' => $this->request->getVar('t_073'),
            't_074' => $this->request->getVar('t_074'),
            't_075' => $this->request->getVar('t_075'),
            't_076' => $this->request->getVar('t_076'),
            't_077' => $this->request->getVar('t_077'),
            't_078' => $this->request->getVar('t_078'),
            't_079' => $this->request->getVar('t_079'),
            't_080' => $this->request->getVar('t_080'),
            't_081' => $this->request->getVar('t_081'),
            't_082' => $this->request->getVar('t_082'),
            't_083' => $this->request->getVar('t_083'),
            't_084' => $this->request->getVar('t_084'),
            't_085' => $this->request->getVar('t_085'),
            't_086' => $this->request->getVar('t_086'),
            't_087' => $this->request->getVar('t_087'),
            't_088' => $this->request->getVar('t_088'),
            't_089' => $this->request->getVar('t_089'),
            't_090' => $this->request->getVar('t_090'),
            't_091' => $this->request->getVar('t_091'),
            't_092' => $this->request->getVar('t_092'),
            't_093' => $this->request->getVar('t_093'),
            't_094' => $this->request->getVar('t_094'),
            't_095' => $this->request->getVar('t_095'),
            't_096' => $this->request->getVar('t_096'),
            't_097' => $this->request->getVar('t_097'),
            't_098' => $this->request->getVar('t_098'),
            't_099' => $this->request->getVar('t_099'),
            't_100' => $this->request->getVar('t_100'),
            'T_101' => $this->request->getVar('T_101'),
            'T_102' => $this->request->getVar('T_102'),
            'T_103' => $this->request->getVar('T_103'),
            'T_104' => $this->request->getVar('T_104'),
            'T_105' => $this->request->getVar('T_105'),
            'T_106' => $this->request->getVar('T_106'),
            'T_107' => $this->request->getVar('T_107'),
            'T_108' => $this->request->getVar('T_108'),
            'T_109' => $this->request->getVar('T_109'),
            'T_110' => $this->request->getVar('T_110'),
            'T_111' => $this->request->getVar('T_111'),
            'T_112' => $this->request->getVar('T_112'),
            'T_113' => $this->request->getVar('T_113'),
            'T_114' => $this->request->getVar('T_114'),
            'T_115' => $this->request->getVar('T_115'),
            'T_116' => $this->request->getVar('T_116'),
            'T_117' => $this->request->getVar('T_117'),
            'T_118' => $this->request->getVar('T_118'),
            'T_119' => $this->request->getVar('T_119'),
            'T_120' => $this->request->getVar('T_120'),
            'T_121' => $this->request->getVar('T_121'),
            'T_122' => $this->request->getVar('T_122'),
            'T_123' => $this->request->getVar('T_123'),
            'T_124' => $this->request->getVar('T_124'),
            'T_125' => $this->request->getVar('T_125'),
            'T_126' => $this->request->getVar('T_126'),
            'T_127' => $this->request->getVar('T_127'),
            'T_128' => $this->request->getVar('T_128'),
            'T_129' => $this->request->getVar('T_129'),
            'T_130' => $this->request->getVar('T_130'),
            'T_131' => $this->request->getVar('T_131'),
            'T_132' => $this->request->getVar('T_132'),
            'T_133' => $this->request->getVar('T_133'),
            'T_134' => $this->request->getVar('T_134'),
            'T_135' => $this->request->getVar('T_135'),
            'T_136' => $this->request->getVar('T_136'),
            'T_137' => $this->request->getVar('T_137'),
            'T_138' => $this->request->getVar('T_138'),
            'T_139' => $this->request->getVar('T_139'),
            'T_140' => $this->request->getVar('T_140'),
            'T_141' => $this->request->getVar('T_141'),
            'T_142' => $this->request->getVar('T_142'),
            'T_143' => $this->request->getVar('T_143'),
            'T_144' => $this->request->getVar('T_144'),
            'T_145' => $this->request->getVar('T_145'),
            'T_146' => $this->request->getVar('T_146'),
            'T_147' => $this->request->getVar('T_147'),
            'T_148' => $this->request->getVar('T_148'),
            'T_149' => $this->request->getVar('T_149'),
            'T_150' => $this->request->getVar('T_150'),
            'T_151' => $this->request->getVar('T_151'),
            'T_152' => $this->request->getVar('T_152'),
            'T_153' => $this->request->getVar('T_153'),
            'T_154' => $this->request->getVar('T_154'),
            'T_155' => $this->request->getVar('T_155'),
            'T_156' => $this->request->getVar('T_156'),
            'T_157' => $this->request->getVar('T_157'),
            'T_158' => $this->request->getVar('T_158'),
            'T_159' => $this->request->getVar('T_159'),
            'T_160' => $this->request->getVar('T_160'),
            'T_161' => $this->request->getVar('T_161'),
            'T_162' => $this->request->getVar('T_162'),
            'T_163' => $this->request->getVar('T_163'),
            'T_164' => $this->request->getVar('T_164'),
            'T_165' => $this->request->getVar('T_165'),
            'V_101' => $this->request->getVar('V_101'),
            'V_102' => $this->request->getVar('V_102'),
            'V_103' => $this->request->getVar('V_103'),
            'V_104' => $this->request->getVar('V_104'),
            'V_105' => $this->request->getVar('V_105'),
            'V_106' => $this->request->getVar('V_106'),
            'V_107' => $this->request->getVar('V_107'),
            'V_108' => $this->request->getVar('V_108'),
            'V_109' => $this->request->getVar('V_109'),
            'V_110' => $this->request->getVar('V_110'),
            'V_111' => $this->request->getVar('V_111'),
            'V_112' => $this->request->getVar('V_112'),
            'V_113' => $this->request->getVar('V_113'),
            'V_114' => $this->request->getVar('V_114'),
            'V_115' => $this->request->getVar('V_115'),
            'V_116' => $this->request->getVar('V_116'),
            'V_117' => $this->request->getVar('V_117'),
            'V_118' => $this->request->getVar('V_118'),
            'V_119' => $this->request->getVar('V_119'),
            'V_120' => $this->request->getVar('V_120'),
            'V_121' => $this->request->getVar('V_121'),
            'V_122' => $this->request->getVar('V_122'),
            'V_123' => $this->request->getVar('V_123'),
            'V_124' => $this->request->getVar('V_124'),
            'V_125' => $this->request->getVar('V_125'),
            'V_126' => $this->request->getVar('V_126'),
            'V_127' => $this->request->getVar('V_127'),
            'V_128' => $this->request->getVar('V_128'),
            'V_129' => $this->request->getVar('V_129'),
            'V_130' => $this->request->getVar('V_130'),
            'V_131' => $this->request->getVar('V_131'),
            'V_132' => $this->request->getVar('V_132'),
            'V_133' => $this->request->getVar('V_133'),
            'V_134' => $this->request->getVar('V_134'),
            'V_135' => $this->request->getVar('V_135'),
            'V_136' => $this->request->getVar('V_136'),
            'V_137' => $this->request->getVar('V_137'),
            'V_138' => $this->request->getVar('V_138'),
            'V_139' => $this->request->getVar('V_139'),
            'V_140' => $this->request->getVar('V_140'),
            'V_141' => $this->request->getVar('V_141'),
            'V_142' => $this->request->getVar('V_142'),
            'V_143' => $this->request->getVar('V_143'),
            'V_144' => $this->request->getVar('V_144'),
            'V_145' => $this->request->getVar('V_145'),
            'V_146' => $this->request->getVar('V_146'),
            'V_147' => $this->request->getVar('V_147'),
            'V_148' => $this->request->getVar('V_148'),
            'V_149' => $this->request->getVar('V_149'),
            'V_150' => $this->request->getVar('V_150'),
            'V_151' => $this->request->getVar('V_151'),
            'V_152' => $this->request->getVar('V_152'),
            'V_153' => $this->request->getVar('V_153'),
            'V_154' => $this->request->getVar('V_154'),
            'V_155' => $this->request->getVar('V_155')

        ]);

        return redirect()->to('pasien/halamandata');
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

    public function delete1($id)
    {
        $hpsdata = new assessment_info_model();
        $hpsdata->delete($id);

        return redirect()->to('assessment_info/assessment1');
    }

    public function delete2($id)
    {
        $hpsdata = new assessment_info_model();
        $hpsdata->delete($id);

        return redirect()->to('assessment_info/assessment2');
    }

    public function delete3($id)
    {
        $hpsdata = new assessment_info_model();
        $hpsdata->delete($id);

        return redirect()->to('assessment_info/assessment3');
    }

    public function delete4($id)
    {
        $hpsdata = new assessment_info_model();
        $hpsdata->delete($id);

        return redirect()->to('assessment_info/assessment4');
    }

    public function detail1($id)
    {
        $dataJOIN = new assessment_info_model();
        $dataJOIN = $dataJOIN->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.id', $id)
            ->first($id); // Menggunakan first() untuk mendapatkan hasil pertama dari query

        $data = [
            'detail' => $dataJOIN
        ];

        return view('detail/formulirdetail1', $data);
    }

    public function detail2($id)
    {
        $dataJOIN = new assessment_info_model();
        $dataJOIN = $dataJOIN->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.id', $id)
            ->first($id); // Menggunakan first() untuk mendapatkan hasil pertama dari query

        $data = [
            'detail' => $dataJOIN
        ];

        return view('detail/formulirdetail2', $data);
    }

    public function detail3($id)
    {
        $dataJOIN = new assessment_info_model();
        $dataJOIN = $dataJOIN->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.id', $id)
            ->first($id); // Menggunakan first() untuk mendapatkan hasil pertama dari query

        $data = [
            'detail' => $dataJOIN
        ];

        return view('detail/formulirdetail3', $data);
    }

    public function detail4($id)
    {
        $dataJOIN = new assessment_info_model();
        $dataJOIN = $dataJOIN->join('pasien', 'pasien.NO_REGISTRATION=assessment_info.NO_REGISTRATION')
            ->where('assessment_info.id', $id)
            ->first($id); // Menggunakan first() untuk mendapatkan hasil pertama dari query

        $data = [
            'detail' => $dataJOIN
        ];

        return view('detail/formulirdetail4', $data);
    }
}
