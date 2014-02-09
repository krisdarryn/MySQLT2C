<?php

class Ps_statssearch{


	/* fields */
	private $id_statssearch
	private $id_shop
	private $id_shop_group
	private $keywords
	private $results
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_statssearch($id_statssearch){
		$this->id_statssearch = $id_statssearch;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setKeywords($keywords){
		$this->keywords = $keywords;
	}

	public function setResults($results){
		$this->results = $results;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_statssearch($id_statssearch){
		 return $this->id_statssearch;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getKeywords($keywords){
		 return $this->keywords;
	}

	public function getResults($results){
		 return $this->results;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}