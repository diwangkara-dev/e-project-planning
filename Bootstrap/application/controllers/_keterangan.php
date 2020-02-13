<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class _keterangan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_keterangan_model');
    } 

    /*
     * Listing of _keterangan
     */
    function index()
    {
        $data['_keterangan'] = $this->_keterangan_model->get_all__keterangan();
        
        $data['_view'] = '_keterangan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new _keterangan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_kegiatan' => $this->input->post('id_kegiatan'),
				'keterangan' => $this->input->post('keterangan'),
				'rincian' => $this->input->post('rincian'),
				'jumlah' => $this->input->post('jumlah'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'total' => $this->input->post('total'),
            );
            
            $_keterangan_id = $this->_keterangan_model->add__keterangan($params);
            redirect('_keterangan/index');
        }
        else
        {
			$this->load->model('_kegiatan_model');
			$data['all__kegiatan'] = $this->_kegiatan_model->get_all__kegiatan();
            
            $data['_view'] = '_keterangan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a _keterangan
     */
    function edit($id_keterangan)
    {   
        // check if the _keterangan exists before trying to edit it
        $data['_keterangan'] = $this->_keterangan_model->get__keterangan($id_keterangan);
        
        if(isset($data['_keterangan']['id_keterangan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_kegiatan' => $this->input->post('id_kegiatan'),
					'keterangan' => $this->input->post('keterangan'),
					'rincian' => $this->input->post('rincian'),
					'jumlah' => $this->input->post('jumlah'),
					'satuan' => $this->input->post('satuan'),
					'harga' => $this->input->post('harga'),
					'total' => $this->input->post('total'),
                );

                $this->_keterangan_model->update__keterangan($id_keterangan,$params);            
                redirect('_keterangan/index');
            }
            else
            {
				$this->load->model('_kegiatan_model');
				$data['all__kegiatan'] = $this->_kegiatan_model->get_all__kegiatan();

                $data['_view'] = '_keterangan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The _keterangan you are trying to edit does not exist.');
    } 

    /*
     * Deleting _keterangan
     */
    function remove($id_keterangan)
    {
        $_keterangan = $this->_keterangan_model->get__keterangan($id_keterangan);

        // check if the _keterangan exists before trying to delete it
        if(isset($_keterangan['id_keterangan']))
        {
            $this->_keterangan_model->delete__keterangan($id_keterangan);
            redirect('_keterangan/index');
        }
        else
            show_error('The _keterangan you are trying to delete does not exist.');
    }
    
}
