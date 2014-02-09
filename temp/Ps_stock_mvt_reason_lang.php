<?php

class Ps_stock_mvt_reason_lang{


	/* fields */
	private $id_stock_mvt_reason
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_stock_mvt_reason($id_stock_mvt_reason){
		$this->id_stock_mvt_reason = $id_stock_mvt_reason;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_stock_mvt_reason($id_stock_mvt_reason){
		 return $this->id_stock_mvt_reason;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}