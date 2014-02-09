<?php

class Ps_date_range{


	/* fields */
	private $id_date_range
	private $time_start
	private $time_end

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_date_range($id_date_range){
		$this->id_date_range = $id_date_range;
	}

	public function setTime_start($time_start){
		$this->time_start = $time_start;
	}

	public function setTime_end($time_end){
		$this->time_end = $time_end;
	}

	/* getters */
	public function getId_date_range($id_date_range){
		 return $this->id_date_range;
	}

	public function getTime_start($time_start){
		 return $this->time_start;
	}

	public function getTime_end($time_end){
		 return $this->time_end;
	}



}