<?php

class Ps_customer{


	/* fields */
	private $id_customer
	private $id_shop_group
	private $id_shop
	private $id_gender
	private $id_default_group
	private $id_lang
	private $id_risk
	private $company
	private $siret
	private $ape
	private $firstname
	private $lastname
	private $email
	private $passwd
	private $last_passwd_gen
	private $birthday
	private $newsletter
	private $ip_registration_newsletter
	private $newsletter_date_add
	private $optin
	private $website
	private $outstanding_allow_amount
	private $show_public_prices
	private $max_payment_days
	private $secure_key
	private $note
	private $active
	private $is_guest
	private $deleted
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_gender($id_gender){
		$this->id_gender = $id_gender;
	}

	public function setId_default_group($id_default_group){
		$this->id_default_group = $id_default_group;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_risk($id_risk){
		$this->id_risk = $id_risk;
	}

	public function setCompany($company){
		$this->company = $company;
	}

	public function setSiret($siret){
		$this->siret = $siret;
	}

	public function setApe($ape){
		$this->ape = $ape;
	}

	public function setFirstname($firstname){
		$this->firstname = $firstname;
	}

	public function setLastname($lastname){
		$this->lastname = $lastname;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setPasswd($passwd){
		$this->passwd = $passwd;
	}

	public function setLast_passwd_gen($last_passwd_gen){
		$this->last_passwd_gen = $last_passwd_gen;
	}

	public function setBirthday($birthday){
		$this->birthday = $birthday;
	}

	public function setNewsletter($newsletter){
		$this->newsletter = $newsletter;
	}

	public function setIp_registration_newsletter($ip_registration_newsletter){
		$this->ip_registration_newsletter = $ip_registration_newsletter;
	}

	public function setNewsletter_date_add($newsletter_date_add){
		$this->newsletter_date_add = $newsletter_date_add;
	}

	public function setOptin($optin){
		$this->optin = $optin;
	}

	public function setWebsite($website){
		$this->website = $website;
	}

	public function setOutstanding_allow_amount($outstanding_allow_amount){
		$this->outstanding_allow_amount = $outstanding_allow_amount;
	}

	public function setShow_public_prices($show_public_prices){
		$this->show_public_prices = $show_public_prices;
	}

	public function setMax_payment_days($max_payment_days){
		$this->max_payment_days = $max_payment_days;
	}

	public function setSecure_key($secure_key){
		$this->secure_key = $secure_key;
	}

	public function setNote($note){
		$this->note = $note;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setIs_guest($is_guest){
		$this->is_guest = $is_guest;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_gender($id_gender){
		 return $this->id_gender;
	}

	public function getId_default_group($id_default_group){
		 return $this->id_default_group;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_risk($id_risk){
		 return $this->id_risk;
	}

	public function getCompany($company){
		 return $this->company;
	}

	public function getSiret($siret){
		 return $this->siret;
	}

	public function getApe($ape){
		 return $this->ape;
	}

	public function getFirstname($firstname){
		 return $this->firstname;
	}

	public function getLastname($lastname){
		 return $this->lastname;
	}

	public function getEmail($email){
		 return $this->email;
	}

	public function getPasswd($passwd){
		 return $this->passwd;
	}

	public function getLast_passwd_gen($last_passwd_gen){
		 return $this->last_passwd_gen;
	}

	public function getBirthday($birthday){
		 return $this->birthday;
	}

	public function getNewsletter($newsletter){
		 return $this->newsletter;
	}

	public function getIp_registration_newsletter($ip_registration_newsletter){
		 return $this->ip_registration_newsletter;
	}

	public function getNewsletter_date_add($newsletter_date_add){
		 return $this->newsletter_date_add;
	}

	public function getOptin($optin){
		 return $this->optin;
	}

	public function getWebsite($website){
		 return $this->website;
	}

	public function getOutstanding_allow_amount($outstanding_allow_amount){
		 return $this->outstanding_allow_amount;
	}

	public function getShow_public_prices($show_public_prices){
		 return $this->show_public_prices;
	}

	public function getMax_payment_days($max_payment_days){
		 return $this->max_payment_days;
	}

	public function getSecure_key($secure_key){
		 return $this->secure_key;
	}

	public function getNote($note){
		 return $this->note;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getIs_guest($is_guest){
		 return $this->is_guest;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}