<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _program_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get _program by id_program
     */
    function get__program($id_program)
    {
        return $this->db->get_where('_program',array('id_program'=>$id_program))->row_array();
    }
        
    /*
     * Get all _program
     */
    function get_all__program()
    {
        $this->db->order_by('id_program', 'desc');
        return $this->db->get('_program')->result_array();
    }
        
    /*
     * function to add new _program
     */
    function add__program($params)
    {
        $this->db->insert('_program',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update _program
     */
    function update__program($id_program,$params)
    {
        $this->db->where('id_program',$id_program);
        return $this->db->update('_program',$params);
    }
    
    /*
     * function to delete _program
     */
    function delete__program($id_program)
    {
        return $this->db->delete('_program',array('id_program'=>$id_program));
    }
}
