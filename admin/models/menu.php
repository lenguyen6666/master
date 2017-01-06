<?php
class Menu extends AppModel {
    var $name = 'Menu';
    var $displayField = 'name';
    var $actsAs = array('Tree'); 
    var $belongsTo = array(
        'Parentmenu' => array(
            'className' => 'Menu',
            'foreignKey' => 'parent_id'
        )
    );
    var $validate = array(
		'id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Xin vui lòng di?n thông tin',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        
	);
}
?>
