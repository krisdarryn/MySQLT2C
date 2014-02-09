<?php

class Ps_stock_available{


	/* fields */
	private $id_stock_available
	private $id_product
	private $id_product_attribute
	private $id_shop
	private $id_shop_group
	private $quantity
	private $depends_on_stock
	private $out_of_stock

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_stock_available($id_stock_available){
		$this->id_stock_available = $id_stock_available;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setDepends_on_stock($depends_on_stock){
		$this->depends_on_stock = $depends_on_stock;
	}

	public function setOut_of_stock($out_of_stock){
		$this->out_of_stock = $out_of_stock;
	}

	/* getters */
	public function getId_stock_available($id_stock_available){
		 return $this->id_stock_available;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getDepends_on_stock($depends_on_stock){
		 return $this->depends_on_stock;
	}

	public function getOut_of_stock($out_of_stock){
		 return $this->out_of_stock;
	}



}