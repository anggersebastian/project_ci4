<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone_number', 'address', 'gender'];

    public function getAllPegawai()
    {
        return $this->findAll();
    }

    public function getPegawaiById($id)
    {
        return $this->find($id);
    }

    public function insertPegawai($data)
    {
        return $this->insert($data);
    }

    public function updatePegawai($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletePegawai($id)
    {
        return $this->delete($id);
    }

    public function getLeaveCount($pegawaiId)
    {
        $cutiModel = new CutiModel();
        $leaveCount = $cutiModel->where('pegawai_id', $pegawaiId)->countAllResults();

        return $leaveCount;
    }

    public function cutis()
    {
        return $this->hasMany(CutiModel::class, 'pegawai_id', 'id');
    }
}
