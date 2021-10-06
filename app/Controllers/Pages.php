<?php

namespace App\Controllers;

use App\Models\MhsModel;

class Pages extends BaseController
{
    protected $mhsModel;
    public function __construct()
    {
        $this->mhsModel = new MhsModel();
    }
    public function index()

    {
        // $mhs = $this->mhsModel->findAll();
        $data = [
            'title' => 'Home|Assestment',
            'mahasiswa' => $this->mhsModel->GetMhs()
        ];
        return view('content/home', $data);
    }

    public function detail($id)
    {
        // $mhs = $this->mhsModel->GetMhs();
        // dd($mhs);
        $data = [
            'title' => 'Detail Mahasiswa',
            'dMhs' => $this->mhsModel->GetMhs($id)
        ];

        // jika kosong
        if (empty($data['dMhs'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ada');
        }

        return view('content/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Mahasiswa',
            'validation' => \Config\Services::validation()
        ];

        return view('content/create', $data);
    }

    public function Save()
    {
        //validasi input
        if (!$this->validate([
            'nama' => 'required|is_unique[mahasiswa.nama]',
            'jurusan' => 'required',
            'prodi' => 'required',
            'kelas' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/create')->withInput('validation', $validation);
        }

        $this->mhsModel->save([
            'Nama' => $this->request->getVar('nama'),
            'Jurusan' => $this->request->getVar('jurusan'),
            'Prodi' => $this->request->getVar('prodi'),
            'Kelas' => $this->request->getVar('kelas')
        ]);

        session()->setFlashData('pesan', 'Data Berhasil di Tambah');
        return redirect()->to('/pages');
    }


    public function delete($id)
    {
        $this->mhsModel->delete($id);
        session()->setFlashData('pesan', 'Data Berhasil di Hapus');
        return redirect()->to('/pages');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Mahasiswa',
            'validation' => \Config\Services::validation(),
            'mhs' => $this->mhsModel->GetMhs($id)
        ];

        return view('content/edit', $data);
    }

    public function update($id)
    {

        // cek nama
        // $Onama = $this->mhsModel->GetMhs($this->request->getVar('id'));
        // if ($Onama['Nama'] == $this->request->getVar('nama')){
        //     $rule_nama = 'required';
        // }else{
        //     $rule_nama = 'required|is_unique[mahasiswa.nama]';
        // }
         
        // validasi input
        if (!$this->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'kelas' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/edit/' .$this->request->getVar('id'))->withInput('validation', $validation);
        }


        $this->mhsModel->save([
            'id' => $id,
            'Nama' => $this->request->getVar('nama'),
            'Jurusan' => $this->request->getVar('jurusan'),
            'Prodi' => $this->request->getVar('prodi'),
            'Kelas' => $this->request->getVar('kelas')
        ]);

        session()->setFlashData('pesan', 'Data Berhasil di Ubah');
        return redirect()->to('/pages');
    }
}
