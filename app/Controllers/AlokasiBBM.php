<?php

namespace App\Controllers;
use App\Models\AlokasiBBMModel;

class AlokasiBBM extends BaseController
{
    public function index()
    {
        $model = new AlokasiBBMModel();
        $resulttotalbbm = $model->tampil_totalbbm();
        $data['gettotalbbm'] = $model->gettotalbbm();
        $data['groupstotalbbm'] = $resulttotalbbm;
        echo view('header_view',$data);
        echo view('view_alokasi_bbm',$data);
        echo view('footer_view',$data);
    }

    public function delete()
    {
        $model = new AlokasiBBMModel();
        $id = $this->request->getPost('ran_id_bbm');
        $getSPBU = $model->deletetotalbbm($id);
        if(isset($getSPBU))
        {
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('AlokasiBBM').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('AlokasiBBM').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new AlokasiBBMModel();
        $id = $this->request->getPost('ran_id_bbm');
        $data = array(
            'ran_total_bbm'         => ($this->request->getPost('ran_total_bbm')),
            'ran_updated_at'         => date('Y-m-d H:i:s'),
            'ran_updated_by'         => $id
        );
        $kondisi =  $model->updatetotalbbm($data, $id);
        if(isset($kondisi))
        {
            echo '<script>
                    alert("Edit Data Sukses");
                    window.location="'.base_url('AlokasiBBM').'"
                </script>';
        }else{
            echo '<script>
                    alert("Edit Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('AlokasiBBM').'"
                </script>';
        }
    }
}
