<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Unit extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Unit_model');
    } 

    /*
     * Listing of unit
     */
    function index()
    {
        $data['unit'] = $this->Unit_model->get_all_unit();
        

        $data['_view'] = 'unit/index';
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('unit/index',$data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new unit
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'kode_bidang' => $this->input->post('kode_bidang'),
				'kode_urusan' => $this->input->post('kode_urusan'),
				'kode_unit' => $this->input->post('kode_unit'),
				'nama_unit' => $this->input->post('nama_unit'),
            );
            
            $unit_id = $this->Unit_model->add_unit($params);
            redirect('test-bootstrap/unit/index');
        }
        else
        {
			$this->load->model('Bidang_model');
			$data['all_bidang'] = $this->Bidang_model->get_all_bidang();
            
            $data['_view'] = 'unit/add';
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('unit/add',$data);
            $this->load->view('template/footer');
        }
    }  

    /*
     * Editing a unit
     */
    function edit($id_unit)
    {   
        // check if the unit exists before trying to edit it
        $data['unit'] = $this->Unit_model->get_unit($id_unit);
        
        if(isset($data['unit']['id_unit']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kode_bidang' => $this->input->post('kode_bidang'),
					'kode_urusan' => $this->input->post('kode_urusan'),
					'kode_unit' => $this->input->post('kode_unit'),
					'nama_unit' => $this->input->post('nama_unit'),
                );

                $this->Unit_model->update_unit($id_unit,$params);            
                redirect('test-bootstrap/unit/index');
            }
            else
            {
				$this->load->model('Bidang_model');
				$data['all_bidang'] = $this->Bidang_model->get_all_bidang();

                $data['_view'] = 'unit/edit';
                $this->load->view('template/header');
                $this->load->view('template/sidebar');
                $this->load->view('unit/edit',$data);
                $this->load->view('template/footer');
            }
        }
        else
            show_error('The unit you are trying to edit does not exist.');
    } 

    /*
     * Deleting unit
     */
    function remove($id_unit)
    {
        $unit = $this->Unit_model->get_unit($id_unit);

        // check if the unit exists before trying to delete it
        if(isset($unit['id_unit']))
        {
            $this->Unit_model->delete_unit($id_unit);
            redirect('unit/index');
        }
        else
            show_error('The unit you are trying to delete does not exist.');
    }
    
}
