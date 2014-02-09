<?php

class Ps_specific_price_rule{


	/* fields */
	private $id_specific_price_rule
	private $name
	private $id_shop
	private $id_currency
	private $id_country
	private $id_group
	private $from_quantity
	private $price
	private $reduction
	private $reduction_type
	private $from
	private $to

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_specific_price_rule($id_specific_price_rule){
		$this->id_specific_price_rule = $id_specific_price_rule;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setFrom_quantity($from_quantity){
		$this->from_quantity = $from_quantity;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function setReduction($reduction){
		$this->reduction = $reduction;
	}

	public function setReduction_type($reduction_type){
		$this->reduction_type = $reduction_type;
	}

	public function setFrom($from){
		$this->from = $from;
	}

	public function setTo($to){
		$this->to = $to;
	}

	/* getters */
	public function getId_specific_price_rule($id_specific_price_rule){
		 return $this->id_specific_price_rule;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getFrom_quantity($from_quantity){
		 return $this->from_quantity;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getReduction($reduction){
		 return $this->reduction;
	}

	public function getReduction_type($reduction_type){
		 return $this->reduction_type;
	}

	public function getFrom($from){
		 return $this->from;
	}

	public function getTo($to){
		 return $this->to;
	}



}