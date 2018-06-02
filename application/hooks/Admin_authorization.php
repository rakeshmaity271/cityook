<?php 

class Admin_authorization {
    private $CI;
    public function __construct() {
        $this->CI = &get_instance();
        
        $this->CI->load->database();
		$this->CI->load->library('ion_auth');
        $this->CI->load->library('Flash_lib', NULL, 'flash');
        
        
    }

    function authorization() {
        if (!$this->CI->ion_auth->logged_in()) {
			redirect('/login');
		} else {
            if (!$this->CI->CIion_auth->isAdmin()) {
                $this->CI->flash->error('Error', 'You must be an admin to view this page.');
                redirect('/unauthorized');
            }
		}
    }
}