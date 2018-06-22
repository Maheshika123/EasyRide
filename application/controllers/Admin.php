<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function adminOrders(){

		$this->load->model('Model_admin');
		$data['records'] = $this->Model_admin->getOrders();

		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('adminOrders', $data);
		$this->load->view('includes/footer');

		}

	function viewOrders($or_id){
		$this->load->model('Model_admin');
		$data['records'] = $this->Model_admin->viewOrders($or_id);

		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('viewOrders', $data);
		$this->load->view('includes/footer');
	}

	function markComplete($or_id){
		$this->load->model('Model_admin');
		$this->Model_admin->markComplete($or_id);
		$data['records'] = $this->Model_admin->getOrders();

		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('adminOrders', $data);
		$this->load->view('includes/footer');
	}

	function completed($res_id){
		$this->load->model('Model_admin');
		$this->Model_admin->completed($res_id);
		$data['records'] = $this->Model_admin->getReservations();

		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('adminReservations', $data);
		$this->load->view('includes/footer');
	}


	function adminReservations(){

		$this->load->model('Model_admin');
		$data['records'] = $this->Model_admin->getReservations();

		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('adminReservations', $data);
		$this->load->view('includes/footer');
	}


	function adminUpdate(){

	
		$this->load->model('Model_admin');
		$query = $this->db->get("category"); 
        $data['categories'] = $query->result(); 

		if (isset($_POST['category'])) {

			$this->Model_admin->addCategory();
			redirect('Admin/adminUpdate/');	
		
		}

		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('adminUpdate',$data);
		$this->load->view('includes/footer');
	}


function addItem(){

		$this->load->model('Model_admin');
		$query = $this->db->get("category"); 
        $data['categories'] = $query->result(); 

       if (isset($_POST['item'])) {

			$this->Model_admin->addItem();
			redirect('Admin/adminUpdate/');	
		
		}



		$page['pageid']=16;
		$page['pagename']="admin";

		$this->load->view('includes/header');
		$this->load->view('includes/navigation',$page);
		$this->load->view('adminUpdate',$data);
		$this->load->view('includes/footer');
	}


	

}