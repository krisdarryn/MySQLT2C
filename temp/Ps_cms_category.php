<?php

class Ps_cms_category{


	/* fields */
	private $id_cms_category
	private $id_parent
	private $level_depth
	private $active
	private $date_add
	private $date_upd
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms_category($id_cms_category){
		$this->id_cms_category = $id_cms_category;
	}

	public function setId_parent($id_parent){
		$this->id_parent = $id_parent;
	}

	public function setLevel_depth($level_depth){
		$this->level_depth = $level_depth;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_cms_category($id_cms_category){
		 return $this->id_cms_category;
	}

	public function getId_parent($id_parent){
		 return $this->id_parent;
	}

	public function getLevel_depth($level_depth){
		 return $this->level_depth;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}

	public function getPosition($position){
		 return $this->position;
	}



}