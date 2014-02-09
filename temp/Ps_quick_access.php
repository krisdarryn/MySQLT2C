<?php

class Ps_quick_access{


	/* fields */
	private $id_quick_access
	private $new_window
	private $link

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_quick_access($id_quick_access){
		$this->id_quick_access = $id_quick_access;
	}

	public function setNew_window($new_window){
		$this->new_window = $new_window;
	}

	public function setLink($link){
		$this->link = $link;
	}

	/* getters */
	public function getId_quick_access($id_quick_access){
		 return $this->id_quick_access;
	}

	public function getNew_window($new_window){
		 return $this->new_window;
	}

	public function getLink($link){
		 return $this->link;
	}



}