<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class DashboardModel extends Model
{
    protected $tableskendaraan = 'kendaraan';
    protected $tablesspbus = 'spbus';
    protected $tablesusers = 'users';
    protected $tableskartus = 'kartus';

    public function tampil_totalkendaraan(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tableskendaraan);
        $builder->select();
        return $builder->countAll();
    }

    public function tampil_totalspbu(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablesspbus);
        $builder->select();
        return $builder->countAll();
    }

    public function tampil_totalusers(){
        $db = \Config\Database::connect();
        $builder = $this->db->table($this->tablesusers);
        $builder->select();
        return $builder->countAll();
    }

    public function tampil_totalkartusranjen(){
        $db = \Config\Database::connect();
        $query = "SELECT count(kartu_ranjen_is) AS 'totalranjen' FROM `kartus` WHERE kartu_ranjen_is = 1";
        $query=$this->db->query($query); 
        return $query->getResultArray();
    }

    public function tampil_totalkartuskupondukungan(){
        $db = \Config\Database::connect();
        $query = "SELECT count(kartu_ranjen_is) AS 'totalkupondukungan' FROM `kartus` WHERE kartu_ranjen_is = 2";
        $query=$this->db->query($query); 
        return $query->getResultArray();
    }

    public function tampil_totalkartuscadanganmaster(){
        $db = \Config\Database::connect();
        $query = "SELECT count(kartu_ranjen_is) AS 'totalcadanganmaster' FROM `kartus` WHERE kartu_ranjen_is = 3";
        $query=$this->db->query($query); 
        return $query->getResultArray();
    }

    public function tampil_totalkartuscadanganjabatan(){
        $db = \Config\Database::connect();
        $query = "SELECT count(kartu_ranjen_is) AS 'totalcadanganjabatan' FROM `kartus` WHERE kartu_ranjen_is = 4";
        $query =$this->db->query($query); 
        return $query->getResultArray();
    }
}