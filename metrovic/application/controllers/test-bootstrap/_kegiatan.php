<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _kegiatan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_kegiatan_model');
    } 

    /*
     * Listing of _kegiatan
     */
    function index()
    {
        $data['_kegiatan'] = $this->_kegiatan_model->get_all__kegiatan();
        
        $data['_view'] = '_kegiatan/index';
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('_kegiatan/index',$data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new _kegiatan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_program' => $this->input->post('id_program'),
				'kd_keg' => $this->input->post('kd_keg'),
				'program' => $this->input->post('program'),
				'kegiatan' => $this->input->post('kegiatan'),
            );
            
            $_kegiatan_id = $this->_kegiatan_model->add__kegiatan($params);
            redirect('_kegiatan/index');
        }
        else
        {
			$this->load->model('_program_model');
			$data['all__program'] = $this->_program_model->get_all__program();
            
            $data['_view'] = '_kegiatan/add';
            //$this->load->view('layouts/main',$data);
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('_kegiatan/add',$data);
            $this->load->view('template/footer');
        }
    }  

    /*
     * Editing a _kegiatan
     */
    function edit($id_kegiatan)
    {   
        // check if the _kegiatan exists before trying to edit it
        $data['_kegiatan'] = $this->_kegiatan_model->get__kegiatan($id_kegiatan);
        
        if(isset($data['_kegiatan']['id_kegiatan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_program' => $this->input->post('id_program'),
					'kd_keg' => $this->input->post('kd_keg'),
					'program' => $this->input->post('program'),
					'kegiatan' => $this->input->post('kegiatan'),
                );

                $this->_kegiatan_model->update__kegiatan($id_kegiatan,$params);            
                redirect('test-bootstrap/_kegiatan/index');
            }
            else
            {
				$this->load->model('_program_model');
				$data['all__program'] = $this->_program_model->get_all__program();

                $data['_view'] = '_kegiatan/edit';
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('_kegiatan/edit',$data);
                $this->load->view('template/footer');
            }
        }
        else
            show_error('The _kegiatan you are trying to edit does not exist.');
    } 

    /*
     * Deleting _kegiatan
     */
    function remove($id_kegiatan)
    {
        $_kegiatan = $this->_kegiatan_model->get__kegiatan($id_kegiatan);

        // check if the _kegiatan exists before trying to delete it
        if(isset($_kegiatan['id_kegiatan']))
        {
            $this->_kegiatan_model->delete__kegiatan($id_kegiatan);
            redirect('_kegiatan/index');
        }
        else
            show_error('The _kegiatan you are trying to delete does not exist.');
    }
    
}
