<?php

class Ps_referrer_cache{


	/* fields */
	private $id_connections_source
	private $id_referrer

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_connections_source($id_connections_source){
		$this->id_connections_source = $id_connections_source;
	}

	public function setId_referrer($id_referrer){
		$this->id_referrer = $id_referrer;
	}

	/* getters */
	public function getId_connections_source($id_connections_source){
		 return $this->id_connections_source;
	}

	public function getId_referrer($id_referrer){
		 return $this->id_referrer;
	}



}