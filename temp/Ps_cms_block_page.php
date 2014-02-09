<?php

class Ps_cms_block_page{


	/* fields */
	private $id_cms_block_page
	private $id_cms_block
	private $id_cms
	private $is_category

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms_block_page($id_cms_block_page){
		$this->id_cms_block_page = $id_cms_block_page;
	}

	public function setId_cms_block($id_cms_block){
		$this->id_cms_block = $id_cms_block;
	}

	public function setId_cms($id_cms){
		$this->id_cms = $id_cms;
	}

	public function setIs_category($is_category){
		$this->is_category = $is_category;
	}

	/* getters */
	public function getId_cms_block_page($id_cms_block_page){
		 return $this->id_cms_block_page;
	}

	public function getId_cms_block($id_cms_block){
		 return $this->id_cms_block;
	}

	public function getId_cms($id_cms){
		 return $this->id_cms;
	}

	public function getIs_category($is_category){
		 return $this->is_category;
	}



}