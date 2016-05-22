<?php 
namespace wh\getui\template;

use wh\getui\core\ActionChain;
use wh\getui\core\ActionChainType;

class IGtLinkTemplate extends IGtBaseTemplate
{

	/**
	*String 
	*/
	var $text;

	/**
	*String 
	*/
	var $title;

	/**
	*String 
	*/
	var $logo;
	
	var $logoURL;

	/**
	*boolean 
	*/
	var $isRing;

	/**
	*boolean 
	*/
	var $isVibrate;

	/**
	*String 
	*/
	var $url;
	
	/**
	*boolean 
	*/
	var $isClearable;

	public function  getActionChain() {

		$actionChains = array();
		
		// 设置actionChain
		$actionChain1 = new ActionChain();
		$actionChain1->setActionId(1);
  		$actionChain1->setType(ActionChainType::refer);
		$actionChain1->setNext(10000);
		
		//通知
		$actionChain2 = new ActionChain();
		$actionChain2->setActionId(10000);
		$actionChain2->setType(ActionChainType::notification);
		$actionChain2->setTitle($this->title);
		$actionChain2->setText($this->text);
		$actionChain2->setLogo($this->logo);
		$actionChain2->setLogoURL($this->logoURL);
		$actionChain2->setRing($this->isRing ? true : false);
		$actionChain2->setClearable($this->isClearable ? true : false);
		$actionChain2->setBuzz($this->isVibrate ? true : false);
		$actionChain2->setNext(10010);

		
		//goto
		$actionChain3 = new ActionChain();
		$actionChain3->setActionId(10010);
		$actionChain3->setType(ActionChainType::refer);
		$actionChain3->setNext(10030);
	

		//启动web
		$actionChain4 = new ActionChain();
		$actionChain4->setActionId(10030);
		$actionChain4->setType(ActionChainType::startweb);
		$actionChain4->setUrl($this->url);
		$actionChain4->setNext(100);


		//结束
		$actionChain5 = new ActionChain();
		$actionChain5->setActionId(100);
		$actionChain5->setType(ActionChainType::eoa);
 
		array_push($actionChains, $actionChain1, $actionChain2, $actionChain3, $actionChain4, $actionChain5);

		return $actionChains;
	}

	function  getPushType() {
		return 'LinkMsg';
	}

	function  setText($text) {
		$this->text = $text;
	}

	function  setTitle($title) {
		$this->title = $title;
	}

	function  setLogo($logo) {
		$this->logo = $logo;
	}
	
	function  setLogoURL($logoURL) {
		$this->logoURL = $logoURL;
	}

	function  setUrl($url) {
		$this->url = $url;
	}

	function  setIsRing($isRing) {
		$this->isRing = $isRing;
	}

	function  setIsVibrate($isVibrate) {
		$this->isVibrate = $isVibrate;
	}

	function  setIsClearable($isClearable) {
		$this->isClearable = $isClearable;
	}
}