<?php

class Ps_advice{


	/* fields */
	private $id_advice
	private $id_ps_advice
	private $id_tab
	private $ids_tab
	private $validated
	private $hide
	private $location
	private $selector
	private $start_day
	private $stop_day

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_advice($id_advice){
		$this->id_advice = $id_advice;
	}

	public function setId_ps_advice($id_ps_advice){
		$this->id_ps_advice = $id_ps_advice;
	}

	public function setId_tab($id_tab){
		$this->id_tab = $id_tab;
	}

	public function setIds_tab($ids_tab){
		$this->ids_tab = $ids_tab;
	}

	public function setValidated($validated){
		$this->validated = $validated;
	}

	public function setHide($hide){
		$this->hide = $hide;
	}

	public function setLocation($location){
		$this->location = $location;
	}

	public function setSelector($selector){
		$this->selector = $selector;
	}

	public function setStart_day($start_day){
		$this->start_day = $start_day;
	}

	public function setStop_day($stop_day){
		$this->stop_day = $stop_day;
	}

	/* getters */
	public function getId_advice($id_advice){
		 return $this->id_advice;
	}

	public function getId_ps_advice($id_ps_advice){
		 return $this->id_ps_advice;
	}

	public function getId_tab($id_tab){
		 return $this->id_tab;
	}

	public function getIds_tab($ids_tab){
		 return $this->ids_tab;
	}

	public function getValidated($validated){
		 return $this->validated;
	}

	public function getHide($hide){
		 return $this->hide;
	}

	public function getLocation($location){
		 return $this->location;
	}

	public function getSelector($selector){
		 return $this->selector;
	}

	public function getStart_day($start_day){
		 return $this->start_day;
	}

	public function getStop_day($stop_day){
		 return $this->stop_day;
	}



}