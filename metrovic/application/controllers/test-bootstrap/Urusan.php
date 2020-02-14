<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Urusan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Urusan_model');
    } 

    /*
     * Listing of urusan
     */
    function index()
    {
        $data['urusan'] = $this->Urusan_model->get_all_urusan();
        
        $data['_view'] = 'urusan/index';
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('urusan/index',$data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new urusan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_urusan' => $this->input->post('nama_urusan'),
            );
            
            $urusan_id = $this->Urusan_model->add_urusan($params);
            redirect('urusan/index');
        }
        else
        {            
            $data['_view'] = 'urusan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a urusan
     */
    function edit($id_urusan)
    {   
        // check if the urusan exists before trying to edit it
        $data['urusan'] = $this->Urusan_model->get_urusan($id_urusan);

        


        
        if(isset($data['urusan']['id_urusan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_urusan' => $this->input->post('nama_urusan'),
                );

                $this->Urusan_model->update_urusan($id_urusan,$params);            
                redirect('urusan/index');
            }
            else
            {
                $data['_view'] = 'urusan/edit';
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('urusan/edit',$data);
                $this->load->view('template/footer');
            }
        }
        else
            show_error('The urusan you are trying to edit does not exist.');
    } 

    /*
     * Deleting urusan
     */
    function remove($id_urusan)
    {
        $urusan = $this->Urusan_model->get_urusan($id_urusan);

        // check if the urusan exists before trying to delete it
        if(isset($urusan['id_urusan']))
        {
            $this->Urusan_model->delete_urusan($id_urusan);
            redirect('urusan/index');
        }
        else
            show_error('The urusan you are trying to delete does not exist.');
    }
    
}

