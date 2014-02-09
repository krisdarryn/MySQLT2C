<?php

class Ps_cart_rule{


	/* fields */
	private $id_cart_rule
	private $id_customer
	private $date_from
	private $date_to
	private $description
	private $quantity
	private $quantity_per_user
	private $priority
	private $partial_use
	private $code
	private $minimum_amount
	private $minimum_amount_tax
	private $minimum_amount_currency
	private $minimum_amount_shipping
	private $country_restriction
	private $carrier_restriction
	private $group_restriction
	private $cart_rule_restriction
	private $product_restriction
	private $shop_restriction
	private $free_shipping
	private $reduction_percent
	private $reduction_amount
	private $reduction_tax
	private $reduction_currency
	private $reduction_product
	private $gift_product
	private $gift_product_attribute
	private $highlight
	private $active
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setDate_from($date_from){
		$this->date_from = $date_from;
	}

	public function setDate_to($date_to){
		$this->date_to = $date_to;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setQuantity_per_user($quantity_per_user){
		$this->quantity_per_user = $quantity_per_user;
	}

	public function setPriority($priority){
		$this->priority = $priority;
	}

	public function setPartial_use($partial_use){
		$this->partial_use = $partial_use;
	}

	public function setCode($code){
		$this->code = $code;
	}

	public function setMinimum_amount($minimum_amount){
		$this->minimum_amount = $minimum_amount;
	}

	public function setMinimum_amount_tax($minimum_amount_tax){
		$this->minimum_amount_tax = $minimum_amount_tax;
	}

	public function setMinimum_amount_currency($minimum_amount_currency){
		$this->minimum_amount_currency = $minimum_amount_currency;
	}

	public function setMinimum_amount_shipping($minimum_amount_shipping){
		$this->minimum_amount_shipping = $minimum_amount_shipping;
	}

	public function setCountry_restriction($country_restriction){
		$this->country_restriction = $country_restriction;
	}

	public function setCarrier_restriction($carrier_restriction){
		$this->carrier_restriction = $carrier_restriction;
	}

	public function setGroup_restriction($group_restriction){
		$this->group_restriction = $group_restriction;
	}

	public function setCart_rule_restriction($cart_rule_restriction){
		$this->cart_rule_restriction = $cart_rule_restriction;
	}

	public function setProduct_restriction($product_restriction){
		$this->product_restriction = $product_restriction;
	}

	public function setShop_restriction($shop_restriction){
		$this->shop_restriction = $shop_restriction;
	}

	public function setFree_shipping($free_shipping){
		$this->free_shipping = $free_shipping;
	}

	public function setReduction_percent($reduction_percent){
		$this->reduction_percent = $reduction_percent;
	}

	public function setReduction_amount($reduction_amount){
		$this->reduction_amount = $reduction_amount;
	}

	public function setReduction_tax($reduction_tax){
		$this->reduction_tax = $reduction_tax;
	}

	public function setReduction_currency($reduction_currency){
		$this->reduction_currency = $reduction_currency;
	}

	public function setReduction_product($reduction_product){
		$this->reduction_product = $reduction_product;
	}

	public function setGift_product($gift_product){
		$this->gift_product = $gift_product;
	}

	public function setGift_product_attribute($gift_product_attribute){
		$this->gift_product_attribute = $gift_product_attribute;
	}

	public function setHighlight($highlight){
		$this->highlight = $highlight;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getDate_from($date_from){
		 return $this->date_from;
	}

	public function getDate_to($date_to){
		 return $this->date_to;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getQuantity_per_user($quantity_per_user){
		 return $this->quantity_per_user;
	}

	public function getPriority($priority){
		 return $this->priority;
	}

	public function getPartial_use($partial_use){
		 return $this->partial_use;
	}

	public function getCode($code){
		 return $this->code;
	}

	public function getMinimum_amount($minimum_amount){
		 return $this->minimum_amount;
	}

	public function getMinimum_amount_tax($minimum_amount_tax){
		 return $this->minimum_amount_tax;
	}

	public function getMinimum_amount_currency($minimum_amount_currency){
		 return $this->minimum_amount_currency;
	}

	public function getMinimum_amount_shipping($minimum_amount_shipping){
		 return $this->minimum_amount_shipping;
	}

	public function getCountry_restriction($country_restriction){
		 return $this->country_restriction;
	}

	public function getCarrier_restriction($carrier_restriction){
		 return $this->carrier_restriction;
	}

	public function getGroup_restriction($group_restriction){
		 return $this->group_restriction;
	}

	public function getCart_rule_restriction($cart_rule_restriction){
		 return $this->cart_rule_restriction;
	}

	public function getProduct_restriction($product_restriction){
		 return $this->product_restriction;
	}

	public function getShop_restriction($shop_restriction){
		 return $this->shop_restriction;
	}

	public function getFree_shipping($free_shipping){
		 return $this->free_shipping;
	}

	public function getReduction_percent($reduction_percent){
		 return $this->reduction_percent;
	}

	public function getReduction_amount($reduction_amount){
		 return $this->reduction_amount;
	}

	public function getReduction_tax($reduction_tax){
		 return $this->reduction_tax;
	}

	public function getReduction_currency($reduction_currency){
		 return $this->reduction_currency;
	}

	public function getReduction_product($reduction_product){
		 return $this->reduction_product;
	}

	public function getGift_product($gift_product){
		 return $this->gift_product;
	}

	public function getGift_product_attribute($gift_product_attribute){
		 return $this->gift_product_attribute;
	}

	public function getHighlight($highlight){
		 return $this->highlight;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}