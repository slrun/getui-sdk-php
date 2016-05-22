<?php
namespace wh\getui\core;

use wh\getui\protobuf\PBMessage;

class AppStartUp extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["3"] = "";
    }

    public function getAndroid()
    {
        return $this->_get_value("1");
    }

    public function setAndroid($value)
    {
        return $this->_set_value("1", $value);
    }

    public function getSymbia()
    {
        return $this->_get_value("2");
    }

    public function setSymbia($value)
    {
        return $this->_set_value("2", $value);
    }

    public function getIos()
    {
        return $this->_get_value("3");
    }

    public function setIos($value)
    {
        return $this->_set_value("3", $value);
    }
}