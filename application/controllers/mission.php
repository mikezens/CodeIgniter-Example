<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mission extends CI_Controller {

	
	public function index()
	{
    	$this->load->library('csvreader');
    	
    	
    	$this->load->helper('form');
    	
    	
    	$default_csv = './downloads/data.csv';
    	
    	
    	if($_FILES['userfile']['name']) {
        	
        	$config['upload_path'] = './uploads/';
    		$config['allowed_types'] = 'csv';
    		$config['max_size']	= '1024';
    
    		$this->load->library('upload', $config);
    
    		if ( ! $this->upload->do_upload()) {
    			$mission_data['upload_error'] = $this->upload->display_errors();
    		} else {
        		$upload_data = $this->upload->data();
        		$default_csv = $upload_data['full_path'];
    		}
    	}
    	
    	
        $mission_data['csv_data'] = $this->csvreader->parse_file($default_csv);
	
		$this->load->view('mission', $mission_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/mission.php */