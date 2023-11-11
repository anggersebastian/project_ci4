<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginAuth()
    {
        $this->session = \Config\Services::session();

        $session = session();
        $userModel = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['first_name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}
