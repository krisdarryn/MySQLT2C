<?php

class Ps_order_message{


	/* fields */
	private $id_order_message
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_message($id_order_message){
		$this->id_order_message = $id_order_message;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_order_message($id_order_message){
		 return $this->id_order_message;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}