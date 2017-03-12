<?php

class Topic extends AppModel {
	public $name = "Topic";
	
	public $order = "Topic.number asc";
	
	public $belongsTo = array(
			'Chapter' => array(
					'className' => 'Chapter',
					'foreignKey' => 'chapter_id'
			)
	);
}