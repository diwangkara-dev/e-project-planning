<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tr_lokasi_paket_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tr_lokasi_paket by id
     */
    function get_tr_lokasi_paket($id)
    {
        return $this->db->get_where('tr_lokasi_paket',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tr_lokasi_paket
     */
    function get_all_tr_lokasi_paket()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tr_lokasi_paket')->result_array();
    }
        
    /*
     * function to add new tr_lokasi_paket
     */
    function add_tr_lokasi_paket($params)
    {
        $this->db->insert('tr_lokasi_paket',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tr_lokasi_paket
     */
    function update_tr_lokasi_paket($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tr_lokasi_paket',$params);
    }
    
    /*
     * function to delete tr_lokasi_paket
     */
    function delete_tr_lokasi_paket($id)
    {
        return $this->db->delete('tr_lokasi_paket',array('id'=>$id));
    }
}