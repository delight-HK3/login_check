<?php
class Login_check extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database(); // 데이터베이스를 연결시킵니다.          
        $this->load->model("login_check_m"); // login_check_m을 실행시킵니다.
    }
    public function index()
    {
        $this->load->view("login_check_view"); 
        //view 부분의 login_check_view.php를 실행시킵니다.                
    }
    public function login(){
        $uid = $this->input->post("inuid",TRUE); 
        // JS에서 가져온 inuid, inpwd를 각각 저장합니다.
	$pwd = $this->input->post("inpwd",TRUE); 
    	// JS에서 가져온 inuid, inpwd를 각각 저장합니다.

        $result = $this->main_m->getrow($uid,$pwd); 
        // 두 개의 값을 가지고 테이블에 공통된 값이 있는지 확인합니다.
        
        if($result == "no"){ //만약 없을 경우 문자열 "no"를 가지고 리턴합니다.
		$returnArray['responseText'] = $result;
		echo json_encode($returnArray);
	}
        else { // 있을 경우 $result에 저장되어있는 값을 배열로 만들고 배열을 사용하여 session을 만든 후 리턴합니다.  
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
