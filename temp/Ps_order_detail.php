<?php

class Ps_order_detail{


	/* fields */
	private $id_order_detail
	private $id_order
	private $id_order_invoice
	private $id_warehouse
	private $id_shop
	private $product_id
	private $product_attribute_id
	private $product_name
	private $product_quantity
	private $product_quantity_in_stock
	private $product_quantity_refunded
	private $product_quantity_return
	private $product_quantity_reinjected
	private $product_price
	private $reduction_percent
	private $reduction_amount
	private $reduction_amount_tax_incl
	private $reduction_amount_tax_excl
	private $group_reduction
	private $product_quantity_discount
	private $product_ean13
	private $product_upc
	private $product_reference
	private $product_supplier_reference
	private $product_weight
	private $tax_computation_method
	private $tax_name
	private $tax_rate
	private $ecotax
	private $ecotax_tax_rate
	private $discount_quantity_applied
	private $download_hash
	private $download_nb
	private $download_deadline
	private $total_price_tax_incl
	private $total_price_tax_excl
	private $unit_price_tax_incl
	private $unit_price_tax_excl
	private $total_shipping_price_tax_incl
	private $total_shipping_price_tax_excl
	private $purchase_supplier_price
	private $original_product_price

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_detail($id_order_detail){
		$this->id_order_detail = $id_order_detail;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setId_order_invoice($id_order_invoice){
		$this->id_order_invoice = $id_order_invoice;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setProduct_id($product_id){
		$this->product_id = $product_id;
	}

	public function setProduct_attribute_id($product_attribute_id){
		$this->product_attribute_id = $product_attribute_id;
	}

	public function setProduct_name($product_name){
		$this->product_name = $product_name;
	}

	public function setProduct_quantity($product_quantity){
		$this->product_quantity = $product_quantity;
	}

	public function setProduct_quantity_in_stock($product_quantity_in_stock){
		$this->product_quantity_in_stock = $product_quantity_in_stock;
	}

	public function setProduct_quantity_refunded($product_quantity_refunded){
		$this->product_quantity_refunded = $product_quantity_refunded;
	}

	public function setProduct_quantity_return($product_quantity_return){
		$this->product_quantity_return = $product_quantity_return;
	}

	public function setProduct_quantity_reinjected($product_quantity_reinjected){
		$this->product_quantity_reinjected = $product_quantity_reinjected;
	}

	public function setProduct_price($product_price){
		$this->product_price = $product_price;
	}

	public function setReduction_percent($reduction_percent){
		$this->reduction_percent = $reduction_percent;
	}

	public function setReduction_amount($reduction_amount){
		$this->reduction_amount = $reduction_amount;
	}

	public function setReduction_amount_tax_incl($reduction_amount_tax_incl){
		$this->reduction_amount_tax_incl = $reduction_amount_tax_incl;
	}

	public function setReduction_amount_tax_excl($reduction_amount_tax_excl){
		$this->reduction_amount_tax_excl = $reduction_amount_tax_excl;
	}

	public function setGroup_reduction($group_reduction){
		$this->group_reduction = $group_reduction;
	}

	public function setProduct_quantity_discount($product_quantity_discount){
		$this->product_quantity_discount = $product_quantity_discount;
	}

	public function setProduct_ean13($product_ean13){
		$this->product_ean13 = $product_ean13;
	}

	public function setProduct_upc($product_upc){
		$this->product_upc = $product_upc;
	}

	public function setProduct_reference($product_reference){
		$this->product_reference = $product_reference;
	}

	public function setProduct_supplier_reference($product_supplier_reference){
		$this->product_supplier_reference = $product_supplier_reference;
	}

	public function setProduct_weight($product_weight){
		$this->product_weight = $product_weight;
	}

	public function setTax_computation_method($tax_computation_method){
		$this->tax_computation_method = $tax_computation_method;
	}

	public function setTax_name($tax_name){
		$this->tax_name = $tax_name;
	}

	public function setTax_rate($tax_rate){
		$this->tax_rate = $tax_rate;
	}

	public function setEcotax($ecotax){
		$this->ecotax = $ecotax;
	}

	public function setEcotax_tax_rate($ecotax_tax_rate){
		$this->ecotax_tax_rate = $ecotax_tax_rate;
	}

	public function setDiscount_quantity_applied($discount_quantity_applied){
		$this->discount_quantity_applied = $discount_quantity_applied;
	}

	public function setDownload_hash($download_hash){
		$this->download_hash = $download_hash;
	}

	public function setDownload_nb($download_nb){
		$this->download_nb = $download_nb;
	}

	public function setDownload_deadline($download_deadline){
		$this->download_deadline = $download_deadline;
	}

	public function setTotal_price_tax_incl($total_price_tax_incl){
		$this->total_price_tax_incl = $total_price_tax_incl;
	}

	public function setTotal_price_tax_excl($total_price_tax_excl){
		$this->total_price_tax_excl = $total_price_tax_excl;
	}

	public function setUnit_price_tax_incl($unit_price_tax_incl){
		$this->unit_price_tax_incl = $unit_price_tax_incl;
	}

	public function setUnit_price_tax_excl($unit_price_tax_excl){
		$this->unit_price_tax_excl = $unit_price_tax_excl;
	}

	public function setTotal_shipping_price_tax_incl($total_shipping_price_tax_incl){
		$this->total_shipping_price_tax_incl = $total_shipping_price_tax_incl;
	}

	public function setTotal_shipping_price_tax_excl($total_shipping_price_tax_excl){
		$this->total_shipping_price_tax_excl = $total_shipping_price_tax_excl;
	}

	public function setPurchase_supplier_price($purchase_supplier_price){
		$this->purchase_supplier_price = $purchase_supplier_price;
	}

	public function setOriginal_product_price($original_product_price){
		$this->original_product_price = $original_product_price;
	}

	/* getters */
	public function getId_order_detail($id_order_detail){
		 return $this->id_order_detail;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getId_order_invoice($id_order_invoice){
		 return $this->id_order_invoice;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getProduct_id($product_id){
		 return $this->product_id;
	}

	public function getProduct_attribute_id($product_attribute_id){
		 return $this->product_attribute_id;
	}

	public function getProduct_name($product_name){
		 return $this->product_name;
	}

	public function getProduct_quantity($product_quantity){
		 return $this->product_quantity;
	}

	public function getProduct_quantity_in_stock($product_quantity_in_stock){
		 return $this->product_quantity_in_stock;
	}

	public function getProduct_quantity_refunded($product_quantity_refunded){
		 return $this->product_quantity_refunded;
	}

	public function getProduct_quantity_return($product_quantity_return){
		 return $this->product_quantity_return;
	}

	public function getProduct_quantity_reinjected($product_quantity_reinjected){
		 return $this->product_quantity_reinjected;
	}

	public function getProduct_price($product_price){
		 return $this->product_price;
	}

	public function getReduction_percent($reduction_percent){
		 return $this->reduction_percent;
	}

	public function getReduction_amount($reduction_amount){
		 return $this->reduction_amount;
	}

	public function getReduction_amount_tax_incl($reduction_amount_tax_incl){
		 return $this->reduction_amount_tax_incl;
	}

	public function getReduction_amount_tax_excl($reduction_amount_tax_excl){
		 return $this->reduction_amount_tax_excl;
	}

	public function getGroup_reduction($group_reduction){
		 return $this->group_reduction;
	}

	public function getProduct_quantity_discount($product_quantity_discount){
		 return $this->product_quantity_discount;
	}

	public function getProduct_ean13($product_ean13){
		 return $this->product_ean13;
	}

	public function getProduct_upc($product_upc){
		 return $this->product_upc;
	}

	public function getProduct_reference($product_reference){
		 return $this->product_reference;
	}

	public function getProduct_supplier_reference($product_supplier_reference){
		 return $this->product_supplier_reference;
	}

	public function getProduct_weight($product_weight){
		 return $this->product_weight;
	}

	public function getTax_computation_method($tax_computation_method){
		 return $this->tax_computation_method;
	}

	public function getTax_name($tax_name){
		 return $this->tax_name;
	}

	public function getTax_rate($tax_rate){
		 return $this->tax_rate;
	}

	public function getEcotax($ecotax){
		 return $this->ecotax;
	}

	public function getEcotax_tax_rate($ecotax_tax_rate){
		 return $this->ecotax_tax_rate;
	}

	public function getDiscount_quantity_applied($discount_quantity_applied){
		 return $this->discount_quantity_applied;
	}

	public function getDownload_hash($download_hash){
		 return $this->download_hash;
	}

	public function getDownload_nb($download_nb){
		 return $this->download_nb;
	}

	public function getDownload_deadline($download_deadline){
		 return $this->download_deadline;
	}

	public function getTotal_price_tax_incl($total_price_tax_incl){
		 return $this->total_price_tax_incl;
	}

	public function getTotal_price_tax_excl($total_price_tax_excl){
		 return $this->total_price_tax_excl;
	}

	public function getUnit_price_tax_incl($unit_price_tax_incl){
		 return $this->unit_price_tax_incl;
	}

	public function getUnit_price_tax_excl($unit_price_tax_excl){
		 return $this->unit_price_tax_excl;
	}

	public function getTotal_shipping_price_tax_incl($total_shipping_price_tax_incl){
		 return $this->total_shipping_price_tax_incl;
	}

	public function getTotal_shipping_price_tax_excl($total_shipping_price_tax_excl){
		 return $this->total_shipping_price_tax_excl;
	}

	public function getPurchase_supplier_price($purchase_supplier_price){
		 return $this->purchase_supplier_price;
	}

	public function getOriginal_product_price($original_product_price){
		 return $this->original_product_price;
	}



}