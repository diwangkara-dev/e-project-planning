<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Urusan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get urusan by id_urusan
     */
    function get_urusan($id_urusan)
    {
        return $this->db->get_where('urusan',array('id_urusan'=>$id_urusan))->row_array();
    }
        
    /*
     * Get all urusan
     */
    function get_all_urusan()
    {
        $this->db->order_by('id_urusan', 'desc');
        return $this->db->get('urusan')->result_array();
    }
        
    /*
     * function to add new urusan
     */
    function add_urusan($params)
    {
        $this->db->insert('urusan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update urusan
     */
    function update_urusan($id_urusan,$params)
    {
        $this->db->where('id_urusan',$id_urusan);
        return $this->db->update('urusan',$params);
    }
    
    /*
     * function to delete urusan
     */
    function delete_urusan($id_urusan)
    {
        return $this->db->delete('urusan',array('id_urusan'=>$id_urusan));
    }
}