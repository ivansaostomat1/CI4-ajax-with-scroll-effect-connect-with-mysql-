<?php

namespace App\Controllers;

use App\Models\MobilModel;
use CodeIgniter\Controller;

class MobilController extends Controller
{
    public function list()
    {
        return view('admin/list');
    }

    public function getAllMobil()
    {
        $model = new MobilModel();
        $mobils = $model->findAll();
        return $this->response->setJSON($mobils);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new MobilModel();
        $fileName = null;

        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads', $fileName);
        }

        $data = [
            'brand'     => $this->request->getPost('brand'),
            'nama'      => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $fileName,
        ];

        $model->insert($data);
        return $this->response->setJSON(['status' => 'success']);
    }

    public function edit($id)
    {
        $model = new MobilModel();
        $mobil = $model->find($id);
    
        // Return JSON response if it's an AJAX request
        if ($this->request->isAJAX()) {
            return $this->response->setJSON($mobil);
        }
    
        // Render view for non-AJAX request
        return view('admin/edit', ['mobil' => $mobil]);
    }
    

    public function update($id)
    {
        $model = new MobilModel();
        $fileName = $this->request->getPost('gambar_lama');

        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads', $fileName);
        }

        $data = [
            'brand'     => $this->request->getPost('brand'),
            'nama'      => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $fileName,
        ];

        $model->update($id, $data);
        return $this->response->setJSON(['status' => 'success']);
    }

    public function delete($id)
    {
        $model = new MobilModel();
        $model->delete($id);
        return $this->response->setJSON(['status' => 'success']);
    }
}
