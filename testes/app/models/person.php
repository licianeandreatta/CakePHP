<?php
	class Person extends AppModel {
		
		var $hasMany = array('Cars');
		
		var $validate = array(
			'name' => array(
				'rule' => 'notempty',
				'message' => 'preencha o nome!'
			),
			'age' => array(
				'rule' => 'numeric',
				'message' => 'só numeros, poxa'
			),
		);
		
	}