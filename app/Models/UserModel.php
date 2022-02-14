<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $tableuser_roles      = 'user_roles';
    protected $tablelog_aktifitas      = 'log_aktifitas';
    protected $primaryKey = 'user_id';
 
    protected $returnType     = 'object';
    protected $useSoftDeletes = true;
 
    protected $allowedFields = ['user_nama','user_email','user_pass','user_created_at'];
 
    protected $useTimestamps = true;
    protected $createdField  = 'user_created_at';
    protected $updatedField  = 'user_updated_at';
    protected $deletedField  = 'user_deleted_tgl';
   




    public function getUser($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->table);
        if($id == false){
            return $builder->get()->getResultArray();
        }else{
            return $builder->getWhere(['user_id' => $id]);
        }   
    }

    public function tampil_User(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->table);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    public function tampil_role(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tableuser_roles);
        $builder->select();
        return $builder->get()->getResultArray();
    }

    

    public function saveUser($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function saveUserLog($data){
        $builder = $this->db->table($this->tablelog_aktifitas);
        return $builder->insert($data);
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('user_id' => $id));
        return $query;
    }

    public function deleteUser($id)
    {
        $query = $this->db->table($this->table)->delete(array('user_id' => $id));
        return $query;
    } 
    
}

?>