<?php
namespace App\Models;

use CodeIgniter\Model;

class CutiModel extends Model
{
    protected $table = 'cuti';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pegawai_id', 'alasan_cuti', 'tanggal_mulai', 'tanggal_selesai'];

    public function pegawai()
    {
        return $this->belongsTo(PegawaiModel::class, 'pegawai_id', 'id');
    }

    public function getAllLeaveData()
    {
        $builder = $this->db->table('cuti');
        $builder->select('cuti.*, pegawai.first_name, pegawai.last_name');
        $builder->join('pegawai', 'pegawai.id = cuti.pegawai_id', 'left');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
