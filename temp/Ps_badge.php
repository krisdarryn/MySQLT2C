<?php

class Ps_badge{


	/* fields */
	private $id_badge
	private $id_ps_badge
	private $type
	private $id_group
	private $group_position
	private $scoring
	private $validated

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_badge($id_badge){
		$this->id_badge = $id_badge;
	}

	public function setId_ps_badge($id_ps_badge){
		$this->id_ps_badge = $id_ps_badge;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setGroup_position($group_position){
		$this->group_position = $group_position;
	}

	public function setScoring($scoring){
		$this->scoring = $scoring;
	}

	public function setValidated($validated){
		$this->validated = $validated;
	}

	/* getters */
	public function getId_badge($id_badge){
		 return $this->id_badge;
	}

	public function getId_ps_badge($id_ps_badge){
		 return $this->id_ps_badge;
	}

	public function getType($type){
		 return $this->type;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getGroup_position($group_position){
		 return $this->group_position;
	}

	public function getScoring($scoring){
		 return $this->scoring;
	}

	public function getValidated($validated){
		 return $this->validated;
	}



}