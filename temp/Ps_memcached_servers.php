<?php

class Ps_memcached_servers{


	/* fields */
	private $id_memcached_server
	private $ip
	private $port
	private $weight

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_memcached_server($id_memcached_server){
		$this->id_memcached_server = $id_memcached_server;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function setPort($port){
		$this->port = $port;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	/* getters */
	public function getId_memcached_server($id_memcached_server){
		 return $this->id_memcached_server;
	}

	public function getIp($ip){
		 return $this->ip;
	}

	public function getPort($port){
		 return $this->port;
	}

	public function getWeight($weight){
		 return $this->weight;
	}



}