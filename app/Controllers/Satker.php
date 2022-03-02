<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SatkerModel;

class Satker extends BaseController
{
    public function index()
    {
        $model = new SatkerModel();
        $data['getSatker'] = $model->getSatker();
        echo view('header_view',$data);
        echo view('view_satker',$data);
        echo view('footer_view',$data);
    }

    public function add()
    {
        $model = new SatkerModel();
        $data = array(
            'msat_nama' => ($this->request->getPost('msat_nama')),
        );
        $model->saveSPBU($data);
        echo '<script>
                alert("Sukses Tambah Data Satker");
                window.location="'.base_url('Satker').'"
            </script>';
    }

    public function delete()
    {
        $model = new SatkerModel();
        $id = $this->request->getPost('msat_id');
        $getSPBU = $model->deleteSatker($id);
        if(isset($getSPBU))
        {
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('Satker').'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID Satker '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Satker').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new SatkerModel();
        $id = $this->request->getPost('msat_id');
        $data = array(
            'msat_nama' => ($this->request->getPost('msat_nama')),
        );
        $kondisi =  $model->updateSatker($data, $id);
        if(isset($kondisi))
        {
            echo '<script>
                    alert("Edit Data Sukses");
                    window.location="'.base_url('Satker').'"
                </script>';
        }else{
            echo '<script>
                    alert("Edit Gagal !, ID Satker '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Satker').'"
                </script>';
        }
    }
}
