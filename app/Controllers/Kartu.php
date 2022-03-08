<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KartuModel;

class Kartu extends BaseController
{
    public function index()
    {
        $model = new KartuModel();
        $data['getKartu'] = $model->getKartu();
        $data['groupsran_jen'] = $model->getran_jen();
        $data['groupsranjen_is'] = $model->getranjen_is();
        echo view('header_view',$data);
        echo view('view_kartu',$data);
        echo view('footer_view',$data);
    }

    public function add()
    {
        $model = new KartuModel();
        $data = array(
            'kartu_tag_no' => $this->request->getPost('kartu_tag_no'),
            'kartu_tipe' => $this->request->getPost('kartu_tipe'),
            'kartu_ranjen_is'  => $this->request->getPost('kartu_ranjen_is'),
        );
        $model->saveKartu($data);
        echo '<script>
                alert("Sukses Tambah Data Kartu");
                window.location="'.base_url('Kartu').'"
            </script>';
    }

    public function update()
    {
        $model = new KartuModel();
        $id = $this->request->getPost('kartu_id');
        $data = array(
            'kartu_tag_no' => $this->request->getPost('kartu_tag_no'),
            'kartu_tipe' => $this->request->getPost('kartu_tipe'),
            'kartu_ranjen_is'  => $this->request->getPost('kartu_ranjen_is'),
        );
        $kondisi =  $model->updateKartu($data, $id);
        if(isset($kondisi))
        {
            echo '<script>
                    alert("Edit Data Sukses");
                    window.location="'.base_url('Kartu').'"
                </script>';
        }else{
            echo '<script>
                    alert("Edit Gagal !, ID Kartu '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Kartu').'"
                </script>';
        }
    }

    public function delete()
    {
        $model = new KartuModel();
        $id = $this->request->getPost('kartu_id');
        $getSPBU = $model->deleteKartu($id);
        if(isset($getSPBU))
        {
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('Kartu').'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID Kartu '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Kartu').'"
                </script>';
        }
    }

}
