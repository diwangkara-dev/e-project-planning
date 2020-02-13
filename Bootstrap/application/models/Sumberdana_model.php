<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Sumberdana_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get sumberdana by id_sumberdana
     */
    function get_sumberdana($id_sumberdana)
    {
        return $this->db->get_where('sumberdana',array('id_sumberdana'=>$id_sumberdana))->row_array();
    }
        
    /*
     * Get all sumberdana
     */
    function get_all_sumberdana()
    {
        $this->db->order_by('id_sumberdana', 'desc');
        return $this->db->get('sumberdana')->result_array();
    }
        
    /*
     * function to add new sumberdana
     */
    function add_sumberdana($params)
    {
        $this->db->insert('sumberdana',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update sumberdana
     */
    function update_sumberdana($id_sumberdana,$params)
    {
        $this->db->where('id_sumberdana',$id_sumberdana);
        return $this->db->update('sumberdana',$params);
    }
    
    /*
     * function to delete sumberdana
     */
    function delete_sumberdana($id_sumberdana)
    {
        return $this->db->delete('sumberdana',array('id_sumberdana'=>$id_sumberdana));
    }
}
