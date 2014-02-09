<?php

class Ps_product_download{


	/* fields */
	private $id_product_download
	private $id_product
	private $display_filename
	private $filename
	private $date_add
	private $date_expiration
	private $nb_days_accessible
	private $nb_downloadable
	private $active
	private $is_shareable

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_download($id_product_download){
		$this->id_product_download = $id_product_download;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setDisplay_filename($display_filename){
		$this->display_filename = $display_filename;
	}

	public function setFilename($filename){
		$this->filename = $filename;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_expiration($date_expiration){
		$this->date_expiration = $date_expiration;
	}

	public function setNb_days_accessible($nb_days_accessible){
		$this->nb_days_accessible = $nb_days_accessible;
	}

	public function setNb_downloadable($nb_downloadable){
		$this->nb_downloadable = $nb_downloadable;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setIs_shareable($is_shareable){
		$this->is_shareable = $is_shareable;
	}

	/* getters */
	public function getId_product_download($id_product_download){
		 return $this->id_product_download;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getDisplay_filename($display_filename){
		 return $this->display_filename;
	}

	public function getFilename($filename){
		 return $this->filename;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_expiration($date_expiration){
		 return $this->date_expiration;
	}

	public function getNb_days_accessible($nb_days_accessible){
		 return $this->nb_days_accessible;
	}

	public function getNb_downloadable($nb_downloadable){
		 return $this->nb_downloadable;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getIs_shareable($is_shareable){
		 return $this->is_shareable;
	}



}