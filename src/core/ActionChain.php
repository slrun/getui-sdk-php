<?php
namespace wh\getui\core;

use wh\getui\protobuf\PBMessage;
use wh\getui\protobuf\type\PBBool;

class ActionChain extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "\\wh\\getui\\core\\ActionChainType";
        $this->values["2"] = "";
        $this->fields["3"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["3"] = "";
        $this->fields["100"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["100"] = "";
        $this->fields["101"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["101"] = "";
        $this->fields["102"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["102"] = "";
        $this->fields["103"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["103"] = "";
        $this->fields["104"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["104"] = "";
        $this->fields["105"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["105"] = "";
        $this->fields["106"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["106"] = "";
        $this->fields["107"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["107"] = "";
        $this->fields["120"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["120"] = "";
        $this->fields["121"] = "\\wh\\getui\\core\\Button";
        $this->values["121"] = array();
        $this->fields["140"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["140"] = "";
        $this->fields["141"] = "\\wh\\getui\\core\\AppStartUp";
        $this->values["141"] = "";
        $this->fields["142"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["142"] = "";
        $this->fields["143"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["143"] = "";
        $this->fields["160"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["160"] = "";
        $this->fields["161"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["161"] = "";
        $this->fields["162"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["162"] = "";
        $this->values["162"] = new PBBool();
        $this->values["162"]->value = false;
        $this->fields["180"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["180"] = "";
        $this->fields["181"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["181"] = "";
        $this->fields["182"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["182"] = "";
        $this->fields["183"] = "\\wh\\getui\\core\\ActionChainSMSStatus";
        $this->values["183"] = "";
        $this->fields["200"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["200"] = "";
        $this->fields["201"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["201"] = "";
        $this->fields["220"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["220"] = "";
        $this->fields["223"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["223"] = "";
        $this->fields["225"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["225"] = "";
        $this->fields["226"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["226"] = "";
        $this->fields["227"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["227"] = "";
        $this->fields["241"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["241"] = "";
        $this->fields["242"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["242"] = "";
        $this->fields["260"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["260"] = "";
        $this->fields["280"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["280"] = "";
        $this->fields["281"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["281"] = "";
        $this->fields["300"] = "\\wh\\getui\\protobuf\\type\\PBBool";
        $this->values["300"] = "";
        $this->fields["320"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["320"] = "";
        $this->fields["340"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["340"] = "";
        $this->fields["360"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["360"] = "";
    }

    function getActionId()
    {
        return $this->_get_value("1");
    }

    function setActionId($value)
    {
        return $this->_set_value("1", $value);
    }

    function getType()
    {
        return $this->_get_value("2");
    }

    function setType($value)
    {
        return $this->_set_value("2", $value);
    }
    function getNext()
    {
        return $this->_get_value("3");
    }
    function setNext($value)
    {
        return $this->_set_value("3", $value);
    }
    function getLogo()
    {
        return $this->_get_value("100");
    }
    function setLogo($value)
    {
        return $this->_set_value("100", $value);
    }
    function getLogoURL()
    {
        return $this->_get_value("101");
    }
    function setLogoURL($value)
    {
        return $this->_set_value("101", $value);
    }
    function getTitle()
    {
        return $this->_get_value("102");
    }
    function setTitle($value)
    {
        return $this->_set_value("102", $value);
    }
    function getText()
    {
        return $this->_get_value("103");
    }
    function setText($value)
    {
        return $this->_set_value("103", $value);
    }
    function getClearable()
    {
        return $this->_get_value("104");
    }
    function setClearable($value)
    {
        return $this->_set_value("104", $value);
    }
    function getRing()
    {
        return $this->_get_value("105");
    }
    function setRing($value)
    {
        return $this->_set_value("105", $value);
    }
    function getBuzz()
    {
        return $this->_get_value("106");
    }
    function setBuzz($value)
    {
        return $this->_set_value("106", $value);
    }
    function getBannerURL()
    {
        return $this->_get_value("107");
    }
    function setBannerURL($value)
    {
        return $this->_set_value("107", $value);
    }
    function getImg()
    {
        return $this->_get_value("120");
    }
    function setImg($value)
    {
        return $this->_set_value("120", $value);
    }
    function getButtons($offset)
    {
        return $this->_get_arr_value("121", $offset);
    }
    function addButtons()
    {
        return $this->_add_arr_value("121");
    }
    function setButtons($index, $value)
    {
        $this->_set_arr_value("121", $index, $value);
    }
    function remove_last_buttons()
    {
        $this->_remove_last_arr_value("121");
    }
    function buttons_size()
    {
        return $this->_get_arr_size("121");
    }
    function getAppid()
    {
        return $this->_get_value("140");
    }
    function setAppid($value)
    {
        return $this->_set_value("140", $value);
    }
    function getAppstartupid()
    {
        return $this->_get_value("141");
    }
    function setAppstartupid($value)
    {
        return $this->_set_value("141", $value);
    }
    function getAutostart()
    {
        return $this->_get_value("142");
    }
    function setAutostart($value)
    {
        return $this->_set_value("142", $value);
    }
    function getFailedAction()
    {
        return $this->_get_value("143");
    }
    function setFailedAction($value)
    {
        return $this->_set_value("143", $value);
    }
    function getUrl()
    {
        return $this->_get_value("160");
    }
    function setUrl($value)
    {
        return $this->_set_value("160", $value);
    }
    function getWithcid()
    {
        return $this->_get_value("161");
    }
    function setWithcid($value)
    {
        return $this->_set_value("161", $value);
    }
    function getIsWithnettype()
    {
        return $this->_get_value("162");
    }
    function setIswithnettype($value)
    {
        return $this->_set_value("162", $value);
    }
    function getAddress()
    {
        return $this->_get_value("180");
    }
    function setAddress($value)
    {
        return $this->_set_value("180", $value);
    }
    function getContent()
    {
        return $this->_get_value("181");
    }
    function setContent($value)
    {
        return $this->_set_value("181", $value);
    }
    function getCt()
    {
        return $this->_get_value("182");
    }
    function setCt($value)
    {
        return $this->_set_value("182", $value);
    }
    function getFlag()
    {
        return $this->_get_value("183");
    }
    function setFlag($value)
    {
        return $this->_set_value("183", $value);
    }
    function getSuccessedAction()
    {
        return $this->_get_value("200");
    }
    function setSuccessedAction($value)
    {
        return $this->_set_value("200", $value);
    }
    function getUninstalledAction()
    {
        return $this->_get_value("201");
    }
    function setUninstalledAction($value)
    {
        return $this->_set_value("201", $value);
    }
    function getName()
    {
        return $this->_get_value("220");
    }
    function setName($value)
    {
        return $this->_set_value("220", $value);
    }
    function getAutoInstall()
    {
        return $this->_get_value("223");
    }
    function setAutoInstall($value)
    {
        return $this->_set_value("223", $value);
    }
    function getWifiAutodownload()
    {
        return $this->_get_value("225");
    }
    function setWifiAutodownload($value)
    {
        return $this->_set_value("225", $value);
    }
    function getForceDownload()
    {
        return $this->_get_value("226");
    }
    function setForceDownload($value)
    {
        return $this->_set_value("226", $value);
    }
    function getShowProgress()
    {
        return $this->_get_value("227");
    }
    function setShowProgress($value)
    {
        return $this->_set_value("227", $value);
    }
    function getPost()
    {
        return $this->_get_value("241");
    }
    function setPost($value)
    {
        return $this->_set_value("241", $value);
    }
    function getHeaders()
    {
        return $this->_get_value("242");
    }
    function setHeaders($value)
    {
        return $this->_set_value("242", $value);
    }
    function getGroupable()
    {
        return $this->_get_value("260");
    }
    function setGroupable($value)
    {
        return $this->_set_value("260", $value);
    }
    function getMmsTitle()
    {
        return $this->_get_value("280");
    }
    function setMmsTitle($value)
    {
        return $this->_set_value("280", $value);
    }
    function getMmsURL()
    {
        return $this->_get_value("281");
    }
    function setMmsURL($value)
    {
        return $this->_set_value("281", $value);
    }
    function getPreload()
    {
        return $this->_get_value("300");
    }
    function setPreload($value)
    {
        return $this->_set_value("300", $value);
    }
    function getTaskid()
    {
        return $this->_get_value("320");
    }
    function setTaskid($value)
    {
        return $this->_set_value("320", $value);
    }
    function getDuration()
    {
        return $this->_get_value("340");
    }
    function setDuration($value)
    {
        return $this->_set_value("340", $value);
    }
    function getDate()
    {
        return $this->_get_value("360");
    }
    function setDate($value)
    {
        return $this->_set_value("360", $value);
    }
}
