<?php

class Ps_required_field{


	/* fields */
	private $id_required_field
	private $object_name
	private $field_name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_required_field($id_required_field){
		$this->id_required_field = $id_required_field;
	}

	public function setObject_name($object_name){
		$this->object_name = $object_name;
	}

	public function setField_name($field_name){
		$this->field_name = $field_name;
	}

	/* getters */
	public function getId_required_field($id_required_field){
		 return $this->id_required_field;
	}

	public function getObject_name($object_name){
		 return $this->object_name;
	}

	public function getField_name($field_name){
		 return $this->field_name;
	}



}