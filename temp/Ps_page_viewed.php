<?php

class Ps_page_viewed{


	/* fields */
	private $id_page
	private $id_shop_group
	private $id_shop
	private $id_date_range
	private $counter

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_page($id_page){
		$this->id_page = $id_page;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_date_range($id_date_range){
		$this->id_date_range = $id_date_range;
	}

	public function setCounter($counter){
		$this->counter = $counter;
	}

	/* getters */
	public function getId_page($id_page){
		 return $this->id_page;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_date_range($id_date_range){
		 return $this->id_date_range;
	}

	public function getCounter($counter){
		 return $this->counter;
	}



}