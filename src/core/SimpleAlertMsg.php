<?php
namespace wh\getui\core;

class SimpleAlertMsg implements ApnMsg
{
    var $alertMsg;

    public function get_alertMsg() {
        return $this->alertMsg;
    }
}