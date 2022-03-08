<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class LaporanHarianmodel extends Model
{
    protected $table = 'kendaraan';
    protected $tablekendaraan = 'kendaraan'; 
    protected $tablemaster_bbm_jenis = 'master_bbm_jenis'; 
    protected $tablemaster_ran_jen = 'master_ran_jen'; 
    protected $tablemaster_ran_tipe = 'master_ran_tipe'; 
    protected $tablemaster_satker = 'master_satker'; 
    protected $tablemaster_kondisi = 'master_kondisi'; 
    protected $tablemaster_wilayah = 'master_wilayah'; 
    protected $tablespbu = 'spbus';

    public function getKendaraan($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablekendaraan);
        if($id == false){
            return $builder->get()->getResultArray();
        }else{
            return $builder->getWhere(['ran_id ' => $id]);
        }   
    }

    public function tampilwithmaster()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kendaraan');
        $builder->select('kendaraan.ran_id,kendaraan.ran_nopol,master_bbm_jenis.mbj_id ,master_bbm_jenis.mbj_bbmnama as ran_bbm_jenis,master_ran_jen.mrj_id,master_ran_jen.mrj_nama as ran_jen,master_ran_tipe.mrt_id,master_ran_tipe.mrt_nama as ran_tipe,master_satker.msat_id,master_satker.msat_nama as ran_satker,master_kondisi.mkon_id ,master_kondisi.mkon_nama as ran_kondisi,master_wilayah.mwil_id,master_wilayah.mwil_nama as ran_wilayah,ran_liter');
        $builder->join('master_bbm_jenis', 'master_bbm_jenis.mbj_id = kendaraan.ran_bbm_jenis','left');
        $builder->join('master_ran_jen', 'master_ran_jen.mrj_id = kendaraan.ran_bbm_jenis','left');
        $builder->join('master_ran_tipe', 'master_ran_tipe.mrt_id  = kendaraan.ran_tipe','left');
        $builder->join('master_satker', 'master_satker.msat_id = kendaraan.ran_satker','left');
        $builder->join('master_wilayah', 'master_wilayah.mwil_id  = kendaraan.ran_wilayah','left');
        $builder->join('master_kondisi', 'master_kondisi.mkon_id  = kendaraan.ran_kondisi','left');
        return $builder->get()->getResultArray();  
    }

     public function tampil_kondisi(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_kondisi);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function tampil_SPBU(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablespbu);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function tampil_bbm(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_bbm_jenis);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function tampil_ranjen(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_ran_jen);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function tampil_tipekendaraan(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_ran_tipe);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function tampil_satker(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_satker);
        $builder->select();
        return $builder->get()->getResultArray();
    }
    
    public function tampil_wilayahtugas(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_wilayah);
        $builder->select();
        return $builder->get()->getResultArray();
    }
    
    public function tampil_kendaraan(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablekendaraan);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function saveKendaraan($data){
        $builder = $this->db->table($this->tablekendaraan);
        return $builder->insert($data);
    }

    public function updateKendaraan($data, $id)
    {
        $query = $this->db->table($this->tablekendaraan)->update($data, array('ran_id' => $id));
        return $query;
    }

    public function deleteKendaraan($id)
    {
        $query = $this->db->table($this->tablekendaraan)->delete(array('ran_id' => $id));
        return $query;
    } 

    

}