<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Forgot_password extends MX_Controller
{   
    private $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation', 'render'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->library('SMSGETWAYHUB_lib', null, 'SMSGETWAYHUB');
		$this->load->model('User_model', 'user');
		$this->load->model('Ion_auth_model');
    }


    public function index() {
        $this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

        $this->data['script'] 	= Modules::run('layouts/site-layout/script/index');

        $this->render->_render_page('forgot_password' . DIRECTORY_SEPARATOR . 'index', $this->data);

    }
    
    /**
	 * Forgot password
	 */
	public function submit()
	{
        
        
		// setting validation rules by checking whether identity is username or email
		if ($this->config->item('identity', 'ion_auth') === 'mobile')
		{
			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required|min_length[10]|numeric');
		}

		if ($this->form_validation->run() === FALSE)
		{
			$this->data['type'] = $this->config->item('identity', 'ion_auth');
			// setup the input
			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
			);

			if ($this->config->item('identity', 'ion_auth') === 'mobile')
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_identity_label');
			}

			// set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            //$this->render->_render_page('forgot_password' . DIRECTORY_SEPARATOR . 'index', $this->data);
            
            return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'type' => 'error',
											'message' => $this->data['message'],
									)));
		}
		else
		{
			$identity_column = $this->config->item('identity', 'ion_auth');
			$identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

			if (empty($identity))
			{

				if ($this->config->item('identity', 'ion_auth') === 'mobile')
				{
					$this->ion_auth->set_error('forgot_password_identity_not_found');
                }
                return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'type' => 'error',
											'message' => $this->ion_auth->errors(),
									)));
				// $this->session->set_flashdata('message', $this->ion_auth->errors());
				// redirect("forgot-password", 'refresh');
			}

			// run the forgotten password method to email an activation code to the user
			//$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});
			$mobile = ($this->input->post('identity')) ? $this->input->post('identity') : '';
			
			$forgotten = $this->SMSGETWAYHUB->sendOtp($this->config->item('SMSGETWAYHUB_URL'),$this->config->item('SMSGETWAYHUB_APIKEY'), false, false, $mobile, '', true, false,  $forgotPassword = true);
			if ($forgotten)
			{
                // if there were no errors
                
                return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => false,
											'status' => 200,
											'type' => 'success',
											'message' => 'Message has been sent your mobile',
									)));
				// $this->session->set_flashdata('message', $this->ion_auth->messages());
				// redirect("login", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                        'error' => false,
                        'status' => 200,
                        'type' => 'error',
                        'message' => $this->ion_auth->errors(),
                )));
				// $this->session->set_flashdata('message', $this->ion_auth->errors());
				// redirect("forgot-password", 'refresh');
			}
		}
	}

	public function reset_password_form() {
		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

		$this->data['script'] 	= Modules::run('layouts/site-layout/script/index');
		
		$this->render->_render_page('forgot_password' . DIRECTORY_SEPARATOR . 'reset_password', $this->data);
	}

	/**
	 * Reset password - final step for forgotten password
	 *
	 * @param string|null $code The reset code
	 */
	public function reset_password() {
		$forgottenPasswordCode = ($this->input->post('forgotten_password_code')) ? $this->input->post('forgotten_password_code') : '';
		$password = ($this->input->post('password')) ? $this->input->post('password') : '';
		$confirmPassowrd = ($this->input->post('confirm_passowrd')) ? $this->input->post('confirm_passowrd') : '';

		
		$user = $this->user->getUserByForgotPassowordCode($forgottenPasswordCode);

		if(count($user) > 0) {
			// check expiry forgotten code
				if(($this->SMSGETWAYHUB->getCurrentTime() - $user->forgotten_password_time) > $this->SMSGETWAYHUB->getExpiredTime()) {
					// update user table 
					$this->user->updateForgottenPasswordFieldsByUserId($data = array(
						'forgotten_password_time' => null,
						'forgotten_password_code' => null
					), $user->id);
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
				// match confirm password and password
				$this->form_validation->set_rules('password', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
				$this->form_validation->set_rules('confirm_password', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

				if ($this->form_validation->run() === FALSE) {
					
					$message = (validation_errors()) ? validation_errors() : '';
					
					return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => true,
									'status' => 200,
									'message' => $message,
									'type' => 'expired'
	
							))); 
				} else {
					$newPassword = $this->Ion_auth_model->hash_password($password);
					//update password by user id and destroy code
					if($this->user->updatePasswordByUserId($data = array(
						'password' => $newPassword,
					), $user->id)) {

						
						$this->user->updateForgottenPasswordFieldsByUserId($data = array(
							'forgotten_password_time' => null,
							'forgotten_password_code' => null
						), $user->id);

						$message = 'Password has changed successfully';

						return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => false,
									'type' => 'success',
									'status' => 200,
									'message' => $message
							))); 
					}


				}
			}
		
		} else {
			return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => true,
									'type' => 'error',
									'status' => 200,
									'message' => 'Verification code does not match'
							))); 
		}
	}
}