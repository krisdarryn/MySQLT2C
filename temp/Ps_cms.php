<?php

class Ps_cms{


	/* fields */
	private $id_cms
	private $id_cms_category
	private $position
	private $active
	private $indexation

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms($id_cms){
		$this->id_cms = $id_cms;
	}

	public function setId_cms_category($id_cms_category){
		$this->id_cms_category = $id_cms_category;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setIndexation($indexation){
		$this->indexation = $indexation;
	}

	/* getters */
	public function getId_cms($id_cms){
		 return $this->id_cms;
	}

	public function getId_cms_category($id_cms_category){
		 return $this->id_cms_category;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getIndexation($indexation){
		 return $this->indexation;
	}



}