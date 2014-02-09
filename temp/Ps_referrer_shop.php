<?php

class Ps_referrer_shop{


	/* fields */
	private $id_referrer
	private $id_shop
	private $cache_visitors
	private $cache_visits
	private $cache_pages
	private $cache_registrations
	private $cache_orders
	private $cache_sales
	private $cache_reg_rate
	private $cache_order_rate

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_referrer($id_referrer){
		$this->id_referrer = $id_referrer;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setCache_visitors($cache_visitors){
		$this->cache_visitors = $cache_visitors;
	}

	public function setCache_visits($cache_visits){
		$this->cache_visits = $cache_visits;
	}

	public function setCache_pages($cache_pages){
		$this->cache_pages = $cache_pages;
	}

	public function setCache_registrations($cache_registrations){
		$this->cache_registrations = $cache_registrations;
	}

	public function setCache_orders($cache_orders){
		$this->cache_orders = $cache_orders;
	}

	public function setCache_sales($cache_sales){
		$this->cache_sales = $cache_sales;
	}

	public function setCache_reg_rate($cache_reg_rate){
		$this->cache_reg_rate = $cache_reg_rate;
	}

	public function setCache_order_rate($cache_order_rate){
		$this->cache_order_rate = $cache_order_rate;
	}

	/* getters */
	public function getId_referrer($id_referrer){
		 return $this->id_referrer;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getCache_visitors($cache_visitors){
		 return $this->cache_visitors;
	}

	public function getCache_visits($cache_visits){
		 return $this->cache_visits;
	}

	public function getCache_pages($cache_pages){
		 return $this->cache_pages;
	}

	public function getCache_registrations($cache_registrations){
		 return $this->cache_registrations;
	}

	public function getCache_orders($cache_orders){
		 return $this->cache_orders;
	}

	public function getCache_sales($cache_sales){
		 return $this->cache_sales;
	}

	public function getCache_reg_rate($cache_reg_rate){
		 return $this->cache_reg_rate;
	}

	public function getCache_order_rate($cache_order_rate){
		 return $this->cache_order_rate;
	}



}