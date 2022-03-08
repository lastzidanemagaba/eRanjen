<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class KartuModel extends Model
{
    protected $tablekartu = 'kartus';
    protected $tablemaster_ran_jen = 'master_ran_jen';
    protected $tablemaster_ranjen_is = 'master_ranjen_is';

    public function getKartu($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablekartu);
        if($id == false){
            return $builder->get()->getResultArray();
        }else{
            return $builder->getWhere(['kartu_id' => $id]);
        }   
    }

    public function getran_jen(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_ran_jen);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function getranjen_is(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_ranjen_is);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function saveKartu($data){
        $builder = $this->db->table($this->tablekartu);
        return $builder->insert($data);
    }

    public function updateKartu($data, $id)
    {
        $query = $this->db->table($this->tablekartu)->update($data, array('kartu_id' => $id));
        return $query;
    }

    public function deleteKartu($id)
    {
        $query = $this->db->table($this->tablekartu)->delete(array('kartu_id' => $id));
        return $query;
    } 
 
}