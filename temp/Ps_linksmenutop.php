<?php

class Ps_linksmenutop{


	/* fields */
	private $id_linksmenutop
	private $id_shop
	private $new_window

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_linksmenutop($id_linksmenutop){
		$this->id_linksmenutop = $id_linksmenutop;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setNew_window($new_window){
		$this->new_window = $new_window;
	}

	/* getters */
	public function getId_linksmenutop($id_linksmenutop){
		 return $this->id_linksmenutop;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getNew_window($new_window){
		 return $this->new_window;
	}



}