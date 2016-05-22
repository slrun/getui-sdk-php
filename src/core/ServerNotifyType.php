<?php
namespace wh\getui\core;

use wh\getui\protobuf\type\PBEnum;

class ServerNotifyType extends PBEnum
{
  const normal  = 0;
  const serverListChanged  = 1;
  const exception  = 2;
}