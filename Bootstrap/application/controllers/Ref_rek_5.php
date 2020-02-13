<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ref_rek_5 extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ref_rek_5_model');
    } 

    /*
     * Listing of ref_rek_5
     */
    function index()
    {
        $data['ref_rek_5'] = $this->Ref_rek_5_model->get_all_ref_rek_5();
        
        $data['_view'] = 'ref_rek_5/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ref_rek_5
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Status' => $this->input->post('Status'),
				'Nm_Rek_5' => $this->input->post('Nm_Rek_5'),
				'Peraturan' => $this->input->post('Peraturan'),
				'Ket_Rek_5' => $this->input->post('Ket_Rek_5'),
            );
            
            $ref_rek_5_id = $this->Ref_rek_5_model->add_ref_rek_5($params);
            redirect('ref_rek_5/index');
        }
        else
        {            
            $data['_view'] = 'ref_rek_5/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ref_rek_5
     */
    function edit($Kd_Rek_1)
    {   
        // check if the ref_rek_5 exists before trying to edit it
        $data['ref_rek_5'] = $this->Ref_rek_5_model->get_ref_rek_5($Kd_Rek_1);
        
        if(isset($data['ref_rek_5']['Kd_Rek_1']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Status' => $this->input->post('Status'),
					'Nm_Rek_5' => $this->input->post('Nm_Rek_5'),
					'Peraturan' => $this->input->post('Peraturan'),
					'Ket_Rek_5' => $this->input->post('Ket_Rek_5'),
                );

                $this->Ref_rek_5_model->update_ref_rek_5($Kd_Rek_1,$params);            
                redirect('ref_rek_5/index');
            }
            else
            {
                $data['_view'] = 'ref_rek_5/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ref_rek_5 you are trying to edit does not exist.');
    } 

    /*
     * Deleting ref_rek_5
     */
    function remove($Kd_Rek_1)
    {
        $ref_rek_5 = $this->Ref_rek_5_model->get_ref_rek_5($Kd_Rek_1);

        // check if the ref_rek_5 exists before trying to delete it
        if(isset($ref_rek_5['Kd_Rek_1']))
        {
            $this->Ref_rek_5_model->delete_ref_rek_5($Kd_Rek_1);
            redirect('ref_rek_5/index');
        }
        else
            show_error('The ref_rek_5 you are trying to delete does not exist.');
    }
    
}
