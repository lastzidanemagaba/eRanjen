<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class SPBUModel extends Model
{
    protected $tablespbu = 'spbus';

    public function getSPBU($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablespbu);
        if($id == false){
            $builder->select('spbus.spbu_id,spbus.spbu_nama,spbus.spbu_kode,spbus.spbu_alamat,master_wilayah.mwil_nama');
            $builder->join('master_wilayah', 'spbus.spbu_wilayah=master_wilayah.mwil_id','left');
            return $builder->get()->getResultArray();
        }else{
            return $builder->getWhere(['spbu_id' => $id]);
        }   
    }

    public function tampil_spbu(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablespbu);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function saveSPBU($data){
        $builder = $this->db->table($this->tablespbu);
        return $builder->insert($data);
    }

    public function updateSPBU($data, $id)
    {
        $query = $this->db->table($this->tablespbu)->update($data, array('spbu_id' => $id));
        return $query;
    }

    public function deleteSPBU($id)
    {
        $query = $this->db->table($this->tablespbu)->delete(array('spbu_id' => $id));
        return $query;
    } 
 
}