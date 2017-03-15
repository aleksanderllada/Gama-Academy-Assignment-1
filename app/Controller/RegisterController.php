<?php

class RegisterController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}
	
	public function index() {
		$this->loadModel('Lead');
		$this->set('leads', $this->paginate('Lead'));
	}

	public function add() {
		$this->loadModel('Lead');
		
		if($this->request->is('post')) {
			$this->Lead->create();
			
			$this->request->data['Lead']['ip'] = $this->request->clientIp();
			
			if($this->Lead->save($this->request->data)) {
				$this->redirect(array('controller' => 'register', 'action' => 'thanks'));
			} else {
				// Yes, we are going to hide this error from the user.
				$this->redirect(array('controller' => 'register', 'action' => 'thanks'));
			}
		}
	}

	public function delete($id) {
		$this->loadModel('Lead');
		$lead = $this->Lead->findById($id);

		if (!$lead) {
			throw new NotFoundException('Este lead não foi encontrado.');
		}

		$this->Lead->delete($id);
		$this->Session->setFlash('Lead deletado com sucesso.', 'success');
		$this->redirect(array('controller' => 'register', 'action' => 'index'));
	}
	
	public function thanks() {
	}
}