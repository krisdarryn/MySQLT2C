<?php

class Ps_order_return{


	/* fields */
	private $id_order_return
	private $id_customer
	private $id_order
	private $state
	private $question
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_return($id_order_return){
		$this->id_order_return = $id_order_return;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function setQuestion($question){
		$this->question = $question;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_order_return($id_order_return){
		 return $this->id_order_return;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getState($state){
		 return $this->state;
	}

	public function getQuestion($question){
		 return $this->question;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}