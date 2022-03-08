<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaporanSatkerModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LaporanSatker extends BaseController
{
    public function index()
    {
        $model = new LaporanSatkerModel();
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
        echo view('view_laporansatker',$data);
        echo view('footer_view',$data);
    }

    public function export()
    {
        $model = new LaporanSatkerModel();
        $users = $model->findAll();

        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'By Satker')
            ->setCellValue('A2', 'PERTAMAX')
            ->setCellValue('A3', 'No')
            ->setCellValue('B3', 'Satker')
            ->setCellValue('C3', 'Distribusi TRIWULAN III')
            ->setCellValue('D3', 'JULI')
            ->setCellValue('G3', 'Agustus')
            ->setCellValue('J3', 'September')

            ->setCellValue('D4', 'Ranjen')
            ->setCellValue('E4', 'Dukrutin')
            ->setCellValue('F4', 'Alokasi')

            ->setCellValue('G4', 'Ranjen')
            ->setCellValue('H4', 'Dukrutin')
            ->setCellValue('I4', 'Alokasi')

            ->setCellValue('J4', 'Ranjen')
            ->setCellValue('K4', 'Dukrutin')
            ->setCellValue('L4', 'Alokasi');

           
           

        $column = 5;
        $no=1;
        foreach ($users as $user) {
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:L1');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('A2:L2');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('A3:A4');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('B3:B4');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('C3:C4');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('D3:F3');
            
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('G3:I3');
            $spreadsheet->setActiveSheetIndex(0)->mergeCells('J3:L3');
           

            
            
           

            
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, $user['ran_nopol'])
                ->setCellValue('C' . $column, $user['ran_bbm_jenis'])
                ->setCellValue('D' . $column, $user['ran_jen'])
                ->setCellValue('E' . $column, $user['ran_tipe'])
                ->setCellValue('F' . $column, $user['ran_satker'])
                ->setCellValue('G' . $column, $user['ran_kondisi'])
                ->setCellValue('H' . $column, $user['ran_wilayah'])
                ->setCellValue('I' . $column, $user['ran_liter'])
                ->setCellValue('J' . $column, $user['ran_bbm_isi'])
                ->setCellValue('K' . $column, $user['ran_spbu'])
                ->setCellValue('L' . $column, $user['ran_nopol']);
                
                
            $column++;
            $no++;
        }
        $spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('A3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('B3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('C3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('D3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        
        $spreadsheet->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('G3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('J3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('J3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

        $spreadsheet->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('D4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('E4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('E4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('F4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('F4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('G4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('G4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

        $spreadsheet->getActiveSheet()->getStyle('H4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('H4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('I4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('I4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('J4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('J4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('K4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('K4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('L4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle('L4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        
       
        
        $spreadsheet
                ->getActiveSheet()
                ->getStyle('A2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('0000FF');

        $spreadsheet->getActiveSheet()->getStyle('A2')
                ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
        
        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Laporan-Satker';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

}
