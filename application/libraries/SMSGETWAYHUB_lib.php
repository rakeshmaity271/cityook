<?php defined('BASEPATH') OR exit('No direct script access allowed');
class SMSGETWAYHUB_lib {

    private $CI;
    private $table;
    private $api;
    private $senderId;
    private $options;
    private $countryCode;
    private $verificationCode;
    public function __construct() {
        $this->CI = &get_instance();
        $this->table = 'otp';

        //$this->options = array();
    }
    
    private function setApi($value) {
        $this->api = $value;
    }
    private function getApi() {
        return $this->api;
    }
    public function generateOtp() {
        return mt_rand(100000, 999999);
    }

    public function sendOtp($url, $apiKey, $setCountryCode = false, $countryCode = null, $number, $options = array(), $database = false) {
        $this->verificationCode = $this->generateOtp();
        if($setCountryCode === false) {
            $this->countryCode = 91;
        } else {
            $this->countryCode = $countryCode;
        }
        
        
        $string = '';
        if(!empty($url)) {
            $string .= 'https://'.$url;
        } else {
            $string .= '';
        }
        if(!empty($apiKey)) {
            $string .= '?APIKey='.$apiKey.'';
        } else {
            $string .= '';
        }
        if(!empty($options) && is_array($options)) {
            $this->options = $options;
            foreach($this->options as $k => $v)  {
                $string .= '&'.$k.'='.$v;
            }
        } else {
            $this->options = array(
                'senderid'  => 'TESTIN',
                'channel'   =>  2,
                'DCS'       =>  0,
                'flashsms'  =>  0,
                'number'    =>  $this->countryCode.$number,
                'text'      =>  rawurlencode('Your verification code is '. $this->verificationCode),
                'route'     =>  13
            );
           
            foreach($this->options as $k => $v)  {
                $string .= '&'.$k.'='.$v;
            }
        }
      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Connection: close'
        ));
        curl_setopt($ch, CURLOPT_URL, $string);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);

        if($database === true) {
            $this->CI->db->insert($this->table, array(
                'mobile' => $number,
                'expired_time' => time(),
                'code' => $this->verificationCode
            ));
           
        }
        $database === false;
        return $this->CI->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode($data						
						)); 
    }

    public function getVerificationDetailsMobile($mobile) {
        $query =  $this->CI->db->select('*')->from($this->table)->where('mobile', $mobile)->get();
        return $query->row();
    }

    public function destroyExpiredCode($mobile) {
        if($mobile) {
            $this->CI->db->where('mobile', $mobile)
                 ->delete($this->table);
            return true;
        } else {
            return false;
        }
    }
    public function All() {
        $query = $this->CI->db->get($this->table);
        return $query->result();
    }
}