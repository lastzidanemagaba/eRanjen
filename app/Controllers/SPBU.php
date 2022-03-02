<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SPBUModel;

class SPBU extends BaseController
{
    public function index()
    {
        $model = new SPBUModel();
        $resultspbu = $model->tampil_spbu();
        $data['getSPBU'] = $model->getSPBU();
        $data['groupsspbu'] = $resultspbu;
        echo view('header_view',$data);
        echo view('view_spbu',$data);
        echo view('footer_view',$data);
    }

    public function add()
    {
        $model = new SPBUModel();
        $data = array(
            'spbu_nama' => ($this->request->getPost('spbu_nama')),
            'spbu_kode'         => ($this->request->getPost('spbu_kode')),
            'spbu_wilayah'  => ($this->request->getPost('spbu_wilayah')),
            'spbu_alamat'  => ($this->request->getPost('spbu_alamat')),
            'spbu_kerjasama'  => ($this->request->getPost('spbu_kerjasama'))
        );
        $model->saveSPBU($data);
        echo '<script>
                alert("Sukses Tambah Data SPBU");
                window.location="'.base_url('SPBU').'"
            </script>';

    }

    public function delete()
    {
        $model = new SPBUModel();
        $id = $this->request->getPost('spbu_id');
        $getSPBU = $model->deleteSPBU($id);
        if(isset($getSPBU))
        {
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('SPBU').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID SPBU '.$id.' Tidak ditemukan");
                    window.location="'.base_url('SPBU').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new SPBUModel();
        $id = $this->request->getPost('spbu_id');
        $data = array(
            'spbu_nama' => ($this->request->getPost('spbu_nama')),
            'spbu_kode'         => ($this->request->getPost('spbu_kode')),
            'spbu_wilayah'  => ($this->request->getPost('spbu_wilayah')),
            'spbu_alamat'  => ($this->request->getPost('spbu_alamat')),
            'spbu_kerjasama'  => ($this->request->getPost('spbu_kerjasama'))
        );
        $kondisi =  $model->updateSPBU($data, $id);
        if(isset($kondisi))
        {
            echo '<script>
                    alert("Edit Data Sukses");
                    window.location="'.base_url('SPBU').'"
                </script>';

        }else{

            echo '<script>
                    alert("Edit Gagal !, ID SPBU '.$id.' Tidak ditemukan");
                    window.location="'.base_url('SPBU').'"
                </script>';
        }
    }

}
