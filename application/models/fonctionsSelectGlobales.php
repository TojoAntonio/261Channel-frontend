<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/07/14
 * Time: 15:43
 */



class fonctionsSelectGlobales extends CI_Model{


    public function getElement($table, $colonne, $reference, $valeurReference)
    {
        $result = $this->db->select($colonne)
            ->from($table)
            ->where($reference, $valeurReference)
            ->where('SUPPRIME',0)
            ->limit(1, 0)
            ->get()
            ->result();
        return $result;
    }
    public function getElement2($table, $colonne, $references)
    {
        $result = $this->db->select($colonne)
            ->from($table)
            ->where($references)
            ->where('SUPPRIME',0)
            ->limit(1, 0)
            ->get()
            ->result();
        return $result;
    }

    //Une quantité
    public function getQuantity($table, $references,$v)
    {
        return (int) $this->db
            ->where($references,$v)
            ->where('SUPPRIME',0)
            ->count_all_results($table);
    }

    public function getQuantity2($table, $reference, $valeurReference)
    {
        $result = $this->db
            ->where($reference, $valeurReference)
            ->where('SUPPRIME',0)
            ->count_all_results($table);
        return $result;
    }

    //Un nombre maximum
    public function getMax($table, $colonne)
    {
        return $this->db
            ->select_max($colonne)
            ->from($table)
            ->get()
            ->where('SUPPRIME',0)
            ->result();
    }

    //Une Liste simple
    public function getSimpleList($table, $colonnes)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where('SUPPRIME',0)
            ->get()
            ->result();

    }

    public function getSimpleListOrderBy($table, $colonnes, $order, $typeorder)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where('SUPPRIME',0)
            ->order_by($order, $typeorder)
            ->limit(3,0)
            ->get()
            ->result();
    }

    //Une Liste simple + Group By
    public function getSimpleListGroup($table, $colonnes, $grouppement)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where('SUPPRIME',0)
            ->group_by($grouppement)
            ->get()
            ->result();
    }

    //Une Liste simple + where
    public function getSimpleListWhere($table, $colonnes, $indication, $valeurindication)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where($indication, $valeurindication)
            ->where('SUPPRIME',0)
            ->get()
            ->result();
    }

    public function getSimpleListWhereOrderBy($table, $colonnes, $indication, $valeurindication, $order, $typeorder)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where($indication, $valeurindication)
            ->where('SUPPRIME',0)
            ->order_by($order, $typeorder)
            ->get()
            ->result();
    }

    public function getSimpleListWhereArray($table, $colonnes, $indication)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where($indication)
            ->where('SUPPRIME',0)
            ->get()
            ->result();
    }

    public function getSimpleListWhereArrayOrderBy($table, $colonnes, $indication, $order, $typeorder)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where($indication)
            ->where('SUPPRIME',0)
            ->order_by($order, $typeorder)
            ->get()
            ->result();
    }

    //Une Liste simple + Group By + where
    public function getSimpleListGroupWhere($table, $colonnes, $indication, $valeurindication, $grouppement)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->where($indication, $valeurindication)
            ->where('SUPPRIME',0)
            ->group_by($grouppement)
            ->get()
            ->result();
    }

    //Une Liste avec like
    public function getSearchList($table, $colonnes, $like)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->like($like)
            ->where('SUPPRIME',0)
            ->get()
            ->result();
    }

    //Une liste avec like + group by
    public function getSearchListGrouped($table, $colonnes, $like, $grouppement)
    {
        return $this->db->select($colonnes)
            ->from($table)
            ->like($like)
            ->where('SUPPRIME',0)
            ->group_by($grouppement)
            ->get()
            ->result();
    }
    public function query($query){
        return $this->db->query($query);
    }

}