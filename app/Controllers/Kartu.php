<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KartuModel;

class Kartu extends BaseController
{
    public function index()
    {
        $model = new KartuModel();
        $data['getKartu'] = $model->getJoinKendaraan();
        $data['groupsran_jen'] = $model->getran_jen();
        $data['groupsranjen_is'] = $model->getranjen_is();
        echo view('header_view',$data);
        echo view('view_kartu',$data);
        echo view('footer_view',$data);
    }

    function strhex($string) {
		$hexstring = unpack('H*', $string);
		return array_shift($hexstring);
    }
 
    function getRandomString($length = 8) {
        $validCharacters = "1234567890abcdefABCDEF";
        $validCharNumber = strlen($validCharacters);
    
        $result = "";
    
        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, $validCharNumber - 1);
            $result .= $validCharacters[$index];
        }
    
        return $result;
    }
    
    function newdecryptdata($content){
        $encryption_key1 = '1234567890123456';
        $encryption_key = strhex($encryption_key1);
        $content = base64_decode($content);
        $iv1 = substr($content,0,8);
        $iv = strhex($iv1);
        $contentdata = substr($content,8);
    
        $hasilnyaaa = openssl_decrypt($contentdata, 'aes-128-cbc', $encryption_key, 0, $iv);
        return $hasilnyaaa;
    }
    
    function newencryptdata($content){
        $encryption_key1 = '1234567890123456';
        $encryption_key = $this->strhex($encryption_key1);
        $iv1 = $this->getRandomString(8);
        $iv = $this->strhex($iv1);
    
        $encrypted = openssl_encrypt($content, 'aes-128-cbc', $encryption_key, 0 , $iv);
        
        $hasilnyaaa = base64_encode($iv1.''.$encrypted);
        return $hasilnyaaa;
    }

    public function nyoba(){
            $ran_id = $this->request->getPost('ran_id');
            $mrj_id = $this->request->getPost('mrj_id');
            $act = $this->newencryptdata('replace'); //new or replace
			$act = str_replace('=', '', $act);
			$rid = $this->newencryptdata($ran_id);
			$rid = str_replace('=', '', $rid);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://localhost:8081/init?act=$act&id=$rid");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            //echo '<span style="color: red;" /><h2>Tembakan 1</h2></span>';
            //echo "<h2>Your Input: ".$ran_id."</h2>";
            //echo 'act='.$act;
            //echo 'id='.$rid;
            //echo "<h2>Received From Server:</h2> ";
            //print_r( $output);
            $this->nyoba2($output,$ran_id);
    }

    public function nyoba2($output,$ran_id){
        $rida = $this->newencryptdata($ran_id);
        $rida = str_replace('=', '', $rida);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8081/$output");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'id='.$rida);
        $outputya = curl_exec($ch);
        $status = str_replace(' ', '', $outputya);
        //echo '<span style="color: red;" /><h2>Tembakan 2</h2></span>';
        //echo "<h2>Your Input: ".$output."</h2>";
        //echo 'id='.$rida;
        //echo "<h2>Received From Server:</h2> ";
        //echo $status;
        if($status == 6300){
            echo '<script>
                    alert("Gagal");
                    window.location="'.base_url('Kartu').'"
                </script>';
                return;
        }
        curl_close($ch);    
        $this->nyoba3();
    }

    public function nyoba3(){
        $act = $this->newencryptdata('readNFC'); //new or replace
		$act = str_replace('=', '', $act);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8081/read?act=$act");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $outputya = curl_exec($ch);
        //$status = substr($outputya,0,6);
        $status = str_replace(' ', '', $outputya);
        $pecahinya23 = substr($status,0,4);
        $pecahinya2 = substr($outputya,6,12);
        $nospasi = str_replace(' ', '', $pecahinya2);
        echo $nospasi;
        if($pecahinya23 == 6300){
            echo '<script>
                    alert("Gagal");
                    window.location="'.base_url('Kartu').'"
                </script>';
        }
        else if($pecahinya23 == 9000){
            $model = new KartuModel();
            $id = 2;
            $data = array(
                'kartu_tag_no' => $nospasi,
                'kartu_ranjen_is' => $mrj_id,
                'kartu_paired' => 1,
                'kartu_paired_tgl' => date('Y-m-d H:i:s'),
            );
            $kondisi =  $model->updateKartu($data, $id);
            if(isset($kondisi))
            {
                echo '<script>
                        alert("Pairing Data Sukses");
                        window.location="'.base_url('Kartu').'"
                    </script>';
            }else{
                echo '<script>
                        alert("Pairing Data Gagal");
                        window.location="'.base_url('Kartu').'"
                    </script>';
            }
        }
        curl_close($ch);    
        
    }

    public function add()
    {
        $model = new KartuModel();
        $data = array(
            'kartu_tag_no' => $this->request->getPost('kartu_tag_no'),
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
