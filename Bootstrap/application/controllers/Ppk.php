<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ppk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ppk_model');
    } 

    /*
     * Listing of ppk
     */
    function index()
    {
        $data['ppk'] = $this->Ppk_model->get_all_ppk();
        
        $data['_view'] = 'ppk/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ppk
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_ppk' => $this->input->post('nama_ppk'),
				'nip_ppk' => $this->input->post('nip_ppk'),
				'id_satker_ppk' => $this->input->post('id_satker_ppk'),
            );
            
            $ppk_id = $this->Ppk_model->add_ppk($params);
            redirect('ppk/index');
        }
        else
        {            
            $data['_view'] = 'ppk/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ppk
     */
    function edit($id_ppk)
    {   
        // check if the ppk exists before trying to edit it
        $data['ppk'] = $this->Ppk_model->get_ppk($id_ppk);
        
        if(isset($data['ppk']['id_ppk']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_ppk' => $this->input->post('nama_ppk'),
					'nip_ppk' => $this->input->post('nip_ppk'),
					'id_satker_ppk' => $this->input->post('id_satker_ppk'),
                );

                $this->Ppk_model->update_ppk($id_ppk,$params);            
                redirect('ppk/index');
            }
            else
            {
                $data['_view'] = 'ppk/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ppk you are trying to edit does not exist.');
    } 

    /*
     * Deleting ppk
     */
    function remove($id_ppk)
    {
        $ppk = $this->Ppk_model->get_ppk($id_ppk);

        // check if the ppk exists before trying to delete it
        if(isset($ppk['id_ppk']))
        {
            $this->Ppk_model->delete_ppk($id_ppk);
            redirect('ppk/index');
        }
        else
            show_error('The ppk you are trying to delete does not exist.');
    }
    
}
