<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ref_rek_1 extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ref_rek_1_model');
    } 

    /*
     * Listing of ref_rek_1
     */
    function index()
    {
        $data['ref_rek_1'] = $this->Ref_rek_1_model->get_all_ref_rek_1();
        
        $data['_view'] = 'ref_rek_1/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ref_rek_1
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Nm_Rek_1' => $this->input->post('Nm_Rek_1'),
            );
            
            $ref_rek_1_id = $this->Ref_rek_1_model->add_ref_rek_1($params);
            redirect('ref_rek_1/index');
        }
        else
        {            
            $data['_view'] = 'ref_rek_1/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ref_rek_1
     */
    function edit($Kd_Rek_1)
    {   
        // check if the ref_rek_1 exists before trying to edit it
        $data['ref_rek_1'] = $this->Ref_rek_1_model->get_ref_rek_1($Kd_Rek_1);
        
        if(isset($data['ref_rek_1']['Kd_Rek_1']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Nm_Rek_1' => $this->input->post('Nm_Rek_1'),
                );

                $this->Ref_rek_1_model->update_ref_rek_1($Kd_Rek_1,$params);            
                redirect('ref_rek_1/index');
            }
            else
            {
                $data['_view'] = 'ref_rek_1/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ref_rek_1 you are trying to edit does not exist.');
    } 

    /*
     * Deleting ref_rek_1
     */
    function remove($Kd_Rek_1)
    {
        $ref_rek_1 = $this->Ref_rek_1_model->get_ref_rek_1($Kd_Rek_1);

        // check if the ref_rek_1 exists before trying to delete it
        if(isset($ref_rek_1['Kd_Rek_1']))
        {
            $this->Ref_rek_1_model->delete_ref_rek_1($Kd_Rek_1);
            redirect('ref_rek_1/index');
        }
        else
            show_error('The ref_rek_1 you are trying to delete does not exist.');
    }
    
}