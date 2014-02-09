<?php

class Ps_request_sql{


	/* fields */
	private $id_request_sql
	private $name
	private $sql

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_request_sql($id_request_sql){
		$this->id_request_sql = $id_request_sql;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setSql($sql){
		$this->sql = $sql;
	}

	/* getters */
	public function getId_request_sql($id_request_sql){
		 return $this->id_request_sql;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getSql($sql){
		 return $this->sql;
	}



}