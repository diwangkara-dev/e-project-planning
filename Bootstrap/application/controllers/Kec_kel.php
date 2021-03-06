<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kec_kel extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kec_kel_model');
    } 

    /*
     * Listing of kec_kel
     */
    function index()
    {
        $data['kec_kel'] = $this->Kec_kel_model->get_all_kec_kel();
        
        $data['_view'] = 'kec_kel/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new kec_kel
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_kecamatan' => $this->input->post('nama_kecamatan'),
				'nama_kelurahan' => $this->input->post('nama_kelurahan'),
            );
            
            $kec_kel_id = $this->Kec_kel_model->add_kec_kel($params);
            redirect('kec_kel/index');
        }
        else
        {            
            $data['_view'] = 'kec_kel/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a kec_kel
     */
    function edit($id_kelurahan)
    {   
        // check if the kec_kel exists before trying to edit it
        $data['kec_kel'] = $this->Kec_kel_model->get_kec_kel($id_kelurahan);
        
        if(isset($data['kec_kel']['id_kelurahan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_kecamatan' => $this->input->post('nama_kecamatan'),
					'nama_kelurahan' => $this->input->post('nama_kelurahan'),
                );

                $this->Kec_kel_model->update_kec_kel($id_kelurahan,$params);            
                redirect('kec_kel/index');
            }
            else
            {
                $data['_view'] = 'kec_kel/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The kec_kel you are trying to edit does not exist.');
    } 

    /*
     * Deleting kec_kel
     */
    function remove($id_kelurahan)
    {
        $kec_kel = $this->Kec_kel_model->get_kec_kel($id_kelurahan);

        // check if the kec_kel exists before trying to delete it
        if(isset($kec_kel['id_kelurahan']))
        {
            $this->Kec_kel_model->delete_kec_kel($id_kelurahan);
            redirect('kec_kel/index');
        }
        else
            show_error('The kec_kel you are trying to delete does not exist.');
    }
    
}
