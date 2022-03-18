<?php
class Login_check_m extends CI_Model {
    public function getrow($uid,$pwd){
        $sql="select * from member where uid like '$uid' and pwd like '$pwd'"; 
        // member 테이블에서 uid와 pwd의 내용이 같은 행을 선택합니다.
	$query = $this->db->query($sql);
	if( $query->num_rows() > 0 ){ //회원 정보가 있습니다. 
        	return $this->db->query($sql)->row(); 
            	// 회원 정보가 있는 경우 해당하는 행을 리턴합니다.
	} else { //회원 정보가 없습니다. 
		return "no"; 
        	// 회원 정보가 없는 경우 문자열 "no"를 리턴합니다.
	}
    }
}
?>
