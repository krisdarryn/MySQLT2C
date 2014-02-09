<?php

class Ps_page{


	/* fields */
	private $id_page
	private $id_page_type
	private $id_object

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_page($id_page){
		$this->id_page = $id_page;
	}

	public function setId_page_type($id_page_type){
		$this->id_page_type = $id_page_type;
	}

	public function setId_object($id_object){
		$this->id_object = $id_object;
	}

	/* getters */
	public function getId_page($id_page){
		 return $this->id_page;
	}

	public function getId_page_type($id_page_type){
		 return $this->id_page_type;
	}

	public function getId_object($id_object){
		 return $this->id_object;
	}



}