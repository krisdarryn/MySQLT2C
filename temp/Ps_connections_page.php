<?php

class Ps_connections_page{


	/* fields */
	private $id_connections
	private $id_page
	private $time_start
	private $time_end

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_connections($id_connections){
		$this->id_connections = $id_connections;
	}

	public function setId_page($id_page){
		$this->id_page = $id_page;
	}

	public function setTime_start($time_start){
		$this->time_start = $time_start;
	}

	public function setTime_end($time_end){
		$this->time_end = $time_end;
	}

	/* getters */
	public function getId_connections($id_connections){
		 return $this->id_connections;
	}

	public function getId_page($id_page){
		 return $this->id_page;
	}

	public function getTime_start($time_start){
		 return $this->time_start;
	}

	public function getTime_end($time_end){
		 return $this->time_end;
	}



}