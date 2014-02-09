<?php

class Ps_order_message_lang{


	/* fields */
	private $id_order_message
	private $id_lang
	private $name
	private $message

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_message($id_order_message){
		$this->id_order_message = $id_order_message;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setMessage($message){
		$this->message = $message;
	}

	/* getters */
	public function getId_order_message($id_order_message){
		 return $this->id_order_message;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getMessage($message){
		 return $this->message;
	}



}