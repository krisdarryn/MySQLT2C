<?php

class Ps_access{


	/* fields */
	private $id_profile
	private $id_tab
	private $view
	private $add
	private $edit
	private $delete

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_profile($id_profile){
		$this->id_profile = $id_profile;
	}

	public function setId_tab($id_tab){
		$this->id_tab = $id_tab;
	}

	public function setView($view){
		$this->view = $view;
	}

	public function setAdd($add){
		$this->add = $add;
	}

	public function setEdit($edit){
		$this->edit = $edit;
	}

	public function setDelete($delete){
		$this->delete = $delete;
	}

	/* getters */
	public function getId_profile($id_profile){
		 return $this->id_profile;
	}

	public function getId_tab($id_tab){
		 return $this->id_tab;
	}

	public function getView($view){
		 return $this->view;
	}

	public function getAdd($add){
		 return $this->add;
	}

	public function getEdit($edit){
		 return $this->edit;
	}

	public function getDelete($delete){
		 return $this->delete;
	}



}