<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jeni extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jeni_model');
    } 

    /*
     * Listing of jenis
     */
    function index()
    {
        $data['jenis'] = $this->Jeni_model->get_all_jenis();
        
        $data['_view'] = 'jeni/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new jeni
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nm_jenis' => $this->input->post('nm_jenis'),
            );
            
            $jeni_id = $this->Jeni_model->add_jeni($params);
            redirect('jeni/index');
        }
        else
        {            
            $data['_view'] = 'jeni/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a jeni
     */
    function edit($id_jenis)
    {   
        // check if the jeni exists before trying to edit it
        $data['jeni'] = $this->Jeni_model->get_jeni($id_jenis);
        
        if(isset($data['jeni']['id_jenis']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nm_jenis' => $this->input->post('nm_jenis'),
                );

                $this->Jeni_model->update_jeni($id_jenis,$params);            
                redirect('jeni/index');
            }
            else
            {
                $data['_view'] = 'jeni/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The jeni you are trying to edit does not exist.');
    } 

    /*
     * Deleting jeni
     */
    function remove($id_jenis)
    {
        $jeni = $this->Jeni_model->get_jeni($id_jenis);

        // check if the jeni exists before trying to delete it
        if(isset($jeni['id_jenis']))
        {
            $this->Jeni_model->delete_jeni($id_jenis);
            redirect('jeni/index');
        }
        else
            show_error('The jeni you are trying to delete does not exist.');
    }
    
}