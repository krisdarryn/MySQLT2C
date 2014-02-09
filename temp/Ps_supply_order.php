<?php

class Ps_supply_order{


	/* fields */
	private $id_supply_order
	private $id_supplier
	private $supplier_name
	private $id_lang
	private $id_warehouse
	private $id_supply_order_state
	private $id_currency
	private $id_ref_currency
	private $reference
	private $date_add
	private $date_upd
	private $date_delivery_expected
	private $total_te
	private $total_with_discount_te
	private $total_tax
	private $total_ti
	private $discount_rate
	private $discount_value_te
	private $is_template

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supply_order($id_supply_order){
		$this->id_supply_order = $id_supply_order;
	}

	public function setId_supplier($id_supplier){
		$this->id_supplier = $id_supplier;
	}

	public function setSupplier_name($supplier_name){
		$this->supplier_name = $supplier_name;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	public function setId_supply_order_state($id_supply_order_state){
		$this->id_supply_order_state = $id_supply_order_state;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_ref_currency($id_ref_currency){
		$this->id_ref_currency = $id_ref_currency;
	}

	public function setReference($reference){
		$this->reference = $reference;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	public function setDate_delivery_expected($date_delivery_expected){
		$this->date_delivery_expected = $date_delivery_expected;
	}

	public function setTotal_te($total_te){
		$this->total_te = $total_te;
	}

	public function setTotal_with_discount_te($total_with_discount_te){
		$this->total_with_discount_te = $total_with_discount_te;
	}

	public function setTotal_tax($total_tax){
		$this->total_tax = $total_tax;
	}

	public function setTotal_ti($total_ti){
		$this->total_ti = $total_ti;
	}

	public function setDiscount_rate($discount_rate){
		$this->discount_rate = $discount_rate;
	}

	public function setDiscount_value_te($discount_value_te){
		$this->discount_value_te = $discount_value_te;
	}

	public function setIs_template($is_template){
		$this->is_template = $is_template;
	}

	/* getters */
	public function getId_supply_order($id_supply_order){
		 return $this->id_supply_order;
	}

	public function getId_supplier($id_supplier){
		 return $this->id_supplier;
	}

	public function getSupplier_name($supplier_name){
		 return $this->supplier_name;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}

	public function getId_supply_order_state($id_supply_order_state){
		 return $this->id_supply_order_state;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_ref_currency($id_ref_currency){
		 return $this->id_ref_currency;
	}

	public function getReference($reference){
		 return $this->reference;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}

	public function getDate_delivery_expected($date_delivery_expected){
		 return $this->date_delivery_expected;
	}

	public function getTotal_te($total_te){
		 return $this->total_te;
	}

	public function getTotal_with_discount_te($total_with_discount_te){
		 return $this->total_with_discount_te;
	}

	public function getTotal_tax($total_tax){
		 return $this->total_tax;
	}

	public function getTotal_ti($total_ti){
		 return $this->total_ti;
	}

	public function getDiscount_rate($discount_rate){
		 return $this->discount_rate;
	}

	public function getDiscount_value_te($discount_value_te){
		 return $this->discount_value_te;
	}

	public function getIs_template($is_template){
		 return $this->is_template;
	}



}