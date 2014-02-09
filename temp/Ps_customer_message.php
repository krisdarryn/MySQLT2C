<?php

class Ps_customer_message{


	/* fields */
	private $id_customer_message
	private $id_customer_thread
	private $id_employee
	private $message
	private $file_name
	private $ip_address
	private $user_agent
	private $date_add
	private $private
	private $read

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customer_message($id_customer_message){
		$this->id_customer_message = $id_customer_message;
	}

	public function setId_customer_thread($id_customer_thread){
		$this->id_customer_thread = $id_customer_thread;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setMessage($message){
		$this->message = $message;
	}

	public function setFile_name($file_name){
		$this->file_name = $file_name;
	}

	public function setIp_address($ip_address){
		$this->ip_address = $ip_address;
	}

	public function setUser_agent($user_agent){
		$this->user_agent = $user_agent;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setPrivate($private){
		$this->private = $private;
	}

	public function setRead($read){
		$this->read = $read;
	}

	/* getters */
	public function getId_customer_message($id_customer_message){
		 return $this->id_customer_message;
	}

	public function getId_customer_thread($id_customer_thread){
		 return $this->id_customer_thread;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getMessage($message){
		 return $this->message;
	}

	public function getFile_name($file_name){
		 return $this->file_name;
	}

	public function getIp_address($ip_address){
		 return $this->ip_address;
	}

	public function getUser_agent($user_agent){
		 return $this->user_agent;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getPrivate($private){
		 return $this->private;
	}

	public function getRead($read){
		 return $this->read;
	}



}