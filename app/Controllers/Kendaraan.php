<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kendaraan_model;

class Kendaraan extends BaseController
{
    public function index()
    {
        
        $model = new Kendaraan_model;
        $resultbbm = $model->tampil_bbm();
        $resultkendaraan = $model->tampil_kendaraan();
        $resultranjen = $model->tampil_ranjen();
        $resulttipekendaraan = $model->tampil_tipekendaraan();
        $resultsatker = $model->tampil_satker();
        $resultwilayahtugas = $model->tampil_wilayahtugas();
        $resultspbu = $model->tampil_spbu();
        $data['groupsspbu'] = $resultspbu;
        $data['getKendaraan'] = $model->getKendaraan();
        $data['groupskendaraan'] = $resultkendaraan;
        $data['groupsbbm'] = $resultbbm;
        $data['groupsranjen'] = $resultranjen;
        $data['groupstipekendaraan'] = $resulttipekendaraan;
        $data['groupssatker'] = $resultsatker;
        $data['groupswilayahtugas'] = $resultwilayahtugas;
        echo view('header_view',$data);
        echo view('view_kendaraan',$data);
        echo view('footer_view',$data);
    }

    public function add()
    {
        $model = new Kendaraan_model;
        $data = array(
            'ran_nopol' => strtoupper($this->request->getPost('ran_nopol')),
            'ran_bbm_jenis' => strtoupper($this->request->getPost('ran_bbm_jenis')),
            'ran_jen'  => strtoupper($this->request->getPost('ran_jen')),
            'ran_tipe'  => strtoupper($this->request->getPost('ran_tipe')),
            'ran_satker'  => strtoupper($this->request->getPost('ran_satker')),
            'ran_wilayah'  => strtoupper($this->request->getPost('ran_wilayah')),
            'ran_liter'  => strtoupper($this->request->getPost('ran_liter')),
            'ran_bbm_isi'  => strtoupper($this->request->getPost('ran_bbm_isi')),
            'ran_spbu'  => strtoupper($this->request->getPost('ran_spbu'))
        );
        $model->saveKendaraan($data);
        echo '<script>
                alert("Sukses Tambah Data Kendaraan");
                window.location="'.base_url('Kendaraan').'"
            </script>';

    }

    public function delete()
    {
        $model = new Kendaraan_model();
        $id = $this->request->getPost('ran_id');
        $getSPBU = $model->deleteKendaraan($id);
        if(isset($getSPBU))
        {
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('Kendaraan').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Kendaraan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Kendaraan').'"
                </script>';
        }
    }

    public function update(){
        $model = new Kendaraan_model();
        $id = $this->request->getPost('ran_id');
        $data = array(
            'ran_nopol' => strtoupper($this->request->getPost('ran_nopol')),
            'ran_bbm_jenis' => strtoupper($this->request->getPost('ran_bbm_jenis')),
            'ran_jen'  => strtoupper($this->request->getPost('ran_jen')),
            'ran_tipe'  => strtoupper($this->request->getPost('ran_tipe')),
            'ran_satker'  => strtoupper($this->request->getPost('ran_satker')),
            'ran_wilayah'  => strtoupper($this->request->getPost('ran_wilayah')),
            'ran_liter'  => strtoupper($this->request->getPost('ran_liter')),
            'ran_bbm_isi'  => strtoupper($this->request->getPost('ran_bbm_isi')),
            'ran_spbu'  => strtoupper($this->request->getPost('ran_spbu'))
        );
        $kondisi =  $model->updateKendaraan($data, $id);
        if(isset($kondisi))
        {
            echo '<script>
                    alert("Edit Data Sukses");
                    window.location="'.base_url('Kendaraan').'"
                </script>';

        }else{

            echo '<script>
                    alert("Edit Gagal !, ID Kendaraan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Kendaraan').'"
                </script>';
        }
    }

   
}
