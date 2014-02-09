<?php

class Ps_cms_block_shop{


	/* fields */
	private $id_cms_block
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms_block($id_cms_block){
		$this->id_cms_block = $id_cms_block;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_cms_block($id_cms_block){
		 return $this->id_cms_block;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}