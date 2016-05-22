<?php 
namespace wh\getui\template;

use wh\getui\core\ActionChain;
use wh\getui\core\ActionChainType;
use wh\getui\core\AppStartUp;

class IGtNotificationTemplate extends IGtBaseTemplate
{

	var $text;
	var $title;
	var $logo;
	var $logoURL;
	var $transmissionType;
	var $transmissionContent;
	var $isRing;
	var $isVibrate;
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
	

		//appStartUp
		$appStartUp = new AppStartUp();
 		$appStartUp->setAndroid("");
		$appStartUp->setSymbia("");
		$appStartUp->setIos("");

		//启动app
		$actionChain4 = new ActionChain();
		$actionChain4->setActionId(10030);
		$actionChain4->setType(ActionChainType::startapp);
		$actionChain4->setAppid("");
		$actionChain4->setAutostart($this->transmissionType == '1'? true : false);
		$actionChain4->setAppstartupid($appStartUp);
		$actionChain4->setFailedAction(100);
		$actionChain4->setNext(100);


		//结束
		$actionChain5 = new ActionChain();
		$actionChain5->setActionId(100);
		$actionChain5->setType(ActionChainType::eoa);
 
		array_push($actionChains, $actionChain1,$actionChain2,$actionChain3,$actionChain4,$actionChain5);

		return $actionChains;
	}

	function  getTransmissionContent() {
		return $this->transmissionContent;
	}
	
	function  getPushType() {
		return 'NotifyMsg';
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
	
	function  setTransmissionType($transmissionType) {
		$this->transmissionType = $transmissionType;
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

	function  setTransmissionContent($transmissionContent) {
		$this->transmissionContent = $transmissionContent;
	}
}