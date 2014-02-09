<?php

class Ps_message_readed{


	/* fields */
	private $id_message
	private $id_employee
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_message($id_message){
		$this->id_message = $id_message;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_message($id_message){
		 return $this->id_message;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}