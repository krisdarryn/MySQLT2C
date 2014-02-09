<?php

class Ps_search_engine{


	/* fields */
	private $id_search_engine
	private $server
	private $getvar

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_search_engine($id_search_engine){
		$this->id_search_engine = $id_search_engine;
	}

	public function setServer($server){
		$this->server = $server;
	}

	public function setGetvar($getvar){
		$this->getvar = $getvar;
	}

	/* getters */
	public function getId_search_engine($id_search_engine){
		 return $this->id_search_engine;
	}

	public function getServer($server){
		 return $this->server;
	}

	public function getGetvar($getvar){
		 return $this->getvar;
	}



}