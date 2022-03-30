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

    public function getJoinKendaraan($id = false)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kendaraan');
        $builder->select('kartus.kartu_id,kendaraan.ran_id,kendaraan.ran_nopol,master_bbm_jenis.mbj_id ,master_bbm_jenis.mbj_bbmnama as ran_bbm_jenis,master_ran_jen.mrj_id,master_ran_jen.mrj_nama as ran_jen,master_ran_tipe.mrt_id,master_ran_tipe.mrt_nama as ran_tipe,master_satker.msat_id,master_satker.msat_nama as ran_satker,master_kondisi.mkon_id ,master_kondisi.mkon_nama as ran_kondisi,master_wilayah.mwil_id,master_wilayah.mwil_nama as ran_wilayah,ran_liter,kartus.kartu_tag_no,kartus.kartu_paired,kartus.kartu_paired_by,kartus.kartu_paired_tgl,kartus.kartu_created_tgl,kartus.kartu_ranjen_is,kartus.kartu_deleted,kartus.kartu_deleted_by,kartus.kartu_deleted_tgl');
        $builder->join('master_bbm_jenis', 'master_bbm_jenis.mbj_id = kendaraan.ran_bbm_jenis','left');
        $builder->join('master_ran_jen', 'master_ran_jen.mrj_id = kendaraan.ran_bbm_jenis','left');
        $builder->join('master_ran_tipe', 'master_ran_tipe.mrt_id  = kendaraan.ran_tipe','left');
        $builder->join('master_satker', 'master_satker.msat_id = kendaraan.ran_satker','left');
        $builder->join('master_wilayah', 'master_wilayah.mwil_id  = kendaraan.ran_wilayah','left');
        $builder->join('master_kondisi', 'master_kondisi.mkon_id  = kendaraan.ran_kondisi','left');
        $builder->join('kartus', 'kartus.kartu_kendaraan = kendaraan.ran_id','left');
        return $builder->get()->getResultArray();  
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