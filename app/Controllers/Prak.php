<?php

namespace App\Controllers;

use App\Models\fileModel;
use App\Models\matkulModel;
use App\Models\praktikumModel;

class Prak extends BaseController
{
    protected $matkul;
    protected $file;
    protected $praktikumModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->matkul = new matkulModel();
        $this->file = new fileModel();
    }

    public function dash()
    {
        return view('web/dash');
    }
    public function absen()
    {
        $data['matkul'] = $this->matkul->getAllData();
        return view('web/absen', $data);
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

    public function upload()
    {
        $file = $this->request->getFile('file');

        // $fileName = $file->getRandomName();
        $fileName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/file/', $fileName);

        $data = [
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'file' => $fileName,
        ];
        $this->file->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to('tugas1');
    }
}
