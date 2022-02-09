<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_id";
    protected $allowedFields = ["user_nama","user_pass","user_role"];
    protected $useTimestamps = true;
    protected $createdField  = 'user_created_at';
    protected $deletedField  = 'user_deleted_tgl';
    
}

?>