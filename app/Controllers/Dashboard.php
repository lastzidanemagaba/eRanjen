<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DashboardModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new DashboardModel();
        $resulttotalkendaraan = $model->tampil_totalkendaraan();
        $data['resulttotalkendaraan'] = $resulttotalkendaraan;
        $resulttotalspbu = $model->tampil_totalspbu();
        $data['resulttotalspbu'] = $resulttotalspbu;
        $resulttotalusers = $model->tampil_totalusers();
        $data['resulttotalusers'] = $resulttotalusers;
        $resulttotalkartusranjen = $model->tampil_totalkartusranjen();
        $data['resulttotalkartusranjen'] = $resulttotalkartusranjen;
        $resulttotalkartuskupondukungan = $model->tampil_totalkartuskupondukungan();
        $data['resulttotalkartuskupondukungan'] = $resulttotalkartuskupondukungan;
        $resulttotalkartuscadanganmaster = $model->tampil_totalkartuscadanganmaster();
        $data['resulttotalkartuscadanganmaster'] = $resulttotalkartuscadanganmaster;
        $resulttotalkartuscadanganjabatan = $model->tampil_totalkartuscadanganjabatan();
        $data['resulttotalkartuscadanganjabatan'] = $resulttotalkartuscadanganjabatan;
        echo view('header_view',$data);
        echo view('view_dashboard',$data);
        echo view('footer_view',$data);
    }
}
