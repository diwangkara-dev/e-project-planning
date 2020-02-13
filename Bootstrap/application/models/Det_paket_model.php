<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Det_paket_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get det_paket by id_det_paket
     */
    function get_det_paket($id_det_paket)
    {
        return $this->db->get_where('det_paket',array('id_det_paket'=>$id_det_paket))->row_array();
    }
        
    /*
     * Get all det_paket
     */
    function get_all_det_paket()
    {
        $this->db->order_by('id_det_paket', 'desc');
        return $this->db->get('det_paket')->result_array();
    }
        
    /*
     * function to add new det_paket
     */
    function add_det_paket($params)
    {
        $this->db->insert('det_paket',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update det_paket
     */
    function update_det_paket($id_det_paket,$params)
    {
        $this->db->where('id_det_paket',$id_det_paket);
        return $this->db->update('det_paket',$params);
    }
    
    /*
     * function to delete det_paket
     */
    function delete_det_paket($id_det_paket)
    {
        return $this->db->delete('det_paket',array('id_det_paket'=>$id_det_paket));
    }
}
