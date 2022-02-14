<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        if(session('user_id'))
        {
            return redirect()->to('Dashboard');
        }
        return view('auth/login');
    }

    public function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->userModel->getWhere(['user_nama' => $post['user_nama']]);
        $user = $query->getRow();
        if($user){
            if(password_verify($post['user_pass'], $user->user_pass)){
                $params= ['user_id' => $user->user_id];
                session()->set($params);
                $model = new UserModel();
                $data = array(
                    'logak_tgl' => date('Y-m-d H:i:s'),
                    'logak_ket'         => "Login Ke Aplikasi Web",
                    'logak_user'  => $params,
                    'logak_ip'  => $this->get_client_ip()
                );
                $model->saveUserLog($data);
                return redirect()->to('Dashboard');
            }
            else{
                return redirect()->back()->with('error', 'Password Tidak Sesuai');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Username Tidak Ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('user_id');
        return redirect()->to('login');
    }

    public function get_client_ip() {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip=$_SERVER['HTTP_CLIENT_IP'];
          }
          elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
          }
          else{
            $ip=$_SERVER['REMOTE_ADDR'];
          }
          return $ip;
    }

}
