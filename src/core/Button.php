<?php
namespace wh\getui\core;

use wh\getui\protobuf\PBMessage;

class Button extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\wh\\getui\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\wh\\getui\\protobuf\\type\\PBInt";
        $this->values["2"] = "";
    }
    function getText()
    {
        return $this->_get_value("1");
    }
    function setText($value)
    {
        return $this->_set_value("1", $value);
    }
    function getNext()
    {
        return $this->_get_value("2");
    }
    function setNext($value)
    {
        return $this->_set_value("2", $value);
    }
}