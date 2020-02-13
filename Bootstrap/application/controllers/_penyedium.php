<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _penyedium extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_penyedium_model');
    } 

    /*
     * Listing of _penyedia
     */
    function index()
    {
        $data['_penyedia'] = $this->_penyedium_model->get_all__penyedia();
        
        $data['_view'] = '_penyedium/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new _penyedium
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_jenis_penyedia' => $this->input->post('id_jenis_penyedia'),
            );
            
            $_penyedium_id = $this->_penyedium_model->add__penyedium($params);
            redirect('_penyedium/index');
        }
        else
        {
			$this->load->model('_jenis_penyedium_model');
			$data['all__jenis_penyedia'] = $this->_jenis_penyedium_model->get_all__jenis_penyedia();
            
            $data['_view'] = '_penyedium/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a _penyedium
     */
    function edit($id_penyedia)
    {   
        // check if the _penyedium exists before trying to edit it
        $data['_penyedium'] = $this->_penyedium_model->get__penyedium($id_penyedia);
        
        if(isset($data['_penyedium']['id_penyedia']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_jenis_penyedia' => $this->input->post('id_jenis_penyedia'),
                );

                $this->_penyedium_model->update__penyedium($id_penyedia,$params);            
                redirect('_penyedium/index');
            }
            else
            {
				$this->load->model('_jenis_penyedium_model');
				$data['all__jenis_penyedia'] = $this->_jenis_penyedium_model->get_all__jenis_penyedia();

                $data['_view'] = '_penyedium/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The _penyedium you are trying to edit does not exist.');
    } 

    /*
     * Deleting _penyedium
     */
    function remove($id_penyedia)
    {
        $_penyedium = $this->_penyedium_model->get__penyedium($id_penyedia);

        // check if the _penyedium exists before trying to delete it
        if(isset($_penyedium['id_penyedia']))
        {
            $this->_penyedium_model->delete__penyedium($id_penyedia);
            redirect('_penyedium/index');
        }
        else
            show_error('The _penyedium you are trying to delete does not exist.');
    }
    
}