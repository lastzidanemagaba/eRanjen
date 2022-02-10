<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Kendaraan_model extends Model
{
    protected $tablekendaraan = 'kendaraan'; 
    protected $tablemaster_bbm_jenis = 'master_bbm_jenis'; 
    protected $tablemaster_ran_jen = 'master_ran_jen'; 
    protected $tablemaster_ran_tipe = 'master_ran_tipe'; 
    protected $tablemaster_satker = 'master_satker'; 
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