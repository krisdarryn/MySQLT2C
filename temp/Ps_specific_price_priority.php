<?php

class Ps_specific_price_priority{


	/* fields */
	private $id_specific_price_priority
	private $id_product
	private $priority

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_specific_price_priority($id_specific_price_priority){
		$this->id_specific_price_priority = $id_specific_price_priority;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setPriority($priority){
		$this->priority = $priority;
	}

	/* getters */
	public function getId_specific_price_priority($id_specific_price_priority){
		 return $this->id_specific_price_priority;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getPriority($priority){
		 return $this->priority;
	}



}