<?php
class IndexController extends Zend_Controller_Action {
	
	/**
	 * Retrieve
	 *
	 * @return void
	 * @author Elton Minetto <eminetto@coderockr.com>
	 **/
	public function indexAction() {
		/*$tasks = new Tasks;
		$this->view->data = $tasks->fetchAll();*/
		$this->view->serverUrl = 'http://mkx.local/rpc/v1/';
	}
}
