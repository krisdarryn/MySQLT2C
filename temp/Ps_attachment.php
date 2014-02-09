<?php

class Ps_attachment{


	/* fields */
	private $id_attachment
	private $file
	private $file_name
	private $mime

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attachment($id_attachment){
		$this->id_attachment = $id_attachment;
	}

	public function setFile($file){
		$this->file = $file;
	}

	public function setFile_name($file_name){
		$this->file_name = $file_name;
	}

	public function setMime($mime){
		$this->mime = $mime;
	}

	/* getters */
	public function getId_attachment($id_attachment){
		 return $this->id_attachment;
	}

	public function getFile($file){
		 return $this->file;
	}

	public function getFile_name($file_name){
		 return $this->file_name;
	}

	public function getMime($mime){
		 return $this->mime;
	}



}