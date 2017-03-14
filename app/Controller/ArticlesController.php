<?php

class ArticlesController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
 		$this->Auth->allow('index');
	}
	
	public function index($id = null) {
		$this->loadModel('Article');
		$this->loadModel('ArticleCategory');
		
		if ($this->request->is('post')) {
			$fromDate = $this->request->data['Filter']['fromDate'];
			$toDate = $this->request->data['Filter']['toDate'];
		}
		
		if(empty($fromDate) && empty($toDate)) {
			$fromDate = date('Y-m-d', mktime(0, 0, 0, 1, 1, 2000));
			$toDate = date('Y-m-d', mktime(0, 0, 0, 1, 1, 2100));
		} else if(!empty($toDate) && empty($fromDate)) {
			$fromDate = date('Y-m-d');
		} else if (!empty($fromDate) && empty($toDate)) {
			$toDate = date('Y-m-d');
		}
		
		$articleCategoriesTmp = $this->ArticleCategory->find('all', array(
				'fields' => array('ArticleCategory.id', 'ArticleCategory.name')
			)
		);
		
		$articleCategories = array();
		foreach($articleCategoriesTmp as $articleCategory) {
			$articleCategories[$articleCategory['ArticleCategory']['id']] = $articleCategory['ArticleCategory']['name'];
		}
		
		if($id == null) {
			$articles = $this->Article->find('all', array(
					'conditions' => array (
						'Article.created >= ' => $fromDate,
						'Article.created <= ' => $toDate
					),
					'order' => array (
						'Article.created' => 'DESC'	
					),
					'recursive' => 1
				)
			);
		} else {
			$articles = $this->Article->find('all', array(
					'conditions' => array(
						'Article.article_category_id' => $id,
						'Article.created >= ' => $fromDate,
						'Article.created <= ' => $toDate
					),
					'order' => array (
							'Article.created' => 'DESC'
					),
					'recursive' => 1
				)
			);
		}
		
		$this->set(compact('articles', 'articleCategories'));
	}
	
	public function articleCategories() {
		$this->loadModel('ArticleCategory');
	
		$articleCategories = $this->ArticleCategory->find('all', null);
	
		$this->set(compact('articleCategories'));
	}
	
	public function newArticleCategory() {
		if($this->request->is('post')) {
			$this->loadModel('ArticleCategory');
	
			$this->ArticleCategory->create();
			if($this->ArticleCategory->save($this->request->data)) {
				$this->Session->setFlash(__('Article category successfully created.'), 'success');
				$this->redirect(array('controller' => 'articles', 'action' => 'articlecategories'));
			} else {
				$this->Session->setFlash(__('An error has occurred and the article category were not created.'), 'error');
			}
		}
	}
	
	public function editArticleCategory($id) {
		$this->loadModel('ArticleCategory');
		$articleCategory = $this->ArticleCategory->findById($id);
	
		if (!$articleCategory) {
			throw new NotFoundException('The article category could not be found.');
		}
	
		if($this->request->is('put')) {
			$this->request->data['ArticleCategory']['id'] = $articleCategory['ArticleCategory']['id'];
			if($this->ArticleCategory->save($this->request->data)) {
				$this->Session->setFlash(__('Article category successfully saved.'), 'success');
				$this->redirect(array('controller' => 'articles', 'action' => 'articlecategories'));
			} else {
				$this->Session->setFlash(__('An error has occurred and the article category were not saved.'), 'error');
			}
		}
	
		$this->data = $articleCategory;
	}
	
	public function deleteArticleCategory($id) {
		$this->loadModel('ArticleCategory');
		$articleCategory = $this->ArticleCategory->findById($id);
	
		if (!$articleCategory) {
			throw new NotFoundException('The article category could not be found.');
		}
	
		$this->ArticleCategory->delete($id);
		$this->Session->setFlash(__('Article category successfully deleted.'), 'success');
		$this->redirect(array('controller' => 'articles', 'action' => 'articlecategories'));
	}
	
	public function addArticle() {
		$this->loadModel('Article');
		$this->loadModel('ArticleCategory');
	
		$articleCategoriesTmp = $this->ArticleCategory->find('all', array(
				'fields' => array('ArticleCategory.id', 'ArticleCategory.name')
		)
		);
	
		$articleCategories = array();
		foreach($articleCategoriesTmp as $articleCategory) {
			$articleCategories[$articleCategory['ArticleCategory']['id']] = $articleCategory['ArticleCategory']['name'];
		}
	
		if($this->request->is('post')) {
			$this->Article->create();
			$this->request->data['Article']['user_id'] = $this->Auth->user('id');
			if($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('Article successfully created.'));
				$this->redirect(array('controller' => 'articles', 'action' => 'index', $this->request->data['Article']['article_category_id']));
			} else {
				$this->Session->setFlash(__('An error has ocurred and the article were not created.'));
			}
		}
	
		$this->set(compact('articleCategories'));
	}
	
	public function editArticle($id) {
		$this->loadModel('Article');
		$this->loadModel('ArticleCategory');
	
		$article = $this->Article->findById($id);
	
		if(!$article) {
			$this->Session->setFlash(__('The article could not be found.'), 'error');
			$this->redirect(array('controller' => 'articles', 'action' => 'index'));
		}
	
		$articleCategoriesTmp = $this->ArticleCategory->find('all', array(
				'fields' => array('ArticleCategory.id', 'ArticleCategory.name')
		)
		);
	
		$articleCategories = array();
		foreach($articleCategoriesTmp as $articleCategory) {
			$articleCategories[$articleCategory['ArticleCategory']['id']] = $articleCategory['ArticleCategory']['name'];
		}
	
		if($this->request->is('put')) {
			$this->request->data['Article']['id'] = $id;
			if($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('Article successfully saved.'));
				$this->redirect(array('controller' => 'articles', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('An error has ocurred and the article were not saved.'));
			}
		}
	
		$this->data = $article;
		$this->set(compact('articleCategories'));
	}
	
	public function deleteArticle($id) {
		$this->loadModel('Article');
		$article = $this->Article->findById($id);
	
		if (!$article) {
			throw new NotFoundException('The article could not be found.');
		}
	
		$this->Article->delete($id);
		$this->Session->setFlash(__('Article successfully deleted.'), 'success');
		$this->redirect(array('controller' => 'articles', 'action' => 'index'));
	}
}