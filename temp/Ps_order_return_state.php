<?php

class Ps_order_return_state{


	/* fields */
	private $id_order_return_state
	private $color

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_return_state($id_order_return_state){
		$this->id_order_return_state = $id_order_return_state;
	}

	public function setColor($color){
		$this->color = $color;
	}

	/* getters */
	public function getId_order_return_state($id_order_return_state){
		 return $this->id_order_return_state;
	}

	public function getColor($color){
		 return $this->color;
	}



}