<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 12/08/14
 * Time: 21:18
 */

class fonctionsCRUD extends CI_Model{

    public function insertData($table = '', $data = '')
    {
        $this->db->insert($table, $data);
    }
    public function deleteData($table = '', $data = '')
    {
        $this->db->delete($table, $data);
    }
    public function updateData($table, $data, $reference, $valeurreference)
    {
        $this->db->where($reference, $valeurreference);
        $this->db->update($table, $data);
    }
    public function deleteWhere($table, $colonne, $valeur)
    {
        $this->db->where($colonne,$valeur);
        $this->db->delete($table);
    }
    public function deleteWhere2($table, $colonne, $valeur,$colonne2,$valeur2)
    {
        $this->db->where($colonne,$valeur);
        $this->db->where($colonne2,$valeur2);
        $this->db->delete($table);
    }
} 