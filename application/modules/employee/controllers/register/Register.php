<?php

defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');

class Register extends MX_Controller {



	public $data;
	private $CI;
	public function __construct()

	{



		parent::__construct();
		$CI= &get_instance();
		$this->load->database();

		$this->load->library(array('ion_auth','render', 'form_validation'));

		$this->load->library('SMSGETWAYHUB_lib', null, 'SMSGETWAYHUB');
		$this->load->library('Image_lib', null, 'Image_lib');
		$this->load->helper(array('url', 'language'));

		$this->load->model('Register_model');

		$this->load->model('Ion_auth_model');

		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));



		
		// foreach(array_keys($this->session->userdata) as $key) {
		// 	if($key === 'register') {
		// 		$this->session->unset_userdata($key);
		// 	} else {
				
		// 	}
		// }
	}

	public function index()

	{
		// $mobile = ($this->session->userdata('register')['mobile']) ? $this->session->userdata('register')['mobile'] : '';
		// $form = ($this->session->userdata('register')['form']) ? $this->session->userdata('register')['form'] : '';
	
		// if($mobile !== "" && $form === 2) {
		// 	redirect('/employee/register/step-2');
		// } 
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$data['header'] 	= Modules::run('layouts/site-layout/header/index');

		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');

		$data['script'] 	= Modules::run('layouts/site-layout/script/index');



		$this->load->view('/register/index', $data);

	}

	public function sendOtp() {

		$mobile = ($this->input->post('mobile')) ? $this->input->post('mobile') : '';

		if(!is_numeric($mobile)) {
			return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => $mobile.' this is not a numaric value, enter 10 digit valid mobile number',
								'type' => 'error'

						))); 
		}
		/**
		 * mobile no verificaiton from otp table
		 */
		$verificationDetails = $this->SMSGETWAYHUB->getVerificationDetailsMobile($mobile);

		if(count($verificationDetails) > 0) {

			if(($this->SMSGETWAYHUB->getCurrentTime() - $verificationDetails->expired_time) > $this->SMSGETWAYHUB->getExpiredTime()) {
				$this->SMSGETWAYHUB->destroyExpiredCode($mobile);
				return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => 'Verification code is expired!',
								'type' => 'expired'

						))); 
			} else {
				return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => 'You have already otp',
								'type' => 'exists_otp'

						))); 
						
			}
		}
		$user = $this->Register_model->getUserByMobile($mobile);
				if(count($user) > 0) {
					//$this->session->set_session('mobile', $mobile);
					return $this->output
								->set_content_type('application/json')
								->set_status_header(200)
								->set_output(json_encode(array(
										'error' => true,
										'status' => 200,
										'message' => 'User already exists!',
										'type' => 'error'
							))); 
				}
					$formData = array(
						'form_name' => 2
					);
					$this->data = $this->SMSGETWAYHUB->sendOtp($this->config->item('SMSGETWAYHUB_URL'),$this->config->item('SMSGETWAYHUB_APIKEY'), false, false, $mobile, '', true, $formData);
					$this->input->set_cookie('mobile', $mobile, 3600*2);
					$this->session->set_userdata('register', array('mobile' => $mobile, 'form' => 2));
					return $this->output
								->set_content_type('application/json')
								->set_status_header(200)
								->set_output(json_encode(array(
										'error' => false,
										'status' => 200,
										'mobile' => $mobile,
										'type' => 'success',
										'message' => 'Verification code has been send in your phone'
							))); 
	}

	public function stepTwo() {
		// $mobile = ($this->session->userdata('register')['mobile']) ? $this->session->userdata('register')['mobile'] : '';
		// $form = ($this->session->userdata('register')['form']) ? $this->session->userdata('register')['form'] : '';
		// if($mobile === "" && $form === '') {
		// 	redirect('/employee/register');
		// }

		$data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$data['header'] 	= Modules::run('layouts/site-layout/header/index');

		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');

		$data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('/register/step_2', $data);

	}


	
	public function submit() {
		//print_r($_REQUEST);
		$mobile = ($this->input->post('mobile')) ? $this->input->post('mobile') : '';
		
		/**
		 * mobile no verificaiton from otp table
		 */
		$verificationDetails = $this->SMSGETWAYHUB->getVerificationDetailsMobile($mobile);

		if(count($verificationDetails) > 0) {
			/**
			 * Match with user input mobile number and otp mobile 
			 */
			if($verificationDetails->mobile === $mobile) {
				if(($this->SMSGETWAYHUB->getCurrentTime() - $verificationDetails->expired_time) > $this->SMSGETWAYHUB->getExpiredTime()) {
					$this->SMSGETWAYHUB->destroyExpiredCode($mobile);
					return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => true,
									'status' => 200,
									'message' => 'Verification code is expired!',
									'type' => 'expired'
	
							))); 
					
					redirect('/register');
				} else {
					$this->Register_model->setFullname(($this->input->post('fullname')) ? $this->input->post('fullname') : '');
					$this->Register_model->setEmail(($this->input->post('email')) ? $this->input->post('email') : '');
					$this->Register_model->setMobile(($this->input->post('mobile')) ? $this->input->post('mobile') : '');
					$this->Register_model->setPassword(($this->input->post('password')) ? $this->Ion_auth_model->hash_password($this->input->post('password')) : '');
					$this->Register_model->setAddress(($this->input->post('address')) ? $this->input->post('address') : '');
					$this->Register_model->setCity(($this->input->post('city')) ? $this->input->post('city') : '');
					$this->Register_model->setState(($this->input->post('state')) ? $this->input->post('state') : '');
					$this->Register_model->setPincode(($this->input->post('pincode')) ? $this->input->post('pincode') : '');
					$this->Register_model->setAdharno(($this->input->post('adhar_no')) ? $this->input->post('adhar_no') : '');
					//$this->Register_model->setOtp(($this->input->post('verificationCode')) ? $this->input->post('verificationCode') : '');
					
					$userInputVerificationCode = ($this->input->post('verificationCode')) ? $this->input->post('verificationCode') : '';
					
					// if( ! is_dir($this->config->item('file')['upload_path'].'uploads') ) {
					// 	mkdir($this->config->item('file')['upload_path'].'uploads',0777,TRUE); 
					// }
					// //$this->Image_lib->test();
					$f = strtolower(str_replace(' ', '-', $_FILES['file']['name']));
					if($f) {
						$image= $f;
					} else {
						$image = 'no-image.png';
					}
					$this->Image_lib->setFilename($f);
					$ex = $this->Image_lib->getFileExtension($f);
					$config = array();
					foreach($this->config->item('file')['original'] as $key => $value) {
						$config[$key] = $value;
						if($key === 'source_image') {
							$config['source_image'] = $this->config->item('file')['original']['source_image'].'/'.$this->Image_lib->getFilename();
						}
						
					}
					
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload('file')) {
						return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'type' => 'error',
											'message' => 'You did not select a file to upload.',
											'config' => $config
									)));
					} 
						
						$this->data = $this->upload->data();
						// return $this->output
						// 					->set_content_type('application/json')
						// 					->set_status_header(200)
						// 					->set_output(json_encode(array(
						// 							'error' => TRUE,
						// 							'status' => 200,
						// 							'message' => $this->data,
						// 					)));
						/**
						 * Resize code start from here
						 */
						//print_r($config);
						// if(in_array($ex, $config['allowed_types'])) {

						// 	foreach($this->config->item('file')['resize'] as $key => $value) {
						// 		$config[$key] = $value;
						// 		if($key === 'source_image') {
						// 			$config['source_image'] = $this->config->item('file')['resize']['thumb_path'].'/'.$this->Image_lib->getFilename();
						// 		}
						// 	}
						// 	print_r($config);
							
						// 	$this->load->library('Image_lib', $config);
						// 	if (!$this->Image_lib->resize())
						// 	{
						// 		return $this->output
						// 					->set_content_type('application/json')
						// 					->set_status_header(200)
						// 					->set_output(json_encode(array(
						// 							'error' => true,
						// 							'status' => 200,
						// 							'data' => $this->Image_lib->display_errors(),
						// 					)));
						// 	} else {
						// 		$this->data = $this->Image_lib->resize();
						// 		return $this->output
						// 					->set_content_type('application/json')
						// 					->set_status_header(200)
						// 					->set_output(json_encode(array(
						// 							'error' => false,
						// 							'status' => 200,
						// 							'data' => $this->data,
						// 					)));
						// 	}
	
						// 	/**
						// 	 * Resize code in here
						// 	 */
						// } else {
						// 	return $this->output
						// 					->set_content_type('application/json')
						// 					->set_status_header(200)
						// 					->set_output(json_encode(array(
						// 							'error' => TRUE,
						// 							'status' => 200,
						// 							'message' => $this->data,
						// 					)));
						// }
						$password = $password = ($this->input->post('password')) ? $this->input->post('password') : '';
						if(strlen($password) >= 10) {
							$this->data = array(
								'fullname' 		=> 	$this->Register_model->getFullname(),
								'email' 		=> 	$this->Register_model->getEmail(),
								'mobile' 		=> 	$this->Register_model->getMobile(),
								'password' 		=> 	$this->Register_model->getPassword(),
								'address'		=> 	$this->Register_model->getAddress(),
								'city'			=>	$this->Register_model->getCity(),
								'state'			=>	$this->Register_model->getState(),
								'pincode'		=>	$this->Register_model->getPincode(),
								'adhar_no'		=>	$this->Register_model->getAdharno(),
								'user_type' 	=> '2',
								'active'		=>	1,
								'document'		=>	$image
							);
							/**
							 * match with User input and mobile otp 
							 * IF Match
							 */
							if($userInputVerificationCode == $verificationDetails->code) {
								if($this->Register_model->register($this->data)) {
									$this->SMSGETWAYHUB->destroyExpiredCode($mobile);
									
									/**
									* Destroy register session
									*/
									foreach(array_keys($this->session->userdata) as $key) {
										if($key === 'register') {
											$this->session->unset_userdata($key);
										} else {
											
										}
									}
									return $this->output
												->set_content_type('application/json')
												->set_status_header(200)
												->set_output(json_encode(array(
														'error' => false,
														'status' => 200,
														'message' => 'Successfully Registration',
														'type' => 'success'
												))); 
								} else {
									return $this->output
												->set_content_type('application/json')
												->set_status_header(200)
												->set_output(json_encode(array(
														'error' => true,
														'status' => 200,
														'message' => 'Somethings went to wrong!',
														'type' => 'error'
												))); 
			
								}
							} else {
								return $this->output
												->set_content_type('application/json')
												->set_status_header(200)
												->set_output(json_encode(array(
														'error' => true,
														'status' => 200,
														'message' => 'Verification code does not match!',
														'type' => 'error'
												))); 
							}
						} else {
							return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'message' => 'Password must be > 10 digit',
											'type' => 'error'
			
									))); 
						}
				
					
				}
			} else {
				return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => true,
									'status' => 200,
									'message' => 'Enter registered mobile number with verification',
									'type' => 'error'
							))); 
			}
		} else {
			return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => true,
									'status' => 200,
									'message' => 'Enter registered mobile number with verification',
									'type' => 'error',
									'mobile' => $mobile
							))); 
		}
	}

}

