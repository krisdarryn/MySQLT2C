<?php

class Ps_guest{


	/* fields */
	private $id_guest
	private $id_operating_system
	private $id_web_browser
	private $id_customer
	private $javascript
	private $screen_resolution_x
	private $screen_resolution_y
	private $screen_color
	private $sun_java
	private $adobe_flash
	private $adobe_director
	private $apple_quicktime
	private $real_player
	private $windows_media
	private $accept_language
	private $mobile_theme

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_guest($id_guest){
		$this->id_guest = $id_guest;
	}

	public function setId_operating_system($id_operating_system){
		$this->id_operating_system = $id_operating_system;
	}

	public function setId_web_browser($id_web_browser){
		$this->id_web_browser = $id_web_browser;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setJavascript($javascript){
		$this->javascript = $javascript;
	}

	public function setScreen_resolution_x($screen_resolution_x){
		$this->screen_resolution_x = $screen_resolution_x;
	}

	public function setScreen_resolution_y($screen_resolution_y){
		$this->screen_resolution_y = $screen_resolution_y;
	}

	public function setScreen_color($screen_color){
		$this->screen_color = $screen_color;
	}

	public function setSun_java($sun_java){
		$this->sun_java = $sun_java;
	}

	public function setAdobe_flash($adobe_flash){
		$this->adobe_flash = $adobe_flash;
	}

	public function setAdobe_director($adobe_director){
		$this->adobe_director = $adobe_director;
	}

	public function setApple_quicktime($apple_quicktime){
		$this->apple_quicktime = $apple_quicktime;
	}

	public function setReal_player($real_player){
		$this->real_player = $real_player;
	}

	public function setWindows_media($windows_media){
		$this->windows_media = $windows_media;
	}

	public function setAccept_language($accept_language){
		$this->accept_language = $accept_language;
	}

	public function setMobile_theme($mobile_theme){
		$this->mobile_theme = $mobile_theme;
	}

	/* getters */
	public function getId_guest($id_guest){
		 return $this->id_guest;
	}

	public function getId_operating_system($id_operating_system){
		 return $this->id_operating_system;
	}

	public function getId_web_browser($id_web_browser){
		 return $this->id_web_browser;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getJavascript($javascript){
		 return $this->javascript;
	}

	public function getScreen_resolution_x($screen_resolution_x){
		 return $this->screen_resolution_x;
	}

	public function getScreen_resolution_y($screen_resolution_y){
		 return $this->screen_resolution_y;
	}

	public function getScreen_color($screen_color){
		 return $this->screen_color;
	}

	public function getSun_java($sun_java){
		 return $this->sun_java;
	}

	public function getAdobe_flash($adobe_flash){
		 return $this->adobe_flash;
	}

	public function getAdobe_director($adobe_director){
		 return $this->adobe_director;
	}

	public function getApple_quicktime($apple_quicktime){
		 return $this->apple_quicktime;
	}

	public function getReal_player($real_player){
		 return $this->real_player;
	}

	public function getWindows_media($windows_media){
		 return $this->windows_media;
	}

	public function getAccept_language($accept_language){
		 return $this->accept_language;
	}

	public function getMobile_theme($mobile_theme){
		 return $this->mobile_theme;
	}



}