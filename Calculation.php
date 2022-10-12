<?php

class Calculation{
	
	private $imgAWidth,$imgAHeight,$imgBWidth,$imgBHeight;
	public function __construct($postData){
		$this->imgAWidth = $postData['imgAWidth'];
		$this->imgAHeight = $postData['imgAHeight'];
		$this->imgBWidth = $postData['imgBWidth'];
		$this->imgBHeight = $postData['imgBHeight'];
	}
	
	public function calcContain(){
		$conWidth = ($this->imgAWidth < $this->imgBWidth) ? $this->imgBWidth - $this->imgAWidth : $this->imgBWidth;
		$conHeight = ($this->imgAHeight < $this->imgBHeight) ? $this->imgBHeight - $this->imgAHeight : $this->imgBHeight;
		echo "Contain Width * Height :" .$conWidth. "*". $conHeight. "<br>";
	}
	
	public function calcCover(){
		$conWidth = ($this->imgAWidth < $this->imgBWidth) ? $this->imgBWidth : $this->imgAWidth;
		$conHeight = ($this->imgAHeight < $this->imgBHeight) ? $this->imgBHeight : $this->imgAHeight;
		echo "Cover Width * Height :" .$conWidth. "*". $conHeight;
	}
}

$calc = new Calculation($_POST);
$calc->calcContain();
$calc->calcCover();