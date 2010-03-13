<?php
class Block extends AppModel {
	var $name = 'Block';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Volunteer' => array(
			'className' => 'Volunteer',
			'foreignKey' => 'block_id',
			'dependent' => true,
			'exclusive' => true
		)
	);
	
	function beforeSave() {
		exit();
	}

}
?>