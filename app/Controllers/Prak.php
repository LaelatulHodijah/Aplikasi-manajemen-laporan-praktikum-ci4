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

    public function store()
    {
        $file = $this->request->getFile('file');
        //Generate nama file yang unik
        $fileName = $file->getRandomName();
        //Pindahkan file ke direktori penyimpanan
        $file->move(ROOTPATH . 'public/assets/file/', $fileName);

        $data = [
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'file' => $this->request->getPost('nama_file'),
        ];
        $this->file->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to('/tugas1');
    }
}
