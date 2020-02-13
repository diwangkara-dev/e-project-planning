<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _jenis_penyedium_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get _jenis_penyedium by id_jenis_penyedia
     */
    function get__jenis_penyedium($id_jenis_penyedia)
    {
        return $this->db->get_where('_jenis_penyedia',array('id_jenis_penyedia'=>$id_jenis_penyedia))->row_array();
    }
        
    /*
     * Get all _jenis_penyedia
     */
    function get_all__jenis_penyedia()
    {
        $this->db->order_by('id_jenis_penyedia', 'desc');
        return $this->db->get('_jenis_penyedia')->result_array();
    }
        
    /*
     * function to add new _jenis_penyedium
     */
    function add__jenis_penyedium($params)
    {
        $this->db->insert('_jenis_penyedia',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update _jenis_penyedium
     */
    function update__jenis_penyedium($id_jenis_penyedia,$params)
    {
        $this->db->where('id_jenis_penyedia',$id_jenis_penyedia);
        return $this->db->update('_jenis_penyedia',$params);
    }
    
    /*
     * function to delete _jenis_penyedium
     */
    function delete__jenis_penyedium($id_jenis_penyedia)
    {
        return $this->db->delete('_jenis_penyedia',array('id_jenis_penyedia'=>$id_jenis_penyedia));
    }
}
