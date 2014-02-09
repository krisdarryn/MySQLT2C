<?php

class Ps_log{


	/* fields */
	private $id_log
	private $severity
	private $error_code
	private $message
	private $object_type
	private $object_id
	private $id_employee
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_log($id_log){
		$this->id_log = $id_log;
	}

	public function setSeverity($severity){
		$this->severity = $severity;
	}

	public function setError_code($error_code){
		$this->error_code = $error_code;
	}

	public function setMessage($message){
		$this->message = $message;
	}

	public function setObject_type($object_type){
		$this->object_type = $object_type;
	}

	public function setObject_id($object_id){
		$this->object_id = $object_id;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_log($id_log){
		 return $this->id_log;
	}

	public function getSeverity($severity){
		 return $this->severity;
	}

	public function getError_code($error_code){
		 return $this->error_code;
	}

	public function getMessage($message){
		 return $this->message;
	}

	public function getObject_type($object_type){
		 return $this->object_type;
	}

	public function getObject_id($object_id){
		 return $this->object_id;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}