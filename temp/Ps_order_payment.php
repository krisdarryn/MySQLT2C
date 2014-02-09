<?php

class Ps_order_payment{


	/* fields */
	private $id_order_payment
	private $order_reference
	private $id_currency
	private $amount
	private $payment_method
	private $conversion_rate
	private $transaction_id
	private $card_number
	private $card_brand
	private $card_expiration
	private $card_holder
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_payment($id_order_payment){
		$this->id_order_payment = $id_order_payment;
	}

	public function setOrder_reference($order_reference){
		$this->order_reference = $order_reference;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setAmount($amount){
		$this->amount = $amount;
	}

	public function setPayment_method($payment_method){
		$this->payment_method = $payment_method;
	}

	public function setConversion_rate($conversion_rate){
		$this->conversion_rate = $conversion_rate;
	}

	public function setTransaction_id($transaction_id){
		$this->transaction_id = $transaction_id;
	}

	public function setCard_number($card_number){
		$this->card_number = $card_number;
	}

	public function setCard_brand($card_brand){
		$this->card_brand = $card_brand;
	}

	public function setCard_expiration($card_expiration){
		$this->card_expiration = $card_expiration;
	}

	public function setCard_holder($card_holder){
		$this->card_holder = $card_holder;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_order_payment($id_order_payment){
		 return $this->id_order_payment;
	}

	public function getOrder_reference($order_reference){
		 return $this->order_reference;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getAmount($amount){
		 return $this->amount;
	}

	public function getPayment_method($payment_method){
		 return $this->payment_method;
	}

	public function getConversion_rate($conversion_rate){
		 return $this->conversion_rate;
	}

	public function getTransaction_id($transaction_id){
		 return $this->transaction_id;
	}

	public function getCard_number($card_number){
		 return $this->card_number;
	}

	public function getCard_brand($card_brand){
		 return $this->card_brand;
	}

	public function getCard_expiration($card_expiration){
		 return $this->card_expiration;
	}

	public function getCard_holder($card_holder){
		 return $this->card_holder;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}