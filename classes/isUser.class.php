<?php
class isUser {

public function UserIs(){
	if (isset($_SESSION['user_id'])) {
		return true;
	}else{
		return false;
	}
  }
}

?>