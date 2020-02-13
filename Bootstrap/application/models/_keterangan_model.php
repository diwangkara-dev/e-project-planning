<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _keterangan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get _keterangan by id_keterangan
     */
    function get__keterangan($id_keterangan)
    {
        return $this->db->get_where('_keterangan',array('id_keterangan'=>$id_keterangan))->row_array();
    }
        
    /*
     * Get all _keterangan
     */
    function get_all__keterangan()
    {
        $this->db->order_by('id_keterangan', 'desc');
        return $this->db->get('_keterangan')->result_array();
    }
        
    /*
     * function to add new _keterangan
     */
    function add__keterangan($params)
    {
        $this->db->insert('_keterangan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update _keterangan
     */
    function update__keterangan($id_keterangan,$params)
    {
        $this->db->where('id_keterangan',$id_keterangan);
        return $this->db->update('_keterangan',$params);
    }
    
    /*
     * function to delete _keterangan
     */
    function delete__keterangan($id_keterangan)
    {
        return $this->db->delete('_keterangan',array('id_keterangan'=>$id_keterangan));
    }
}
