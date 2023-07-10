<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class Upload extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('upload_form', ['errors' => []]);
    }

    public function upload()
    {
        $validationRule = [
            'judul' => [
                'rules' => [
                    'uploaded[judul]',
                    'mime_in[judul,file/pdf,file/doc,file/docx]',
                    'max_size[file,5080]',
                ],
            ],
        ];
        if (!$this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('tugas1');
        }

        $img = $this->request->getFile('file');

        if (!$img->hasMoved()) {
            $filepath = ROOTPATH . 'public/assets/file/';

            $data = ['uploaded_fileinfo' => new File($filepath)];

            return view('tugas1');
        }

        $data = ['errors' => 'The file has already been moved.'];

        return view('tugas1');
    }
}
