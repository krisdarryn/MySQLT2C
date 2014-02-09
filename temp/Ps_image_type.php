<?php

class Ps_image_type{


	/* fields */
	private $id_image_type
	private $name
	private $width
	private $height
	private $products
	private $categories
	private $manufacturers
	private $suppliers
	private $scenes
	private $stores

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_image_type($id_image_type){
		$this->id_image_type = $id_image_type;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setWidth($width){
		$this->width = $width;
	}

	public function setHeight($height){
		$this->height = $height;
	}

	public function setProducts($products){
		$this->products = $products;
	}

	public function setCategories($categories){
		$this->categories = $categories;
	}

	public function setManufacturers($manufacturers){
		$this->manufacturers = $manufacturers;
	}

	public function setSuppliers($suppliers){
		$this->suppliers = $suppliers;
	}

	public function setScenes($scenes){
		$this->scenes = $scenes;
	}

	public function setStores($stores){
		$this->stores = $stores;
	}

	/* getters */
	public function getId_image_type($id_image_type){
		 return $this->id_image_type;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getWidth($width){
		 return $this->width;
	}

	public function getHeight($height){
		 return $this->height;
	}

	public function getProducts($products){
		 return $this->products;
	}

	public function getCategories($categories){
		 return $this->categories;
	}

	public function getManufacturers($manufacturers){
		 return $this->manufacturers;
	}

	public function getSuppliers($suppliers){
		 return $this->suppliers;
	}

	public function getScenes($scenes){
		 return $this->scenes;
	}

	public function getStores($stores){
		 return $this->stores;
	}



}