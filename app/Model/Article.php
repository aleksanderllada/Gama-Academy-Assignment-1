<?php

class Article extends AppModel {
	public $name = "Article";

	public $order = "Article.id asc";

	public $belongsTo = array(
			'ArticleCategory' => array(
					'className' => 'ArticleCategory',
					'foreignKey' => 'article_category_id'
			),
			'User' => array (
					'className' => 'User',
					'foreignKey' => 'user_id'
			)
	);
}