<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function index()
    {
        $adminModel = new AdminModel();
        $data['admins'] = $adminModel->findAll();

        return view('admin/list', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|valid_email|is_unique[admin.email]',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/create')->withInput()->with('validation', $this->validator);
        }

        $adminModel = new AdminModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT)
        ];
        $adminModel->insert($data);

        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $adminModel = new AdminModel();
        $data['admin'] = $adminModel->find($id);

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|valid_email|is_unique[admin.email,id,' . $id . ']',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to("/admin/edit/{$id}")->withInput()->with('validation', $this->validator);
        }

        $adminModel = new AdminModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
        ];
        $adminModel->update($id, $data);

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $adminModel = new AdminModel();
        $adminModel->delete($id);

        return redirect()->to('/admin');
    }
}
