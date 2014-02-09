<?php

class Ps_delivery{


	/* fields */
	private $id_delivery
	private $id_shop
	private $id_shop_group
	private $id_carrier
	private $id_range_price
	private $id_range_weight
	private $id_zone
	private $price

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_delivery($id_delivery){
		$this->id_delivery = $id_delivery;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_range_price($id_range_price){
		$this->id_range_price = $id_range_price;
	}

	public function setId_range_weight($id_range_weight){
		$this->id_range_weight = $id_range_weight;
	}

	public function setId_zone($id_zone){
		$this->id_zone = $id_zone;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	/* getters */
	public function getId_delivery($id_delivery){
		 return $this->id_delivery;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_range_price($id_range_price){
		 return $this->id_range_price;
	}

	public function getId_range_weight($id_range_weight){
		 return $this->id_range_weight;
	}

	public function getId_zone($id_zone){
		 return $this->id_zone;
	}

	public function getPrice($price){
		 return $this->price;
	}



}