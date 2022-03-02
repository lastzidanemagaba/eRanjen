<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $resultUser = $model->tampil_User();
        $resultRole = $model->tampil_Role();
        $data['getUser'] = $model->findAll();
        //$data['groupsUser'] = $resultUser;
        $data['groupsrole'] = $resultRole;
        echo view('header_view',$data);
        echo view('view_user',$data);
        echo view('footer_view',$data);
    }

    public function add()
    {
        $model = new UserModel();
        $password = $this->request->getPost('user_pass');
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $data = array(
            'user_nama' => ($this->request->getPost('user_nama')),
            'user_email'         => ($this->request->getPost('user_email')),
            'user_pass'         => $hash,
            'user_role'  => ($this->request->getPost('user_role')),
            'user_created_at'  => date('Y-m-d H:i:s')
        );
        $model->saveUser($data);
        echo '<script>
                alert("Sukses Tambah Data User");
                window.location="'.base_url('User').'"
            </script>';

    }

    public function delete()
    {
        $model = new UserModel();
        $id = $this->request->getPost('user_id');
        $getUser = $model->delete($id);
        if(isset($getUser))
        {
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('User').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID User '.$id.' Tidak ditemukan");
                    window.location="'.base_url('User').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('user_id');
        $data = array(
            'user_nama' => ($this->request->getPost('user_nama')),
            'user_email'         => ($this->request->getPost('user_email')),
            'user_role'  => ($this->request->getPost('user_role')),
            'user_updated_at'  => date('Y-m-d H:i:s')
        );
        $kondisi =  $model->updateUser($data, $id);
        if(isset($kondisi))
        {
            echo '<script>
                    alert("Edit Data Sukses");
                    window.location="'.base_url('User').'"
                </script>';

        }else{

            echo '<script>
                    alert("Edit Gagal !, ID User '.$id.' Tidak ditemukan");
                    window.location="'.base_url('User').'"
                </script>';
        }
    }

}
