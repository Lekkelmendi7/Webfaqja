<?php
class isAdmin {

public function AdminIs(){
	if ($_SESSION['role'] == "Admin" ) {
		return true;
	}else{
		return false;
	}
  }
}

?>