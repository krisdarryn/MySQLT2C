<?php

class Tbl_user{


	/* fields */
	private $username
	private $password
	private $name
	private $surname
	private $gender
	private $address
	private $mail_address

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setUsername($username){
		$this->username = $username;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function setMail_address($mail_address){
		$this->mail_address = $mail_address;
	}

	/* getters */
	public function getUsername($username){
		 return $this->username;
	}

	public function getPassword($password){
		 return $this->password;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getSurname($surname){
		 return $this->surname;
	}

	public function getGender($gender){
		 return $this->gender;
	}

	public function getAddress($address){
		 return $this->address;
	}

	public function getMail_address($mail_address){
		 return $this->mail_address;
	}



}