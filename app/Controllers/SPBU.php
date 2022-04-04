<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SPBUModel;
use App\Models\KendaraanModel;

class SPBU extends BaseController
{
    public function index()
    {
        $modelYA = new KendaraanModel();
        $model = new SPBUModel();
        $resultspbu = $model->tampil_spbu();
        $resultwilayahtugas = $modelYA->tampil_wilayahtugas();
        $data['groupswilayahtugas'] = $resultwilayahtugas;
        $data['getSPBU'] = $model->getSPBU();
        $data['groupsspbu'] = $resultspbu;
        
        echo view('header_view',$data);
        echo view('view_spbu',$data);
        echo view('footer_view',$data);
    }

    public function add()
    {
                $model = new SPBUModel();
                $kodetonama = $this->request->getPost('spbu_kode');
                $kodetonamadpn = substr($kodetonama,0,2);
                $kodetonamatgh = substr($kodetonama,2,3);
                $kodetonamablkng = substr($kodetonama,5,6);
                $data = array(
            'spbu_nama' => ($this->request->getPost('spbu_nama')),
            'spbu_kode'         => ($this->request->getPost('spbu_kode')),
            'spbu_nama'         => "SPBU ".$kodetonamadpn.".".$kodetonamatgh.".".$kodetonamablkng,
            'spbu_wilayah'  => ($this->request->getPost('spbu_wilayah')),
            'spbu_alamat'  => ($this->request->getPost('spbu_alamat'))
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
            'spbu_alamat'  => ($this->request->getPost('spbu_alamat'))
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
