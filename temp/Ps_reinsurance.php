<?php

class Ps_reinsurance{


	/* fields */
	private $id_reinsurance
	private $id_shop
	private $file_name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_reinsurance($id_reinsurance){
		$this->id_reinsurance = $id_reinsurance;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setFile_name($file_name){
		$this->file_name = $file_name;
	}

	/* getters */
	public function getId_reinsurance($id_reinsurance){
		 return $this->id_reinsurance;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getFile_name($file_name){
		 return $this->file_name;
	}



}