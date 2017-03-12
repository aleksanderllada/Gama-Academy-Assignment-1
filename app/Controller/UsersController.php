<?php

class UsersController extends AppController {
	
	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Wrong username or password.', 'error');
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	public function index() {
		$this->paginate = array('limit' => 5);
		$this->set('users', $this->paginate());
	}
	
	public function add() {
		if($this->request->is('post')) {
			$this->request->data['User']['role'] = 'master';
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash('User was successfully created.', 'success');
				$this->redirect(array('controller' => 'users', 'action' => 'index'));
			} else {
				$this->Session->setFlash('Could not save the user.', 'error');
			}
		}
	}
	
	public function delete($id) {
		$user = $this->User->findById($id);
		
		if(!$user) {
			throw new NotFoundException('The user could not be found.');
		}
		
		$this->User->delete($id);
		$this->Session->setFlash('User successfully deleted.', 'success');
		$this->redirect(array('controller' => 'users', 'action' => 'index'));
	}

}