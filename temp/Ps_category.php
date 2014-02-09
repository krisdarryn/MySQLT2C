<?php

class Ps_category{


	/* fields */
	private $id_category
	private $id_parent
	private $id_shop_default
	private $level_depth
	private $nleft
	private $nright
	private $active
	private $date_add
	private $date_upd
	private $position
	private $is_root_category

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	public function setId_parent($id_parent){
		$this->id_parent = $id_parent;
	}

	public function setId_shop_default($id_shop_default){
		$this->id_shop_default = $id_shop_default;
	}

	public function setLevel_depth($level_depth){
		$this->level_depth = $level_depth;
	}

	public function setNleft($nleft){
		$this->nleft = $nleft;
	}

	public function setNright($nright){
		$this->nright = $nright;
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

	public function setIs_root_category($is_root_category){
		$this->is_root_category = $is_root_category;
	}

	/* getters */
	public function getId_category($id_category){
		 return $this->id_category;
	}

	public function getId_parent($id_parent){
		 return $this->id_parent;
	}

	public function getId_shop_default($id_shop_default){
		 return $this->id_shop_default;
	}

	public function getLevel_depth($level_depth){
		 return $this->level_depth;
	}

	public function getNleft($nleft){
		 return $this->nleft;
	}

	public function getNright($nright){
		 return $this->nright;
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

	public function getIs_root_category($is_root_category){
		 return $this->is_root_category;
	}



}