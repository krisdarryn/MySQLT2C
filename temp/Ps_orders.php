<?php

class Ps_orders{


	/* fields */
	private $id_order
	private $reference
	private $id_shop_group
	private $id_shop
	private $id_carrier
	private $id_lang
	private $id_customer
	private $id_cart
	private $id_currency
	private $id_address_delivery
	private $id_address_invoice
	private $current_state
	private $secure_key
	private $payment
	private $conversion_rate
	private $module
	private $recyclable
	private $gift
	private $gift_message
	private $mobile_theme
	private $shipping_number
	private $total_discounts
	private $total_discounts_tax_incl
	private $total_discounts_tax_excl
	private $total_paid
	private $total_paid_tax_incl
	private $total_paid_tax_excl
	private $total_paid_real
	private $total_products
	private $total_products_wt
	private $total_shipping
	private $total_shipping_tax_incl
	private $total_shipping_tax_excl
	private $carrier_tax_rate
	private $total_wrapping
	private $total_wrapping_tax_incl
	private $total_wrapping_tax_excl
	private $invoice_number
	private $delivery_number
	private $invoice_date
	private $delivery_date
	private $valid
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setReference($reference){
		$this->reference = $reference;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_address_delivery($id_address_delivery){
		$this->id_address_delivery = $id_address_delivery;
	}

	public function setId_address_invoice($id_address_invoice){
		$this->id_address_invoice = $id_address_invoice;
	}

	public function setCurrent_state($current_state){
		$this->current_state = $current_state;
	}

	public function setSecure_key($secure_key){
		$this->secure_key = $secure_key;
	}

	public function setPayment($payment){
		$this->payment = $payment;
	}

	public function setConversion_rate($conversion_rate){
		$this->conversion_rate = $conversion_rate;
	}

	public function setModule($module){
		$this->module = $module;
	}

	public function setRecyclable($recyclable){
		$this->recyclable = $recyclable;
	}

	public function setGift($gift){
		$this->gift = $gift;
	}

	public function setGift_message($gift_message){
		$this->gift_message = $gift_message;
	}

	public function setMobile_theme($mobile_theme){
		$this->mobile_theme = $mobile_theme;
	}

	public function setShipping_number($shipping_number){
		$this->shipping_number = $shipping_number;
	}

	public function setTotal_discounts($total_discounts){
		$this->total_discounts = $total_discounts;
	}

	public function setTotal_discounts_tax_incl($total_discounts_tax_incl){
		$this->total_discounts_tax_incl = $total_discounts_tax_incl;
	}

	public function setTotal_discounts_tax_excl($total_discounts_tax_excl){
		$this->total_discounts_tax_excl = $total_discounts_tax_excl;
	}

	public function setTotal_paid($total_paid){
		$this->total_paid = $total_paid;
	}

	public function setTotal_paid_tax_incl($total_paid_tax_incl){
		$this->total_paid_tax_incl = $total_paid_tax_incl;
	}

	public function setTotal_paid_tax_excl($total_paid_tax_excl){
		$this->total_paid_tax_excl = $total_paid_tax_excl;
	}

	public function setTotal_paid_real($total_paid_real){
		$this->total_paid_real = $total_paid_real;
	}

	public function setTotal_products($total_products){
		$this->total_products = $total_products;
	}

	public function setTotal_products_wt($total_products_wt){
		$this->total_products_wt = $total_products_wt;
	}

	public function setTotal_shipping($total_shipping){
		$this->total_shipping = $total_shipping;
	}

	public function setTotal_shipping_tax_incl($total_shipping_tax_incl){
		$this->total_shipping_tax_incl = $total_shipping_tax_incl;
	}

	public function setTotal_shipping_tax_excl($total_shipping_tax_excl){
		$this->total_shipping_tax_excl = $total_shipping_tax_excl;
	}

	public function setCarrier_tax_rate($carrier_tax_rate){
		$this->carrier_tax_rate = $carrier_tax_rate;
	}

	public function setTotal_wrapping($total_wrapping){
		$this->total_wrapping = $total_wrapping;
	}

	public function setTotal_wrapping_tax_incl($total_wrapping_tax_incl){
		$this->total_wrapping_tax_incl = $total_wrapping_tax_incl;
	}

	public function setTotal_wrapping_tax_excl($total_wrapping_tax_excl){
		$this->total_wrapping_tax_excl = $total_wrapping_tax_excl;
	}

	public function setInvoice_number($invoice_number){
		$this->invoice_number = $invoice_number;
	}

	public function setDelivery_number($delivery_number){
		$this->delivery_number = $delivery_number;
	}

	public function setInvoice_date($invoice_date){
		$this->invoice_date = $invoice_date;
	}

	public function setDelivery_date($delivery_date){
		$this->delivery_date = $delivery_date;
	}

	public function setValid($valid){
		$this->valid = $valid;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getReference($reference){
		 return $this->reference;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_address_delivery($id_address_delivery){
		 return $this->id_address_delivery;
	}

	public function getId_address_invoice($id_address_invoice){
		 return $this->id_address_invoice;
	}

	public function getCurrent_state($current_state){
		 return $this->current_state;
	}

	public function getSecure_key($secure_key){
		 return $this->secure_key;
	}

	public function getPayment($payment){
		 return $this->payment;
	}

	public function getConversion_rate($conversion_rate){
		 return $this->conversion_rate;
	}

	public function getModule($module){
		 return $this->module;
	}

	public function getRecyclable($recyclable){
		 return $this->recyclable;
	}

	public function getGift($gift){
		 return $this->gift;
	}

	public function getGift_message($gift_message){
		 return $this->gift_message;
	}

	public function getMobile_theme($mobile_theme){
		 return $this->mobile_theme;
	}

	public function getShipping_number($shipping_number){
		 return $this->shipping_number;
	}

	public function getTotal_discounts($total_discounts){
		 return $this->total_discounts;
	}

	public function getTotal_discounts_tax_incl($total_discounts_tax_incl){
		 return $this->total_discounts_tax_incl;
	}

	public function getTotal_discounts_tax_excl($total_discounts_tax_excl){
		 return $this->total_discounts_tax_excl;
	}

	public function getTotal_paid($total_paid){
		 return $this->total_paid;
	}

	public function getTotal_paid_tax_incl($total_paid_tax_incl){
		 return $this->total_paid_tax_incl;
	}

	public function getTotal_paid_tax_excl($total_paid_tax_excl){
		 return $this->total_paid_tax_excl;
	}

	public function getTotal_paid_real($total_paid_real){
		 return $this->total_paid_real;
	}

	public function getTotal_products($total_products){
		 return $this->total_products;
	}

	public function getTotal_products_wt($total_products_wt){
		 return $this->total_products_wt;
	}

	public function getTotal_shipping($total_shipping){
		 return $this->total_shipping;
	}

	public function getTotal_shipping_tax_incl($total_shipping_tax_incl){
		 return $this->total_shipping_tax_incl;
	}

	public function getTotal_shipping_tax_excl($total_shipping_tax_excl){
		 return $this->total_shipping_tax_excl;
	}

	public function getCarrier_tax_rate($carrier_tax_rate){
		 return $this->carrier_tax_rate;
	}

	public function getTotal_wrapping($total_wrapping){
		 return $this->total_wrapping;
	}

	public function getTotal_wrapping_tax_incl($total_wrapping_tax_incl){
		 return $this->total_wrapping_tax_incl;
	}

	public function getTotal_wrapping_tax_excl($total_wrapping_tax_excl){
		 return $this->total_wrapping_tax_excl;
	}

	public function getInvoice_number($invoice_number){
		 return $this->invoice_number;
	}

	public function getDelivery_number($delivery_number){
		 return $this->delivery_number;
	}

	public function getInvoice_date($invoice_date){
		 return $this->invoice_date;
	}

	public function getDelivery_date($delivery_date){
		 return $this->delivery_date;
	}

	public function getValid($valid){
		 return $this->valid;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}