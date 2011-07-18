<?php

class PeopleController extends AppController {

	var $name = 'People';
	
	function index() {
		
		$people = $this->Person->find('all', array(
			'order' => 'name'
		));
		
		$this->set('people', $people);
		
	}
	
	function add() {
		if (isset($this->data)) {
			$this->Person->save($this->data);
		};
	}
	
	function edit($id) {
		if (isset($this->data)) {
			$this->Person->save($this->data);
		};
		$this->Person->recursive = -1;
		$this->data = $this->Person->read('', $id);

	}

}