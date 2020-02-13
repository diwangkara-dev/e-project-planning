<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ref_rek_2 extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ref_rek_2_model');
    } 

    /*
     * Listing of ref_rek_2
     */
    function index()
    {
        $data['ref_rek_2'] = $this->Ref_rek_2_model->get_all_ref_rek_2();
        
        $data['_view'] = 'ref_rek_2/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ref_rek_2
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Nm_Rek_2' => $this->input->post('Nm_Rek_2'),
            );
            
            $ref_rek_2_id = $this->Ref_rek_2_model->add_ref_rek_2($params);
            redirect('ref_rek_2/index');
        }
        else
        {            
            $data['_view'] = 'ref_rek_2/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ref_rek_2
     */
    function edit($Kd_Rek_1)
    {   
        // check if the ref_rek_2 exists before trying to edit it
        $data['ref_rek_2'] = $this->Ref_rek_2_model->get_ref_rek_2($Kd_Rek_1);
        
        if(isset($data['ref_rek_2']['Kd_Rek_1']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Nm_Rek_2' => $this->input->post('Nm_Rek_2'),
                );

                $this->Ref_rek_2_model->update_ref_rek_2($Kd_Rek_1,$params);            
                redirect('ref_rek_2/index');
            }
            else
            {
                $data['_view'] = 'ref_rek_2/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ref_rek_2 you are trying to edit does not exist.');
    } 

    /*
     * Deleting ref_rek_2
     */
    function remove($Kd_Rek_1)
    {
        $ref_rek_2 = $this->Ref_rek_2_model->get_ref_rek_2($Kd_Rek_1);

        // check if the ref_rek_2 exists before trying to delete it
        if(isset($ref_rek_2['Kd_Rek_1']))
        {
            $this->Ref_rek_2_model->delete_ref_rek_2($Kd_Rek_1);
            redirect('ref_rek_2/index');
        }
        else
            show_error('The ref_rek_2 you are trying to delete does not exist.');
    }
    
}
