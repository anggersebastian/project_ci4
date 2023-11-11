<?php
namespace App\Controllers;

use App\Models\PegawaiModel;

class PegawaiController extends BaseController
{
    public function index()
    {
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->getAllPegawai();

        return view('pegawai/list', $data);
    }

    public function create()
    {
        return view('pegawai/create');
    }

    public function store()
    {
        $rules = [
            'first_name'   => 'required',
            'last_name'    => 'required',
            'email'        => 'required|valid_email',
            'phone_number' => 'required|numeric',
            'address'      => 'required',
            'gender'       => 'required|in_list[Laki-laki,Perempuan]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/pegawai/create')->withInput()->with('validation', $this->validator);
        }

        $pegawaiModel = new PegawaiModel();
        $data = [
            'first_name'   => $this->request->getPost('first_name'),
            'last_name'    => $this->request->getPost('last_name'),
            'email'        => $this->request->getPost('email'),
            'phone_number' => $this->request->getPost('phone_number'),
            'address'      => $this->request->getPost('address'),
            'gender'       => $this->request->getPost('gender'),
        ];

        $pegawaiModel->insertPegawai($data);

        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->getPegawaiById($id);

        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'first_name'   => 'required',
            'last_name'    => 'required',
            'email'        => 'required|valid_email',
            'phone_number' => 'required|numeric',
            'address'      => 'required',
            'gender'       => 'required|in_list[Laki-laki,Perempuan]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to("/pegawai/edit/{$id}")->withInput()->with('validation', $this->validator);
        }

        $pegawaiModel = new PegawaiModel();
        $data = [
            'first_name'   => $this->request->getPost('first_name'),
            'last_name'    => $this->request->getPost('last_name'),
            'email'        => $this->request->getPost('email'),
            'phone_number' => $this->request->getPost('phone_number'),
            'address'      => $this->request->getPost('address'),
            'gender'       => $this->request->getPost('gender'),
        ];

        $pegawaiModel->updatePegawai($id, $data);

        return redirect()->to('/pegawai');
    }

    public function delete($id)
    {
        $pegawaiModel = new PegawaiModel();
        $pegawaiModel->deletePegawai($id);

        return redirect()->to('/pegawai');
    }
}
