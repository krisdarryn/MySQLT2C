<?php

class Ps_meta{


	/* fields */
	private $id_meta
	private $page

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_meta($id_meta){
		$this->id_meta = $id_meta;
	}

	public function setPage($page){
		$this->page = $page;
	}

	/* getters */
	public function getId_meta($id_meta){
		 return $this->id_meta;
	}

	public function getPage($page){
		 return $this->page;
	}



}