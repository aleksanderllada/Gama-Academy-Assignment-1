<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $name = 'User';
	
	public $validate = array(
			'username' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'O nome do usuário é obrigatório.'
					)
			),
			'password' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A senha é obrigatória.'
					)
			),
			'role' => array(
					'valid' => array(
							'rule' => array('inList', array('master', 'visitor')),
							'message' => 'O usuário deve ter um tipo.',
							'allowEmpty' => false
					)
			)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		
		return true;
	}
}