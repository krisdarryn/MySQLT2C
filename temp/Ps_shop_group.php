<?php

class Ps_shop_group{


	/* fields */
	private $id_shop_group
	private $name
	private $share_customer
	private $share_order
	private $share_stock
	private $active
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setShare_customer($share_customer){
		$this->share_customer = $share_customer;
	}

	public function setShare_order($share_order){
		$this->share_order = $share_order;
	}

	public function setShare_stock($share_stock){
		$this->share_stock = $share_stock;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getShare_customer($share_customer){
		 return $this->share_customer;
	}

	public function getShare_order($share_order){
		 return $this->share_order;
	}

	public function getShare_stock($share_stock){
		 return $this->share_stock;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}