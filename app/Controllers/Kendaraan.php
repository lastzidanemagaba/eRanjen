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
        $resultall = $model->join2table();
        $resultkondisi = $model->tampil_kondisi();
        $data['groupskondisi'] = $resultkondisi;
        $data['groupsall'] = $resultall;
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
    public function add()
    {
        $model = new Kendaraan_model;
        $data = array(
            'ran_nopol' => strtoupper($this->request->getPost('ran_nopol')),
            'ran_bbm_jenis' => strtoupper($this->request->getPost('mbj_id')),
            'ran_jen'  => strtoupper($this->request->getPost('mrj_id')),
            'ran_tipe'  => strtoupper($this->request->getPost('mrt_id')),
            'ran_satker'  => strtoupper($this->request->getPost('msat_id')),
            'ran_kondisi'  => strtoupper($this->request->getPost('mkon_id')),
            'ran_wilayah'  => strtoupper($this->request->getPost('mwil_id')),
            'ran_liter'  => strtoupper($this->request->getPost('ran_liter'))
        );
        $model->saveKendaraan($data);
        echo '<script>
                alert("Sukses Tambah Data Kendaraan");
                window.location="'.base_url('Kendaraan').'"
            </script>';

    }

    public function update(){
        $model = new Kendaraan_model();
        $id = $this->request->getPost('ran_id');
        $data = array(
            'ran_nopol' => strtoupper($this->request->getPost('ran_nopol')),
            'ran_bbm_jenis' => strtoupper($this->request->getPost('mbj_id')),
            'ran_jen'  => strtoupper($this->request->getPost('mrj_id')),
            'ran_tipe'  => strtoupper($this->request->getPost('mrt_id')),
            'ran_satker'  => strtoupper($this->request->getPost('msat_id')),
            'ran_kondisi'  => strtoupper($this->request->getPost('mkon_id')),
            'ran_wilayah'  => strtoupper($this->request->getPost('mwil_id')),
            'ran_liter'  => strtoupper($this->request->getPost('ran_liter'))
            
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
