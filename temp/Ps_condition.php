<?php

class Ps_condition{


	/* fields */
	private $id_condition
	private $id_ps_condition
	private $type
	private $request
	private $operator
	private $value
	private $result
	private $calculation_type
	private $calculation_detail
	private $validated
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_condition($id_condition){
		$this->id_condition = $id_condition;
	}

	public function setId_ps_condition($id_ps_condition){
		$this->id_ps_condition = $id_ps_condition;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function setRequest($request){
		$this->request = $request;
	}

	public function setOperator($operator){
		$this->operator = $operator;
	}

	public function setValue($value){
		$this->value = $value;
	}

	public function setResult($result){
		$this->result = $result;
	}

	public function setCalculation_type($calculation_type){
		$this->calculation_type = $calculation_type;
	}

	public function setCalculation_detail($calculation_detail){
		$this->calculation_detail = $calculation_detail;
	}

	public function setValidated($validated){
		$this->validated = $validated;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_condition($id_condition){
		 return $this->id_condition;
	}

	public function getId_ps_condition($id_ps_condition){
		 return $this->id_ps_condition;
	}

	public function getType($type){
		 return $this->type;
	}

	public function getRequest($request){
		 return $this->request;
	}

	public function getOperator($operator){
		 return $this->operator;
	}

	public function getValue($value){
		 return $this->value;
	}

	public function getResult($result){
		 return $this->result;
	}

	public function getCalculation_type($calculation_type){
		 return $this->calculation_type;
	}

	public function getCalculation_detail($calculation_detail){
		 return $this->calculation_detail;
	}

	public function getValidated($validated){
		 return $this->validated;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}