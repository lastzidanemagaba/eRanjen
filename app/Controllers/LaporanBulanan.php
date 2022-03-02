<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanBulananModel;

class LaporanBulanan extends BaseController
{
    public function index()
    {
        $model = new LaporanBulananModel();
        $resultbbm = $model->tampil_bbm();
        $resultkendaraan = $model->tampil_kendaraan();
        $resultranjen = $model->tampil_ranjen();
        $resulttipekendaraan = $model->tampil_tipekendaraan();
        $resultsatker = $model->tampil_satker();
        $resultwilayahtugas = $model->tampil_wilayahtugas();
        $resultspbu = $model->tampil_spbu();
        $resultall = $model->tampilwithmaster();
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
        echo view('view_laporanbulanan',$data);
        echo view('footer_view',$data);
    }

}
