<?php

class Chapter extends AppModel {
	public $name = "Chapter";
	
	public $hasMany = array(
			'Topic' => array(
					'className' => 'Topic'
			)
	);
}