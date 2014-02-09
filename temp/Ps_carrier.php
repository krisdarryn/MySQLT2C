<?php

class Ps_carrier{


	/* fields */
	private $id_carrier
	private $id_reference
	private $id_tax_rules_group
	private $name
	private $url
	private $active
	private $deleted
	private $shipping_handling
	private $range_behavior
	private $is_module
	private $is_free
	private $shipping_external
	private $need_range
	private $external_module_name
	private $shipping_method
	private $position
	private $max_width
	private $max_height
	private $max_depth
	private $max_weight
	private $grade

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_reference($id_reference){
		$this->id_reference = $id_reference;
	}

	public function setId_tax_rules_group($id_tax_rules_group){
		$this->id_tax_rules_group = $id_tax_rules_group;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setUrl($url){
		$this->url = $url;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	public function setShipping_handling($shipping_handling){
		$this->shipping_handling = $shipping_handling;
	}

	public function setRange_behavior($range_behavior){
		$this->range_behavior = $range_behavior;
	}

	public function setIs_module($is_module){
		$this->is_module = $is_module;
	}

	public function setIs_free($is_free){
		$this->is_free = $is_free;
	}

	public function setShipping_external($shipping_external){
		$this->shipping_external = $shipping_external;
	}

	public function setNeed_range($need_range){
		$this->need_range = $need_range;
	}

	public function setExternal_module_name($external_module_name){
		$this->external_module_name = $external_module_name;
	}

	public function setShipping_method($shipping_method){
		$this->shipping_method = $shipping_method;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setMax_width($max_width){
		$this->max_width = $max_width;
	}

	public function setMax_height($max_height){
		$this->max_height = $max_height;
	}

	public function setMax_depth($max_depth){
		$this->max_depth = $max_depth;
	}

	public function setMax_weight($max_weight){
		$this->max_weight = $max_weight;
	}

	public function setGrade($grade){
		$this->grade = $grade;
	}

	/* getters */
	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_reference($id_reference){
		 return $this->id_reference;
	}

	public function getId_tax_rules_group($id_tax_rules_group){
		 return $this->id_tax_rules_group;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getUrl($url){
		 return $this->url;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}

	public function getShipping_handling($shipping_handling){
		 return $this->shipping_handling;
	}

	public function getRange_behavior($range_behavior){
		 return $this->range_behavior;
	}

	public function getIs_module($is_module){
		 return $this->is_module;
	}

	public function getIs_free($is_free){
		 return $this->is_free;
	}

	public function getShipping_external($shipping_external){
		 return $this->shipping_external;
	}

	public function getNeed_range($need_range){
		 return $this->need_range;
	}

	public function getExternal_module_name($external_module_name){
		 return $this->external_module_name;
	}

	public function getShipping_method($shipping_method){
		 return $this->shipping_method;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getMax_width($max_width){
		 return $this->max_width;
	}

	public function getMax_height($max_height){
		 return $this->max_height;
	}

	public function getMax_depth($max_depth){
		 return $this->max_depth;
	}

	public function getMax_weight($max_weight){
		 return $this->max_weight;
	}

	public function getGrade($grade){
		 return $this->grade;
	}



}