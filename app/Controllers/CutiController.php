<?php

namespace App\Controllers;

use App\Models\CutiModel;
use App\Models\PegawaiModel;

class CutiController extends BaseController
{
    public function index()
    {
        $cutiModel = new CutiModel();
        $data['cuti'] = $cutiModel->getAllLeaveData();

        return view('cuti/list', $data);
    }

    public function create()
    {
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->findAll();

        return view('cuti/create', $data);
    }

    public function store()
    {
        $rules = [
            'pegawai_id'      => 'required',
            'alasan_cuti'     => 'required',
            'tanggal_mulai'   => 'required|valid_date',
            'tanggal_selesai' => 'required|valid_date',
        ];
    
        if (!$this->validate($rules)) {
            return redirect()->to('/cuti/create')->withInput()->with('validation', $this->validator);
        }
    
        $pegawaiModel = new PegawaiModel();
        $maxLeaveDays = 5;
        $pegawai_id = $this->request->getVar('pegawai_id');
        $leaveCount = $pegawaiModel->getLeaveCount($pegawai_id);
    
        if ($leaveCount >= $maxLeaveDays) {
            return redirect()->to('/cuti/create')->with('error', 'Karyawan telah mencapai maksimal hari cuti yang diperbolehkan.');
        }
    
        $cutiModel = new CutiModel();
        $data = [
            'pegawai_id'      => $pegawai_id,
            'alasan_cuti'     => $this->request->getVar('alasan_cuti'),
            'tanggal_mulai'   => $this->request->getVar('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getVar('tanggal_selesai'),
        ];
    
        $cutiModel->save($data);
    
        return redirect()->to('/cuti');
    }
    
    public function update($id)
    {
        $rules = [
            'pegawai_id'      => 'required',
            'alasan_cuti'     => 'required',
            'tanggal_mulai'   => 'required|valid_date',
            'tanggal_selesai' => 'required|valid_date',
        ];
    
        if (!$this->validate($rules)) {
            return redirect()->to("/cuti/edit/{$id}")->withInput()->with('validation', $this->validator);
        }
    
        $cutiModel = new CutiModel();
        $data = [
            'pegawai_id'      => $this->request->getVar('pegawai_id'),
            'alasan_cuti'     => $this->request->getVar('alasan_cuti'),
            'tanggal_mulai'   => $this->request->getVar('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getVar('tanggal_selesai'),
        ];
    
        $cutiModel->update($id, $data);
    
        return redirect()->to('/cuti');
    }
    

    public function edit($id)
    {
        $cutiModel = new CutiModel();
        $data['cuti'] = $cutiModel->find($id);

        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->findAll();

        return view('cuti/edit', $data);
    }

    public function delete($id)
    {
        $cutiModel = new CutiModel();
        $cutiModel->delete($id);

        return redirect()->to('/cuti');
    }
}
