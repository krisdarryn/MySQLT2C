<?php

class Runner{


	/* fields */
	private $runner_id
	private $first_name
	private $last_name
	private $gender
	private $finish_time

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setRunner_id($runner_id){
		$this->runner_id = $runner_id;
	}

	public function setFirst_name($first_name){
		$this->first_name = $first_name;
	}

	public function setLast_name($last_name){
		$this->last_name = $last_name;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function setFinish_time($finish_time){
		$this->finish_time = $finish_time;
	}

	/* getters */
	public function getRunner_id($runner_id){
		 return $this->runner_id;
	}

	public function getFirst_name($first_name){
		 return $this->first_name;
	}

	public function getLast_name($last_name){
		 return $this->last_name;
	}

	public function getGender($gender){
		 return $this->gender;
	}

	public function getFinish_time($finish_time){
		 return $this->finish_time;
	}



}