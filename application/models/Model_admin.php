<?php 

   class Model_admin extends CI_Model {



		function getOrders() {
				
				$this->db->select('*');
				$this->db->from('myorder');
				$this->db->where('or_iscomplete', 0);
				$this->db->order_by('or_id');
				$query = $this->db->get();
		        return $query->result(); 
		        
		    }

		function viewOrders($or_id) {
				
				$this->db->select('*');
				$this->db->from('orderitem as oritm','item as itm');
				$this->db->join('item as itm', 'oritm.oi_itemid = itm.it_id');
				$this->db->where('oi_orderid', $or_id);
				$this->db->order_by('oi_itemid');
				$query = $this->db->get();
		        return $query->result(); 
		        
		    }

		public function markComplete($or_id){

		    $this->db->set('or_iscomplete', 1);
		    $this->db->where('or_id',$or_id);
		    $this->db->update('myorder');
		  }

		public function completed($res_id){

		    $this->db->set('flag', 1);
		    $this->db->where('res_id',$res_id);
		    $this->db->update('reservation');
		  }


		function getReservations() {
				
				$this->db->select('*');
				$this->db->from('reservation');
				$this->db->where('flag', 0);
				$this->db->order_by('res_id');
				$query = $this->db->get();
		        return $query->result(); 
		        
		    }

  public function addCategory(){

	$data = array( 
                'cat_name' => $this->input->post('categoryName') );

    	return $this->db->insert('category', $data);
}


public function addItem(){
$img =$this->input->post('image');
$url ="images\items\\";
	$data = array( 
                'it_name' => $this->input->post('name'),
                'it_category' => $this->input->post('cat'),
                'it_price' => $this->input->post('price'),
                'it_url' => $url.$img
                 );
  
    	return $this->db->insert('item', $data);
}


		   
	}