<?php

class Ps_product_shop{


	/* fields */
	private $id_product
	private $id_shop
	private $id_category_default
	private $id_tax_rules_group
	private $on_sale
	private $online_only
	private $ecotax
	private $minimal_quantity
	private $price
	private $wholesale_price
	private $unity
	private $unit_price_ratio
	private $additional_shipping_cost
	private $customizable
	private $uploadable_files
	private $text_fields
	private $active
	private $redirect_type
	private $id_product_redirected
	private $available_for_order
	private $available_date
	private $condition
	private $show_price
	private $indexed
	private $visibility
	private $cache_default_attribute
	private $advanced_stock_management
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_category_default($id_category_default){
		$this->id_category_default = $id_category_default;
	}

	public function setId_tax_rules_group($id_tax_rules_group){
		$this->id_tax_rules_group = $id_tax_rules_group;
	}

	public function setOn_sale($on_sale){
		$this->on_sale = $on_sale;
	}

	public function setOnline_only($online_only){
		$this->online_only = $online_only;
	}

	public function setEcotax($ecotax){
		$this->ecotax = $ecotax;
	}

	public function setMinimal_quantity($minimal_quantity){
		$this->minimal_quantity = $minimal_quantity;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function setWholesale_price($wholesale_price){
		$this->wholesale_price = $wholesale_price;
	}

	public function setUnity($unity){
		$this->unity = $unity;
	}

	public function setUnit_price_ratio($unit_price_ratio){
		$this->unit_price_ratio = $unit_price_ratio;
	}

	public function setAdditional_shipping_cost($additional_shipping_cost){
		$this->additional_shipping_cost = $additional_shipping_cost;
	}

	public function setCustomizable($customizable){
		$this->customizable = $customizable;
	}

	public function setUploadable_files($uploadable_files){
		$this->uploadable_files = $uploadable_files;
	}

	public function setText_fields($text_fields){
		$this->text_fields = $text_fields;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setRedirect_type($redirect_type){
		$this->redirect_type = $redirect_type;
	}

	public function setId_product_redirected($id_product_redirected){
		$this->id_product_redirected = $id_product_redirected;
	}

	public function setAvailable_for_order($available_for_order){
		$this->available_for_order = $available_for_order;
	}

	public function setAvailable_date($available_date){
		$this->available_date = $available_date;
	}

	public function setCondition($condition){
		$this->condition = $condition;
	}

	public function setShow_price($show_price){
		$this->show_price = $show_price;
	}

	public function setIndexed($indexed){
		$this->indexed = $indexed;
	}

	public function setVisibility($visibility){
		$this->visibility = $visibility;
	}

	public function setCache_default_attribute($cache_default_attribute){
		$this->cache_default_attribute = $cache_default_attribute;
	}

	public function setAdvanced_stock_management($advanced_stock_management){
		$this->advanced_stock_management = $advanced_stock_management;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_category_default($id_category_default){
		 return $this->id_category_default;
	}

	public function getId_tax_rules_group($id_tax_rules_group){
		 return $this->id_tax_rules_group;
	}

	public function getOn_sale($on_sale){
		 return $this->on_sale;
	}

	public function getOnline_only($online_only){
		 return $this->online_only;
	}

	public function getEcotax($ecotax){
		 return $this->ecotax;
	}

	public function getMinimal_quantity($minimal_quantity){
		 return $this->minimal_quantity;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getWholesale_price($wholesale_price){
		 return $this->wholesale_price;
	}

	public function getUnity($unity){
		 return $this->unity;
	}

	public function getUnit_price_ratio($unit_price_ratio){
		 return $this->unit_price_ratio;
	}

	public function getAdditional_shipping_cost($additional_shipping_cost){
		 return $this->additional_shipping_cost;
	}

	public function getCustomizable($customizable){
		 return $this->customizable;
	}

	public function getUploadable_files($uploadable_files){
		 return $this->uploadable_files;
	}

	public function getText_fields($text_fields){
		 return $this->text_fields;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getRedirect_type($redirect_type){
		 return $this->redirect_type;
	}

	public function getId_product_redirected($id_product_redirected){
		 return $this->id_product_redirected;
	}

	public function getAvailable_for_order($available_for_order){
		 return $this->available_for_order;
	}

	public function getAvailable_date($available_date){
		 return $this->available_date;
	}

	public function getCondition($condition){
		 return $this->condition;
	}

	public function getShow_price($show_price){
		 return $this->show_price;
	}

	public function getIndexed($indexed){
		 return $this->indexed;
	}

	public function getVisibility($visibility){
		 return $this->visibility;
	}

	public function getCache_default_attribute($cache_default_attribute){
		 return $this->cache_default_attribute;
	}

	public function getAdvanced_stock_management($advanced_stock_management){
		 return $this->advanced_stock_management;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}