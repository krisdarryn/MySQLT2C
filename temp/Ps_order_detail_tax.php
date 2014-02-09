<?php

class Ps_order_detail_tax{


	/* fields */
	private $id_order_detail
	private $id_tax
	private $unit_amount
	private $total_amount

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_detail($id_order_detail){
		$this->id_order_detail = $id_order_detail;
	}

	public function setId_tax($id_tax){
		$this->id_tax = $id_tax;
	}

	public function setUnit_amount($unit_amount){
		$this->unit_amount = $unit_amount;
	}

	public function setTotal_amount($total_amount){
		$this->total_amount = $total_amount;
	}

	/* getters */
	public function getId_order_detail($id_order_detail){
		 return $this->id_order_detail;
	}

	public function getId_tax($id_tax){
		 return $this->id_tax;
	}

	public function getUnit_amount($unit_amount){
		 return $this->unit_amount;
	}

	public function getTotal_amount($total_amount){
		 return $this->total_amount;
	}



}