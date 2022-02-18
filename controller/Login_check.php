<?php
class Login_check extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database(); //DB 연결          
        $this->load->model("login_check_m"); //모델 main_m 연결
    }
	public function index()
	{
        $this->load->view("login_check_view");                      
	}
    public function check(){
        $uid = $this->input->post("inuid",TRUE);
		$pwd = $this->input->post("inpwd",TRUE);

        $result = $this->main_m->getrow($uid,$pwd);
        
        if($result == "no"){
			$returnArray['responseText'] = $result;
			echo json_encode($returnArray);
		}
        else {
            $returnArray['responseText'] = $result;
            echo json_encode($returnArray);

            $data=array(
				"no" => $result->no,
				"uid" => $result->uid,
                "pwd" => $result->pwd,
				"name" => $result->name
			);
           	$this->session->set_userdata($data);
        }    
    }
}
?>
