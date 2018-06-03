<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Render
{
	public $data;
	private $CI;
	public function __construct()
	{
		//parent::__construct();
		$this->CI= &get_instance();
    }
    public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{
		$this->viewdata = (empty($data)) ? $this->data : $data;
		$view_html = $this->CI->load->view($view, $this->viewdata, $returnhtml);
		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}
}