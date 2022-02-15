<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class SatkerModel extends Model
{
    protected $tablemaster_satker = 'master_satker';

    public function getSatker($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablemaster_satker);
        if($id == false){
            return $builder->get()->getResultArray();
        }else{
            return $builder->getWhere(['msat_id' => $id]);
        }   
    }

    public function saveSatker($data){
        $builder = $this->db->table($this->tablemaster_satker);
        return $builder->insert($data);
    }

    public function updateSatker($data, $id)
    {
        $query = $this->db->table($this->tablemaster_satker)->update($data, array('msat_id' => $id));
        return $query;
    }

    public function deleteSatker($id)
    {
        $query = $this->db->table($this->tablemaster_satker)->delete(array('msat_id' => $id));
        return $query;
    } 

 
}