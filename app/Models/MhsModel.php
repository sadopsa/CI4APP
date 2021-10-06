<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useTimeStamps = 'true';
    protected $allowedFields = ['Nama','Jurusan','Prodi','Kelas'];

    public function GetMhs($id = false)
    {
        if ($id == false) {
            return $this->findall();
        }
        return $this -> where(['id' => $id])->first();
    }
}
