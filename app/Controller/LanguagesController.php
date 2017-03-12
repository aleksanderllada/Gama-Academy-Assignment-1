<?php

App::uses('AppController', 'Controller');

class LanguagesController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}
	
	public function changeLanguage($arg) {
		$this->autoRender = false;
		
		$this->Session->write('Config.language', $arg);
	
		$this->redirect(array('controller' => 'pages', 'action' => 'index'));
	}
}