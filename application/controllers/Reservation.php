<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function index()
	{
		 
        $page['pageid']=15;
		$page['pagename']="reservation";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('reservation');
		$this->load->view('includes/footer');
	}


	public function makeReservation()
	{
		$this->form_validation->set_rules('phone','phone number','required|max_length[10]|min_length[10]');

      if($this->form_validation->run()== FALSE){

             
            
				echo'<script>
				
				    alert("invalid  phone number");
				
				</script>';

				//redirect('reservation');
      }
else{

        $page['pageid']=15;
		$page['pagename']="reservation";

		$this->load->model('Model_reservation');
		$result = $this->Model_reservation->makeReservation();

		echo $result;

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('reservation');
		$this->load->view('includes/footer');}
	}
}
