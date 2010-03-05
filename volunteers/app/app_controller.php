<?php
class AppController extends Controller {
	var $components = array('Auth', 'Session');
	
	function beforeFilter() {
		Security::setHash('sha1');
		
		$this->Auth->userModel = 'Volunteers';
		
		$this->Auth->fields = array(
			'username'=>'email',
			'password'=>'password'
		);
		
		// Allow everything...for now
		$this->Auth->allow('*');
	}
}
?>