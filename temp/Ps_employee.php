<?php

class Ps_employee{


	/* fields */
	private $id_employee
	private $id_profile
	private $id_lang
	private $lastname
	private $firstname
	private $email
	private $passwd
	private $last_passwd_gen
	private $stats_date_from
	private $stats_date_to
	private $bo_color
	private $bo_theme
	private $default_tab
	private $bo_width
	private $bo_show_screencast
	private $active
	private $id_last_order
	private $id_last_customer_message
	private $id_last_customer

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setId_profile($id_profile){
		$this->id_profile = $id_profile;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setLastname($lastname){
		$this->lastname = $lastname;
	}

	public function setFirstname($firstname){
		$this->firstname = $firstname;
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

	public function setStats_date_from($stats_date_from){
		$this->stats_date_from = $stats_date_from;
	}

	public function setStats_date_to($stats_date_to){
		$this->stats_date_to = $stats_date_to;
	}

	public function setBo_color($bo_color){
		$this->bo_color = $bo_color;
	}

	public function setBo_theme($bo_theme){
		$this->bo_theme = $bo_theme;
	}

	public function setDefault_tab($default_tab){
		$this->default_tab = $default_tab;
	}

	public function setBo_width($bo_width){
		$this->bo_width = $bo_width;
	}

	public function setBo_show_screencast($bo_show_screencast){
		$this->bo_show_screencast = $bo_show_screencast;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setId_last_order($id_last_order){
		$this->id_last_order = $id_last_order;
	}

	public function setId_last_customer_message($id_last_customer_message){
		$this->id_last_customer_message = $id_last_customer_message;
	}

	public function setId_last_customer($id_last_customer){
		$this->id_last_customer = $id_last_customer;
	}

	/* getters */
	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getId_profile($id_profile){
		 return $this->id_profile;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getLastname($lastname){
		 return $this->lastname;
	}

	public function getFirstname($firstname){
		 return $this->firstname;
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

	public function getStats_date_from($stats_date_from){
		 return $this->stats_date_from;
	}

	public function getStats_date_to($stats_date_to){
		 return $this->stats_date_to;
	}

	public function getBo_color($bo_color){
		 return $this->bo_color;
	}

	public function getBo_theme($bo_theme){
		 return $this->bo_theme;
	}

	public function getDefault_tab($default_tab){
		 return $this->default_tab;
	}

	public function getBo_width($bo_width){
		 return $this->bo_width;
	}

	public function getBo_show_screencast($bo_show_screencast){
		 return $this->bo_show_screencast;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getId_last_order($id_last_order){
		 return $this->id_last_order;
	}

	public function getId_last_customer_message($id_last_customer_message){
		 return $this->id_last_customer_message;
	}

	public function getId_last_customer($id_last_customer){
		 return $this->id_last_customer;
	}



}