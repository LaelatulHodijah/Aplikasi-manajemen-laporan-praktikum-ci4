<?php

namespace App\Controllers;

class Prak extends BaseController
{

    public function dash()
    {
        return view('web/Home');
    }
    public function absen()
    {
        return view('web/absen');
    }
    public function matWeb()
    {
        return view('web/matWeb');
    }
    public function matSql()
    {
        return view('web/matSql');
    }
    public function profile()
    {
        return view('web/profile');
    }
    public function tugas1()
    {
        return view('web/tugas1');
    }
}
