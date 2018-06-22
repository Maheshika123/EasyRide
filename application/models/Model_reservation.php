<?php 

   class Model_reservation extends CI_Model {

   		public function makeReservation(){

                $data = array( 
                	'name' => $this->input->post('name'),
                   'email' => $this->input->post('email'),
                   'phone' => $this->input->post('phone'),
                   'time' => $this->input->post('datepicker'),
                   'description' => $this->input->post('message')
                    );

    			return $this->db->insert('reservation', $data);
    	}
 
	}