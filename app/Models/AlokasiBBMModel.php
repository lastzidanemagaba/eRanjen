<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class AlokasiBBMModel extends Model
{
    protected $tablestotalbbm = 'master_alokasibbm';

    public function gettotalbbm($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablestotalbbm);
        if($id == false){
            return $builder->get()->getResultArray();
        }else{
            return $builder->getWhere(['ran_id_bbm' => $id]);
        }   
    }

    public function tampil_totalbbm(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablestotalbbm);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function savetotalbbm($data){
        $builder = $this->db->table($this->tablestotalbbm);
        return $builder->insert($data);
    }

    public function updatetotalbbm($data, $id)
    {
        $query = $this->db->table($this->tablestotalbbm)->update($data, array('ran_id_bbm' => $id));
        return $query;
    }

    public function deletetotalbbm($id)
    {
        $query = $this->db->table($this->tablestotalbbm)->delete(array('ran_id_bbm' => $id));
        return $query;
    } 
 
}