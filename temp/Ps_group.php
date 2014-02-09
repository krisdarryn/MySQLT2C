<?php

class Ps_group{


	/* fields */
	private $id_group
	private $reduction
	private $price_display_method
	private $show_prices
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setReduction($reduction){
		$this->reduction = $reduction;
	}

	public function setPrice_display_method($price_display_method){
		$this->price_display_method = $price_display_method;
	}

	public function setShow_prices($show_prices){
		$this->show_prices = $show_prices;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getReduction($reduction){
		 return $this->reduction;
	}

	public function getPrice_display_method($price_display_method){
		 return $this->price_display_method;
	}

	public function getShow_prices($show_prices){
		 return $this->show_prices;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}