<?php
namespace wh\getui\core;

use wh\getui\protobuf\type\PBEnum;

class ActionChainSMSStatus extends PBEnum
{
    const unread    = 0;
    const read    = 1;
}