<?php
App::uses('AppController', 'Controller');
class HomeController extends AppController {

	public $name = 'Home';
	public $helpers = array('Html', 'Session');
	public $uses = array();
	
	public function index() {
		$path = func_get_args();
		$this->render(implode('/', $path));
	}
}
