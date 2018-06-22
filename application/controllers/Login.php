<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$page['pageid']=16;
		$page['pagename']="login";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('login');
		$this->load->view('includes/footer');
	}


	function loginuser()
	{

    $this->form_validation->set_rules('user_name', 'user_name','required|alpha');
    $this->form_validation->set_rules('password', 'password', 'required');


    if ($this->form_validation->run() == FALSE)
                {
                  $this->load->view('login');
                  
                  redirect('login');

                     }

     else{

                      $this->load->model('Model_login');
                      $result = $this->Model_login->LoginUser();

                      if($result != FALSE){

                                      redirect('/Admin/adminOrders'); 


                                          }

                      else{

                        $this->session->set_flashdata('errmsg','wrong user name Password');
                        
                        redirect('login');


                      }


                }	
	}




public function logout(){



  redirect('login');
}






}


