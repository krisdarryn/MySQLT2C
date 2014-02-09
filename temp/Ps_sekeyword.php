<?php

class Ps_sekeyword{


	/* fields */
	private $id_sekeyword
	private $id_shop
	private $id_shop_group
	private $keyword
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_sekeyword($id_sekeyword){
		$this->id_sekeyword = $id_sekeyword;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setKeyword($keyword){
		$this->keyword = $keyword;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_sekeyword($id_sekeyword){
		 return $this->id_sekeyword;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getKeyword($keyword){
		 return $this->keyword;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}