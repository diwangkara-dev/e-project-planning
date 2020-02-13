<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bidang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get bidang by id_bidang
     */
    function get_bidang($id_bidang)
    {
        return $this->db->get_where('bidang',array('id_bidang'=>$id_bidang))->row_array();
    }
        
    /*
     * Get all bidang
     */
    function get_all_bidang()
    {
        $this->db->order_by('id_bidang', 'desc');
        return $this->db->get('bidang')->result_array();
    }
        
    /*
     * function to add new bidang
     */
    function add_bidang($params)
    {
        $this->db->insert('bidang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update bidang
     */
    function update_bidang($id_bidang,$params)
    {
        $this->db->where('id_bidang',$id_bidang);
        return $this->db->update('bidang',$params);
    }
    
    /*
     * function to delete bidang
     */
    function delete_bidang($id_bidang)
    {
        return $this->db->delete('bidang',array('id_bidang'=>$id_bidang));
    }
}