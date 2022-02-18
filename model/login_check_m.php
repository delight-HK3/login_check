<?php
class Login_check_m extends CI_Model {
    public function getrow($uid,$pwd){
        $sql="select * from member where uid like '$uid' and pwd like '$pwd'";
		$query = $this->db->query($sql);
		if( $query->num_rows() > 0 ){ //회원 정보가 있습니다.
            return $this->db->query($sql)->row();
		} else { //회원 정보가 없습니다. 
			return "no";
		}
    }
}
?>
