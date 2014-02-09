<?php

class Ps_stock_mvt_reason{


	/* fields */
	private $id_stock_mvt_reason
	private $sign
	private $date_add
	private $date_upd
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_stock_mvt_reason($id_stock_mvt_reason){
		$this->id_stock_mvt_reason = $id_stock_mvt_reason;
	}

	public function setSign($sign){
		$this->sign = $sign;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_stock_mvt_reason($id_stock_mvt_reason){
		 return $this->id_stock_mvt_reason;
	}

	public function getSign($sign){
		 return $this->sign;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}